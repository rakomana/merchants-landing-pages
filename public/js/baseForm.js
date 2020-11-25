"use strict";
function nullCoalesce(...args){
	for(var key in args){
		if(args[key] !== undefined && args[key] !== null){
			return args[key];
		}
	}
}

function hasJsonStructure(str) {
    if (typeof str !== 'string') return false;
    try {
        const result = JSON.parse(str);
        const type = Object.prototype.toString.call(result);
        return type === '[object Object]' 
            || type === '[object Array]';
    } catch (err) {
        return false;
    }
}

async function postValidationFailures(fieldName, fieldId, fieldValue, errorString){
	var loopRunning		= true,
		backoffFactor = 2000;

	if(errorString === true){
		$("#" + fieldId).closest("form").trigger("submit");
		return;
	} if(errorString === false){
		return;
	}

	if($("#" + fieldId).closest(".validateMultipleContainer").length > 0){
		if($("#" + fieldId).closest(".validateMultipleContainer").parent().find(".fieldForValidation").attr("id") == fieldId){
			fieldValue	= {};
			$("#" + fieldId).closest(".validateMultipleContainer").parent().find(".fieldForValidation").each(function(){
				fieldValue[$(this).attr("name")] = $(this).val();
			});
		} else{
			return;
		}
	}
	
	await waitUntilLoadingSlot();
	window.preloadingCnt++;
	while(loopRunning){
		await $.post(
				$("#scriptData").data("baseloaderurl") + "/postFieldData/failedValidation",
				{
					"fieldName": fieldName,
					"fieldValue":fieldValue,
					"errorString":errorString
				}
			)
			.then((_response) => {
				window.preloadingCnt--;
				loopRunning	= false;
			})
			.catch((_jqxhr, _textStatus, error) => {
				console.log(error);
			});
		await sleep(backoffFactor);
		backoffFactor = backoffFactor * 2;
	}
}
function getValidityData(fieldId){
	var $field 		= $("#" + fieldId),
		field;

	if($field.length === 0){
		return "customError";
	}
	field		= $field[0];

	/* The structure here deliberately mirrors the set function */
	/* Hidden inputs can't be valid in the same way as normal inputs, use a mix of browser and non-browser */
	if(field.nodeName == "INPUT" && field.type == "hidden"){
		field.setCustomValidity(""); // Allow complex validation to rerun
		return nullCoalesce($field.data("validity"), "customError");
	} else if(typeof document.getElementById(fieldId).validity !== "undefined"){	
		/* Non-hidden inputs work entirely in the DOM */
		if(field.validity.valueMissing === false && field.validity.customError === true){
			let errorMessage	= field.validationMessage;
			field.setCustomValidity(""); // Allow complex validation to rerun
			return errorMessage;
		}
		for(var key in field.validity){
			if(
				(
					key !== "customError" && 
					key !== "valid"
				) &&
				field.validity[key] === true
			){
				return key;
			}
		}
		return "customError";
	} else{
		/* Finally, not an input, use the data attribute (no help from the browser) */
		return nullCoalesce($field.data("validity"), "customError");
	}
}

function buildAndDisplayValidationMessage(fieldName, fieldId){
	var errorString			= "An Unknown Error Occured",
		errorStringSet		= false,
		errorMsgs			= $("#scriptData").data("customerrormessages"),
		errorType			= getValidityData(fieldId),
		$errorEle			= $("." + fieldName + "Error"
									+ (
										(
											typeof errorMsgs[fieldName] !== "undefined" &&
											errorMsgs[fieldName]["useCombined"] == true
										) ?
										"Combined" :
										""
									)
								),
		actualEle			= document.getElementById(fieldId),
		validationFunc;



	if($(actualEle).hasClass("multipleField")){
		validationFunc	= $(actualEle).closest(".multipleFieldParent").data("validatevia");
	} else{
		validationFunc	= $(actualEle).data("validatevia");
	}

	/* Error Type Overrides */
	if(errorType === "patternMismatch"){
		if(
			actualEle.minLength.toString().length > 0 && 
			actualEle.minLength >= 0 && 
			actualEle.value.length < actualEle.minLength
		){
			errorType		= "tooShort";
		} else if(
			actualEle.maxLength.toString().length > 0 && 
			actualEle.maxLength >= 0 && 
			actualEle.value.length > 
			actualEle.maxLength
		){
			overrideType	= "tooLong";
		}
	}





	if(typeof errorMsgs[fieldName] !== "undefined"){
		if(
			typeof errorMsgs[fieldName][errorType] !== "undefined" &&
			typeof errorMsgs[fieldName][errorType] !== "object"
		){
			errorString		= errorMsgs[fieldName][errorType];
			errorStringSet	= true;
		} else if( /* For providing an e-mail when validating in a certain way */
			typeof errorMsgs[fieldName][errorType]	!== "undefined" &&
			typeof errorMsgs[fieldName][errorType][validationFunc] !== "undefined"
		){
			errorString		= errorMsgs[fieldName][errorType][validationFunc];
			errorStringSet	= true;
		} else if(
			typeof errorMsgs[fieldName]["customError"]	!== "undefined" &&
			typeof errorMsgs[fieldName]["customError"][errorType] !== "undefined"
		){
			errorString		= errorMsgs[fieldName]["customError"][errorType];
			errorStringSet	= true;
		}
	}



	if(!errorStringSet && typeof errorMsgs["default"] !== "undefined"){
		if(
			typeof errorMsgs["default"][errorType] !== "undefined" &&
			typeof errorMsgs["default"][errorType] !== "object"
		){
			errorString		= errorMsgs["default"][errorType];
			errorStringSet	= true;
		} else if( /* For providing an e-mail when validating in a certain way */
			typeof errorMsgs["default"][errorType]	!== "undefined" &&
			typeof errorMsgs["default"][errorType][validationFunc] !== "undefined"
		){
			errorString		= errorMsgs["default"][errorType][validationFunc];
			errorStringSet	= true;
		} else if(
			typeof errorMsgs["default"]["customError"]	!== "undefined" &&
			typeof errorMsgs["default"]["customError"][errorType] !== "undefined"
		){
			errorString		= errorMsgs["default"]["customError"][errorType];
			errorStringSet	= true;
		} else{
			errorString		= nullCoalesce(errorMsgs["default"]["default"], errorString);
		}
	}





	if(typeof window[errorString] === "function"){
		var errorString	=  window[errorString](fieldId, errorType);
		if(typeof errorString === "boolean"){
			return errorString;
		}
	}



	if(
		typeof $(actualEle).closest(".sectionContainer").data("combinederrorid") == "undefined" ||
		$("." + $(actualEle).closest(".sectionContainer").data("combinederrorid")).length == 0 ||
		$("." + $(actualEle).closest(".sectionContainer").data("combinederrorid")).hasClass("hidden")
	){
		$errorEle.html(errorString).removeClass("hidden");
		$errorEle.closest(".errorMessageBound").find(".fieldForValidation").addClass("invalidField");
	}
	return errorString;
}



async function postValidationSuccess(fieldName, fieldId, fieldValue){
	if(
		$("#" + fieldId).closest(".validateMultipleContainer").length > 0 &&
		$("#" + fieldId).closest(".validateMultipleContainer").parent().find(".sectionContainer").length == 0
	){
		fieldValue	= {};
		$("#" + fieldId).closest(".validateMultipleContainer").parent().find(".fieldForValidation").each(function(){
			switch(this.tagName){
				case "INPUT":
					switch(this.type){
						case "radio":
						case "checkbox":
							if($(this).is(":checked")){
								fieldValue[$(this).attr("name")] = $(this).val();
							}
							break;
						case "button":
							if($(this).hasClass("checked")){
								fieldValue[$(this).attr("name")] = $(this).val();
							}
							break;
						default:
							fieldValue[$(this).attr("name")] = $(this).val();
					}
				break;
				case "BUTTON":
					if($(this).hasClass("checked")){
						fieldValue[$(this).attr("name")] = $(this).val();
					}
				break;
				default:
					fieldValue[$(this).attr("name")] = $(this).val();
			}			
		});
	}

	var loopRunning		= true,
		backoffFactor 	= 2000;
	
	await waitUntilLoadingSlot();
	window.preloadingCnt++;
	while(loopRunning){
		await $.post(
				$("#scriptData").data("baseloaderurl") + "/postFieldData/fieldSubmission",
				{
					"fieldName": fieldName,
					"fieldValue":fieldValue,
					"csrfToken":$("#csrfToken").val()
				}
			)
			.then((_response) => {
				window.preloadingCnt--;
				loopRunning	= false;
			})
			.catch((_jqxhr, _textStatus, error) => {
				console.log(error);
			});
		await sleep(backoffFactor);
		backoffFactor = backoffFactor * 2;
	}
}

function clearValidationMessage(fieldName){
	$(".fieldForValidation[name='" + fieldName + "']").removeClass("invalidField");
	$("." + fieldName + "Error, ." + fieldName + "ErrorCombined").addClass("hidden").html("&nbsp;");
}

async function pageSubmitFunction(event){
	event.preventDefault();

	let validationResult = await runValidationQueue();
	if(!validationResult){
		return false; // Validation Queue should handle validation for individual elements
	}

	if($("#formPageForm").length > 0){
		$("#fullFormData").remove();
		$("<input>")
			.attr("type", "hidden")
			.attr("form", "formPageForm")
			.attr("id", "fullFormData")
			.attr("name", "fullFormData")
			.val(JSON.stringify(window.currentFormData))
			.appendTo("body");
		$(".fieldForValidation").not(":visible").not(".validateEvenWhenHidden").not(".singleDelegatedField").prop("disabled", true);
		$(".delegatedFieldParent").not(":visible").not(".validateEvenWhenHidden").each(function(_index, element){
			$("#" + $(element).data("for")).prop("disabled", true);;
		});
	}

	return true;
}

function onInputFocus(event){
	$(event.target.parentNode).addClass("inputFilled");
}

function onInputBlur(event){
	if(event.target.value.trim() === ""){
		$(event.target.parentNode).removeClass("inputFilled");
	} else{
		$(event.target.parentNode).addClass("inputFilled");
	}
}

function runStateChangeQueue(){
	for(var index in stateChangeQueue){
		stateChangeQueue[index]();
	}

	$("#formPageForm").children(".sectionContainer:visible").has(".inputFieldAkira").each(function(){
		if(
			$($(this).prevAll(":visible")[0]).hasClass("sectionContainer")
		){
			$(this).addClass("paddingTop20");
		} else{
			$(this).removeClass("paddingTop20");
		}
	});
	
	$("#formPageForm").children(".lineBreak10:visible").each(function(){
		if(
			$($(this).prevAll(":visible")[0]).hasClass("lineBreak10") && 
			$($(this).nextAll(":visible")[0]).hasClass("lineBreak10")
		){
			$(this).addClass("hidden");
		} else{
			$(this).removeClass("hidden");
		}
	});
}

async function runValidationQueue(){
	var validationPassed	= true;
	for(var index in validationQueue){
		await validationQueue[index]()
			.then((result) => {
				validationPassed	= (!result ? false : validationPassed);
			});
	}
	return validationPassed;
}

function checkCriteriaMet(rulesObject){
	if(typeof rulesObject === "boolean" || typeof rulesObject === "undefined" || rulesObject === null){
		return rulesObject;	
	}

	return calculateResultantOfRequirementsObjects(rulesObject);
}






function calculateResultantOfRequirementsObjects(rulesObject, targetedItemsCarry){
	const	matchType				= nullCoalesce(rulesObject["matchType"], "or");
	let		numberOfChecks			= null,
			passedChecks			= 0;
	targetedItemsCarry				= nullCoalesce(targetedItemsCarry, []);

	outerCheckLoop:for(let checkId in nullCoalesce(rulesObject["checks"], [])){
		if(typeof rulesObject["checks"][checkId]["checks"] !== "undefined"){
			numberOfChecks++;
			if(calculateResultantOfRequirementsObjects(rulesObject["checks"][checkId], targetedItemsCarry) === true){
				passedChecks++;
			}
			continue;
		}

		innerCheckLoop:for(let innerCheckKey in rulesObject["checks"][checkId]){
			numberOfChecks++;
			if(processSingleRequirementCheck(innerCheckKey, rulesObject["checks"][checkId][innerCheckKey]) === true){
				if(typeof rulesObject["checks"][checkId][innerCheckKey]["targets"] !== "undefined"){
					rulesObject["checks"][checkId][innerCheckKey]["targets"].forEach(element => targetedItemsCarry.push(element.toString()));
				}
				passedChecks++;
			}
		}
	}
	
	switch(matchType){
		case "targets":
			return targetedItemsCarry;
		case "and":
			return (numberOfChecks !== null && passedChecks >= numberOfChecks);
		case "or":
		default:
			return (numberOfChecks !== null && passedChecks > 0);
	}
}






function processSingleRequirementCheck(checkKey, checkDetails){
	const	keyControlValue                    = checkKey.substr(0, 1),
			keyCheckString                     = checkKey.substr(1);
	let		currentFieldValue,
			currentFieldValueCmp,
			compareValueCmp,
			tarDateTime;



	controlValueSwitch:switch(keyControlValue){
		case "^":
			currentFieldValue					= keyCheckString;
			checkDetails["op"]					= "equal";
			checkDetails["value"]				= true;
			break;
		case "*":
			var $namedFields					= $(
				".fieldForValidation:visible[name=" + keyCheckString + "]," +
				".fieldForValidation.validateEvenWhenHidden[name=" + keyCheckString + "]"
			);
			var delegatedFieldValue				= null;
			$(".delegatedFieldParent:visible,.delegatedFieldParent.validateEvenWhenHidden").each(function(_index, element){
				var $delegatedFields			= $("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").filter(function(_index, element){
					return $(element).attr("name") == keyCheckString;
				});
				if($delegatedFields.length > 0){
					delegatedFieldValue			= $delegatedFields.val();
				}
			});
			currentFieldValue					= (
				keyCheckString.length > 0 ?
				nullCoalesce(
					$namedFields.val(),
					$namedFields.data("value"), 
					delegatedFieldValue,
					window.generatedFormData[keyCheckString],
					window.currentFormData[keyCheckString]
				) :
				null
			);
			break;
		case "!":
			sourceSwitch:switch(checkDetails["source"]){
				case "sessionStart":
					tarDateTime					= new Date($("#scriptData").data("t1") * 1000);
					if(isNaN(tarDateTime.valueOf())){
						return false;
					}
					break;
				case "currentSecond":
					tarDateTime					= new Date();
					if(isNaN(tarDateTime.valueOf())){
						return false;
					}
					break;
				case "formStart":
					tarDateTime					= new Date($("#scriptData").data("t2") * 1000);
					if(isNaN(tarDateTime.valueOf())){
						return false;
					}
					break;
				default:
					switch(keyCheckString){
						case "formType":
						case "behaviourFlag":
							// This can only be checked in PHP
							return true;
						default:
					}
			}



			switch(keyCheckString){
				case "timeOfDay": /* Format: HHMMSS, e.g. 140349 */
					currentFieldValue  = ("0" + tarDateTime.getHours()).slice(-2) + ("0" + tarDateTime.getMinutes()).slice(-2);
					break controlValueSwitch;
				case "dayOfWeek": /*  1 is Monday -> 7 is Sunday (Note, Sunday 'starts' as 0 though)*/
					currentFieldValue  = (tarDateTime.getDay() == 0 ? 7 : tarDateTime.getDay());
					break controlValueSwitch;
				case "dayOfMonth":
					currentFieldValue  = tarDateTime.getDate();
					break controlValueSwitch;
				case "monthOfYear":
					currentFieldValue  = tarDateTime.getMonth() + 1;
					break controlValueSwitch;
				case "yearNumber":
					currentFieldValue  = tarDateTime.getFullYear();
					break controlValueSwitch;
				default:
					return false;
			}
		default:
			return false;
	}
	
	if(typeof currentFieldValue === "undefined" || currentFieldValue === null){
		currentFieldValue			= "";
	}
	switch(typeof checkDetails["value"]){
		case "boolean":
		case "string":
			currentFieldValueCmp	= currentFieldValue.toString();
			compareValueCmp			= checkDetails["value"].toString();
		break;
		case "number":
			currentFieldValueCmp	= Number.parseFloat(currentFieldValue);
			compareValueCmp			= Number.parseFloat(checkDetails["value"]);
		break;
		default:
			currentFieldValueCmp	= currentFieldValue;
			compareValueCmp			= checkDetails["value"];
	}





	switch(checkDetails["op"]){
		/* Back/Front End Field Rules */
		case "hidden":
			if(
				(
					$("input[name=" + keyCheckString + "]").not(":visible").length > 0 &&
					$("input[name=" + keyCheckString + "]").filter(":visible").length == 0
				)
			){
				return true;
			}

			return false;
		case "visible":
			if(
				$("input[name=" + keyCheckString + "]").filter(":visible").length > 0
			){
				return true;
			}
			return false;



		case "required":
			if(
				$("input[name=" + keyCheckString + "]").filter(function(_index, element){
					var $element	= $(element);
					return (checkCriteriaMet($element.data("requiredif")));
				}
			).length > 0){
				return true;
			}
			return false;
		case "optional":
			if(
				$("input[name=" + keyCheckString + "]").filter(function(_index, element){
					var $element	= $(element);
					return (!checkCriteriaMet($element.data("requiredif")));
				}
			).length > 0){
				return true;
			}
			return false;



		case "valid":
			var $namedFields					= $(
				".fieldForValidation:visible[name=" + keyCheckString + "]," +
				".fieldForValidation.validateEvenWhenHidden[name=" + keyCheckString + "]"
			);
			if(
				(
					(
						$namedFields.length > 0 &&
						$namedFields.filter(function(_index, element){
							return element.validity.valid;
						}).length == 0
					) &&
					(
						$(".delegatedFieldParent:visible").filter(function(_index, element){
							return $("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").attr("name") == keyCheckString &&
									$("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").filter(function(_index, element){
										return element.validity.valid;
									}).length > 0;
						}).length == 0
					)
				) &&
				typeof window.generatedFormData[keyCheckString] === "undefined" &&
				typeof window.currentFormData[keyCheckString] === "undefined"
			){
				return false;
			}
			return true;
		case "invalid":
			var $namedFields					= $(
				".fieldForValidation:visible[name=" + keyCheckString + "]," +
				".fieldForValidation.validateEvenWhenHidden[name=" + keyCheckString + "]"
			);
			if(
				(
					(
						$namedFields.length > 0 &&
						$namedFields.filter(function(_index, element){
							return element.validity.valid;
						}).length == 0
					) &&
					(
						$(".delegatedFieldParent:visible").filter(function(_index, element){
							return $("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").attr("name") == keyCheckString &&
									$("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").filter(function(_index, element){
										return element.validity.valid;
									}).length > 0;
						}).length == 0
					)
				) &&
				typeof window.generatedFormData[keyCheckString] === "undefined" &&
				typeof window.currentFormData[keyCheckString] === "undefined"
			){
				return true;
			}
			return false;



		case "missing":
			if(
				(
					compareValueCmp == "false" &&
					(typeof currentFieldValueCmp !== "undefined") && 
					currentFieldValueCmp !== null && 
					currentFieldValueCmp.length > 0
				) ||
				(
					compareValueCmp == "true" && 
					(
						(typeof currentFieldValueCmp === "undefined") ||
						currentFieldValueCmp === null ||
						currentFieldValueCmp.length == 0
					)
				)
			){
				return true;
			}
			return false;
		case "present":
			if(
				(
					compareValueCmp == "true" && 
					(typeof currentFieldValueCmp !== "undefined") && 
					currentFieldValueCmp !== null && 
					currentFieldValueCmp.length > 0
				) ||
				(
					compareValueCmp == "false" && 
					(
						(typeof currentFieldValueCmp === "undefined") ||
						currentFieldValueCmp === null || 
						currentFieldValueCmp.length == 0
					)
				)
			){
				return true;
			}
			return false;



		/* Back/Front End Field/Temporal Rules */
		case "notEqual":
			if(currentFieldValueCmp != compareValueCmp){
				return true;
			}
			return false;



		case "lessThan":
			if(currentFieldValueCmp < compareValueCmp){
				return true;
			}
			return false;



		case "lessThanEqual":
			if(currentFieldValueCmp <= compareValueCmp){
				return true;
			}
			return false;



		case "greaterThan":
			if(currentFieldValueCmp > compareValueCmp){
				return true;
			}
			return false;



		case "greaterThanEqual":
			if(currentFieldValueCmp >= compareValueCmp){
				return true;
			}
			return false;



		/* Back/Front End Field/Temporal/Boolean Rules */
		case "equal":
			if(currentFieldValueCmp == compareValueCmp){
				return true;
			}
			return false;



		default:
			return false;
	}
}

function processPageLoadComplete(){
	if($(".scrollToHereOnPageLoad").length > 0){
		$(document.documentElement).scrollTop($(".scrollToHereOnPageLoad").first().offset().top);
	}



	try{
		$(".noJs").removeClass("noJs");
		$("input.inputField").each(function(index, element){
			$(element).on("focus", "", onInputFocus);
			$(element).on("blur", "", onInputBlur).trigger("blur");
		});
	} catch(e){console.log(e);}



	try{
		$(":input.convertSubmitToButton, .convertSubmitToButton :input").filter(":submit").each(function(_index, element){
			var theIdToUse = element.id + Math.floor((Math.random() * 10000) + 1);
			if($('input[name="' + element.name + '"].ajaxField').length == 0){
				$(element).parent().append('<input class="ajaxField" type="hidden" id="' + theIdToUse + '" name="' + element.name + '">');
			}
			$(element).prop("type", "button").on("click", "", function(){
				$("#" + theIdToUse).val($(this).val());
			});
		});
	} catch(e){console.log(e)}



	/* minLength and maxLength seem to be poorly supported on when validation is turned off and/or input is entered programmatically.
	 * As such, we create a pattern where one doesn't exist */
	try{
		$(":input.fieldForValidation").filter(function(_index, element){
			if(typeof element.pattern !== "undefined" && element.pattern.toString().length == 0 && (element.minLength.toString().length > 0 || element.maxLength.toString().length > 0)){
				return true;
			}
			return false;
		}).each(function(_index, element){
			var min	= 0,
				max	= "";
			
			if(element.minLength.toString().length > 0 && element.minLength >= 0){
				min		= element.minLength;
			}
			if(element.maxLength.toString().length > 0 && element.maxLength >= 0){
				max		= element.maxLength;
			}
			
			element.pattern = "^.{" + min + "," + max + "}$";
		});
	} catch(e){console.log(e)}



	try{
		if($("input.byAjaxSubmit, button.byAjaxSubmit").length > 0){
			$("input.byAjaxSubmit, button.byAjaxSubmit").filter(":submit, :button").on("click formState:falseclick", "", function(event){
				if(!$(this).closest(".multipleFieldParent").hasClass("allowsMultipleSelected")){
					$(this).closest(".multipleFieldParent").data("value", $(this).val()).find(".multipleField").removeClass("checked").data("checked", false);
					$(this).addClass("checked").data("checked", true);
				} else{
					$(this).toggleClass("checked").data("checked", $(this).hasClass("checked"));
				}
			});
			$("input.byAjaxSubmit, button.byAjaxSubmit").filter("[type='radio'],[type='checkbox']").on("click formState:falseclick", "", function(event){
				if($(this).prop("checked") !== true){
					$(this).prop("checked","").removeClass("checked");
				} else{
					$(this).prop("checked","checked").addClass("checked");
				}
			});
		}
	} catch(e){console.log(e)}

	try{
		$(".anActualSlider").each(function(){
			var $sliderDiv          = $(this),
				initialLoad			= true,
				valueMapDisplay		= $sliderDiv.data("discretevalues"),
				valueMap			= (typeof valueMapDisplay == "object" ? Object.keys(valueMapDisplay) : null),
				inputEleId          = $sliderDiv.data("for"),
				slideMin            = $sliderDiv.data("min"),
				slideMax            = $sliderDiv.data("max"),
				slideMaxPostfix	    = $sliderDiv.data("maxpostfix"),
				slideStep           = $sliderDiv.data("step"),
				initialDisplayValue = $sliderDiv.data("initialdisplayvalue"),
				slideType			= (typeof valueMap == "object" && valueMap !== null ? "valuesMapped" : "valuesSlide"),
				$sliderSelector,
				sliderCngFunc	= (_event, ui) => {
					switch(slideType){
						case "valuesSlide":
							$("#" + inputEleId).val(ui.value).change();
							let parsedValue = ui.value.toString().replace(/(\d)(?=(\d\d\d)+$)/g, "$1,")
							if(typeof slideMaxPostfix !== "undefined" && ui.value == slideMax){
								parsedValue += slideMaxPostfix;
							}
							$(".sliderFigure").filter(function(){
								return ($(this).data("for") == inputEleId);
							}).text(parsedValue);
						break;
						case "valuesMapped":
							if (initialLoad && initialDisplayValue.length > 0) {
								$('.sliderFigure').text(initialDisplayValue);
								initialLoad = false;
							} else {
								let newValue = valueMap[ui.value];
								if (typeof newValue !== "undefined") {
									newValue = newValue.substr(1);
								}
								$("#" + inputEleId).val(newValue).change();
								$(".sliderFigure").filter(function () {
									return ($(this).data("for") == inputEleId);
								}).text(valueMapDisplay[valueMap[ui.value]]);
							}
						break;
					}
				},
				sliderCreateFunc= (_event, _ui) => {
					if($sliderDiv.closest(".sliderContainer").find(".sliderIncrements").length > 0){
						var numIncrements	= ($sliderDiv.closest(".sliderContainer").find(".sliderIncrements .incrementBar").length - 1);
						$sliderDiv.closest(".sliderContainer").find(".sliderIncrements .incrementBar").each(function(index, element){
							var barPostion	= $(this).data("percentvalue");
							$(element)
								.css("left", barPostion + "%")
								.find(".content")
								.addClass(
									nullCoalesce(
										$sliderDiv.closest(".sliderContainer").data("figuredisplayclass"),
										$(".sliderFigure").attr("class")
									)
								);
						});
					}
					if(!$sliderDiv.hasClass("floatingDisplayValue")){
						return;
					}
					var displayElement				= document.createElement("span");
					
					displayElement.classList.add("floatingDisplay","sliderFigure");
					if(
						typeof $sliderDiv.closest(".sliderContainer").data("figuredisplayclass") != "undefined" &&
						$sliderDiv.closest(".sliderContainer").data("figuredisplayclass").length > 0
					){
						displayElement.classList.add($sliderDiv.closest(".sliderContainer").data("figuredisplayclass"));
					}
					displayElement.dataset["for"]	= inputEleId;
					displayElement.innerText		= slideMin;
					$sliderDiv.find(".ui-slider-handle").append(displayElement);
				},
				sliderClickFunc	= function(event){
					var newValue;

					switch(slideType){
						case "valuesSlide":
							newValue	= parseInt($("#" + inputEleId).val(), 10);
						break;
						case "valuesMapped":
							newValue	= valueMap.indexOf("k" + $("#" + inputEleId).val());
						break;
					}

					if($(event.delegateTarget).hasClass("increase")){
						newValue   += slideStep;
					} else if($(event.delegateTarget).hasClass("decrease")){
						newValue   -= slideStep;
					}
					if(newValue < slideMin){
						newValue	= slideMin;
					} else if(newValue > slideMax){
						newValue	= slideMax;
					}
					if(typeof newValue === "number"){
						$sliderSelector.slider("value", newValue);
					}
				};



			$("#" + inputEleId).val(nullCoalesce(window.currentFormData[$("#" + inputEleId).attr("name")], $(this).data("default")));



			var	defaultSliderValue;
			switch(slideType){
				case "valuesSlide":
					defaultSliderValue = nullCoalesce(
						window.currentFormData[$("#" + inputEleId).attr("name")], 
						$(this).data("default")
					);
				break;
				case "valuesMapped":
					slideMin			= 0;
					slideMax			= valueMap.length - 1;
					slideStep			= 1;
					defaultSliderValue	= valueMap.indexOf("k" + 
						nullCoalesce(
							window.currentFormData[$("#" + inputEleId).attr("name")], 
							$(this).data("default")
						)
					);
					if(defaultSliderValue < 0){
						defaultSliderValue	= 0;
					}
				break;
			}
			$sliderSelector		= $(this).slider({
				min: slideMin,
				max: slideMax,
				step: slideStep,
				create: sliderCreateFunc,
				change: sliderCngFunc,
				slide: sliderCngFunc,
				range: "min"
			}).slider("value", defaultSliderValue);
			$sliderDiv.closest(".sliderContainer").find(".sliderButton").on("click", "*", sliderClickFunc);



			$("#" + inputEleId).on("formState:criteriaStateChange", "", function(){
				if(typeof $(this).slider("instance") === "undefined"){
					return;
				}

				var	defaultSliderValue;
				switch(slideType){
					case "valuesSlide":
						defaultSliderValue = nullCoalesce(
							window.currentFormData[$("#" + inputEleId).attr("name")], 
							$(this).data("default")
						);
					break;
					case "valuesMapped":
						slideMin			= 0;
						slideMax			= valueMap.length;
						slideStep			= 1;
						defaultSliderValue	= valueMap.indexOf("k" + 
							nullCoalesce(
								window.currentFormData[$("#" + inputEleId).attr("name")], 
								$(this).data("default")
							)
						);
					break;
				}
				$sliderSelector		= $(this).slider("destroy").slider({
					min: slideMin,
					max: slideMax,
					step: slideStep,
					create: sliderCreateFunc,
					change: sliderCngFunc,
					slide: sliderCngFunc,
					range: "min"
				}).slider("value", defaultSliderValue);
			});
		});
	} catch(e){console.log(e)}



	try{
		$(".populateHiddenField").on("click", function(){
			var $clickedElement = $(this),
				$targetElement	= $("input").filter("[type='hidden'][name='" + $clickedElement.data("for") + "']"),
				$confirmElement	= $(".showOnPopulate").filter(function(_index, element){
					return $(element).data("for") == $clickedElement.attr("id");
				});
				
			if($targetElement.length == 0){
				return;
			}

			if(nullCoalesce($targetElement.val(), "").toString() == nullCoalesce($clickedElement.data("with"), "").toString()){
				var	currentVal	= $targetElement.val();
				$targetElement.val($targetElement.data("prevValue"));
				$targetElement.data("prevValue", currentVal);
			} else{
				$targetElement.data("prevValue", $targetElement.val());
				$targetElement.val($clickedElement.data("with"));
			}
			
			$confirmElement.toggle();
		});
	} catch(e){console.log(e)}




	try{
		window.validationQueue	= {},
		window.stateChangeQueue	= {};

		$(".staticField").each(function(){
			var $theCurrentItem		= $(this),
				stateChangeFunction	= function(){
					var displayIf	= $theCurrentItem.data("displayif"),
						compChkRst;

					compChkRst		= checkCriteriaMet(displayIf);
					if(compChkRst === true){
						$theCurrentItem.closest(".sectionContainer").removeClass("hidden");
					} else if(compChkRst === false){
						$theCurrentItem.closest(".sectionContainer").addClass("hidden");
					}
				};

			stateChangeQueue[$theCurrentItem.attr("id")]	= stateChangeFunction;
		});



		$(".singleField").each(function(){
			var $theCurrentItem		= $(this),
				validationFunction	= async function(){
					if(($theCurrentItem.is(":hidden") && !$theCurrentItem.hasClass("validateEvenWhenHidden")) || typeof window[$theCurrentItem.data("validatevia")] === "undefined"){
						return true;
					}
					var validationResult	= (typeof window[$theCurrentItem.data("validatevia")]) !== "function" || (await window[$theCurrentItem.data("validatevia")]($theCurrentItem.attr("id"), $theCurrentItem.val()));
					if(validationResult === true){
						if(
							typeof $theCurrentItem.data("validateinvalidates") !== "undefined" &&
							window.currentFormData[$theCurrentItem.attr("name")]	!= $theCurrentItem.val()
						){
							var linkedItems = $theCurrentItem.data("validateinvalidates");
							for(var item in linkedItems){
								delete window.currentFormData[linkedItems[item]];
								delete window.generatedFormData[linkedItems[item]];
							}
						}
						window.currentFormData[$theCurrentItem.attr("name")]	= $theCurrentItem.val();
						if(typeof $theCurrentItem.data("validatelinkedfields") !== "undefined"){
							var linkedItems = $theCurrentItem.data("validatelinkedfields");
							for(var item in linkedItems){
								var $linkedItem = $theCurrentItem.closest("form").find(".fieldForValidation[name='" + linkedItems[item] + "']");
								if($linkedItem.length > 0){
									window.currentFormData[$linkedItem.attr("name")]	= $linkedItem.val();
								}
							}
						}
						clearValidationMessage($theCurrentItem.attr("name"));
						postValidationSuccess($theCurrentItem.attr("name"), $theCurrentItem.attr("id"), $theCurrentItem.val());
						return true;
					} else{
						postValidationFailures(
							$theCurrentItem.attr("name"), 
							$theCurrentItem.attr("id"), 
							$theCurrentItem.val(), 
							buildAndDisplayValidationMessage(
								$theCurrentItem.attr("name"), 
								$theCurrentItem.attr("id")
							)
						);
						return false;
					}
				},
				stateChangeFunction	= function(){
					var requiredIf	= $theCurrentItem.data("requiredif"),
						displayIf	= $theCurrentItem.data("displayif"),
						disabledIf	= $theCurrentItem.data("disabledif"),
						compChkRst;

					compChkRst		= checkCriteriaMet(requiredIf);
					if(compChkRst === true){
						$theCurrentItem.prop("required", "required").data("required", true);
					} else if(compChkRst === false){
						$theCurrentItem.prop("required", "").data("required", false);
					}

					compChkRst		= checkCriteriaMet(displayIf);
					if(compChkRst === true){
						$theCurrentItem.closest(".sectionContainer").removeClass("hidden");
						compChkRst		= checkCriteriaMet(disabledIf);
						if(compChkRst === true){
							$theCurrentItem.prop("disabled", "disabled").data("disabled", "true");
						} else if(compChkRst === false){
							$theCurrentItem.prop("disabled", "").data("disabled", "false");
						} else if(Array.isArray(compChkRst)){
							var values	= $theCurrentItem.children("option");
							if(values.length > 0){
								values.each(function(){
									if($.inArray(this.value, compChkRst) >= 0){
										$(this).prop("disabled", "disabled");
									} else{
										$(this).prop("disabled", "");
									}
								});
								$theCurrentItem.trigger("formState:criteriaStateChange");
							} else{
								var min = Number.POSITIVE_INFINITY, max = Number.NEGATIVE_INFINITY;
								for(var index in compChkRst){
									if(compChkRst[index] < min){
										min	= compChkRst[index];
									}
									if(compChkRst[index] > max){
										max	= compChkRst[index];
									}
								}
								if($theCurrentItem.data("min") < min){
									$theCurrentItem.data("min", min);
								}
								if($theCurrentItem.data("max") < max){
									$theCurrentItem.data("max", max);
								}
								$theCurrentItem.trigger("formState:criteriaStateChange");
							}
						}
					} else if(compChkRst === false){
						$theCurrentItem.closest(".sectionContainer").addClass("hidden").prop("disabled", "disabled").data("disabled", "true");
					}
				};

			stateChangeQueue[$theCurrentItem.attr("id")]	= stateChangeFunction;

			if(($theCurrentItem.is(":visible") || $theCurrentItem.hasClass("validateEvenWhenHidden")) && $theCurrentItem.is(":enabled")){
				validationQueue[$theCurrentItem.attr("id")] = validationFunction;
			}

			$theCurrentItem.on("formState:visibilityChange formState:enabledStateChange", "", function(){
				if(($theCurrentItem.is(":visible") || $theCurrentItem.hasClass("validateEvenWhenHidden")) && $theCurrentItem.is(":enabled")){
					validationQueue[$theCurrentItem.attr("id")] = validationFunction;
				} else{
					delete validationQueue[$theCurrentItem.attr("id")];
				}
			});
		});



		$(".singleDelegatedField").each(function(){
			var $theCurrentItem		= $(this),
				$theControlItem		= $(".delegatedFieldParent").filter(function(){return ($(this).data("for") == $theCurrentItem.attr("id"));}),
				validationFunction	= async function(){
					if(($theControlItem.is(":hidden") && !$theControlItem.hasClass("validateEvenWhenHidden")) || typeof window[$theCurrentItem.data("validatevia")] === "undefined"){
						return true;
					}
					var validationResult	= (
						typeof window[$theCurrentItem.data("validatevia")]) !== "function" || 
						(await window[$theCurrentItem.data("validatevia")]($theCurrentItem.attr("id"), $theCurrentItem.val())
					);
					if(validationResult === true){if(
							typeof $theCurrentItem.data("validateinvalidates") !== "undefined" &&
							window.currentFormData[$theCurrentItem.attr("name")]	!= $theCurrentItem.val()
						){
							var linkedItems = $theCurrentItem.data("validateinvalidates");
							for(var item in linkedItems){
								delete window.currentFormData[linkedItems[item]];
								delete window.generatedFormData[linkedItems[item]];
							}
						}
						window.currentFormData[$theCurrentItem.attr("name")]	= $theCurrentItem.val();
						if(typeof $theCurrentItem.data("validatelinkedfields") !== "undefined"){
							var linkedItems = $theCurrentItem.data("validatelinkedfields");
							for(var item in linkedItems){
								var $linkedItem = $theCurrentItem.closest("form").find(".fieldForValidation[name='" + linkedItems[item] + "']");
								if($linkedItem.length > 0){
									window.currentFormData[$linkedItem.attr("name")]	= $linkedItem.val();
								}
							}
						}
						clearValidationMessage($theCurrentItem.attr("name"));
						postValidationSuccess($theCurrentItem.attr("name"), $theCurrentItem.attr("id"), $theCurrentItem.val());
						return true;
					} else{
						postValidationFailures(
							$theCurrentItem.attr("name"), 
							$theCurrentItem.attr("id"), 
							$theCurrentItem.val(), 
							buildAndDisplayValidationMessage(
								$theCurrentItem.attr("name"), 
								$theCurrentItem.attr("id")
							)
						);
						return false;
					}
				},
				stateChangeFunction	= function(){
					var requiredIf	= $theCurrentItem.data("requiredif"),
						displayIf	= $theCurrentItem.data("displayif"),
						disabledIf	= $theCurrentItem.data("disabledif"),
						compChkRst;

					compChkRst		= checkCriteriaMet(requiredIf);
					if(compChkRst === true){
						$theCurrentItem.prop("required", "required").data("required", true);
					} else if(compChkRst === false){
						$theCurrentItem.prop("required", "").data("required", false);
					}

					compChkRst		= checkCriteriaMet(displayIf);
					if(compChkRst === true){
						$theCurrentItem.closest(".sectionContainer").removeClass("hidden");
						compChkRst		= checkCriteriaMet(disabledIf);
						if(compChkRst === true){
							$theCurrentItem.prop("disabled", "disabled").data("disabled", "true");
						} else if(compChkRst === false){
							$theCurrentItem.prop("disabled", "").data("disabled", "false");
						} else if(Array.isArray(compChkRst)){
							var values	= $theCurrentItem.children("option");
							if(values.length > 0){
								values.each(function(){
									if($.inArray(this.value, compChkRst) >= 0){
										$(this).prop("disabled", "disabled");
									} else{
										$(this).prop("disabled", "");
									}
								});
								$theCurrentItem.trigger("formState:criteriaStateChange");
							} else{
								var min = Number.POSITIVE_INFINITY, max = Number.NEGATIVE_INFINITY;
								for(var index in compChkRst){
									if(compChkRst[index] < min){
										min	= compChkRst[index];
									}
									if(compChkRst[index] > max){
										max	= compChkRst[index];
									}
								}
								if($theCurrentItem.data("min") < min){
									$theCurrentItem.data("min", min);
								}
								if($theCurrentItem.data("max") < max){
									$theCurrentItem.data("max", max);
								}
								$theCurrentItem.trigger("formState:criteriaStateChange");
							}
						}
					} else if(compChkRst === false){
						$theCurrentItem.closest(".sectionContainer").addClass("hidden").prop("disabled", "disabled").data("disabled", "true");
					}
				};

			stateChangeQueue[$theCurrentItem.attr("id")]	= stateChangeFunction;

			if(($theControlItem.is(":visible") || $theControlItem.hasClass("validateEvenWhenHidden")) && $theCurrentItem.is(":enabled")){
				validationQueue[$theCurrentItem.attr("id")] = validationFunction;
			}

			$([$theCurrentItem[0],$theControlItem[0]]).on("formState:visibilityChange formState:enabledStateChange", "", function(){
				if(($theControlItem.is(":visible") || $theControlItem.hasClass("validateEvenWhenHidden")) && $theCurrentItem.is(":enabled")){
					validationQueue[$theCurrentItem.attr("id")] = validationFunction;
				} else{
					delete validationQueue[$theCurrentItem.attr("id")];
				}
			});
		});



		$(".multipleFieldParent").each(function(){
			var $theContainer		= $(this),
				$theItems			= $(this).find(".multipleField"),
				validationFunction	= async function(){
					if(($theContainer.is(":hidden") && !$theContainer.hasClass("validateEvenWhenHidden")) || typeof window[$theContainer.data("validatevia")] === "undefined"){
						return true;
					}
					
					let selectedFieldValue,
						validationResult;
					if(!$theContainer.hasClass("allowsMultipleSelected")){
							selectedFieldValue	= nullCoalesce($theItems.filter(".checked").val(), $theItems.filter(":checked").val(), null);
							validationResult	= (typeof window[$theContainer.data("validatevia")]) !== "function" || (await window[$theContainer.data("validatevia")]($theContainer.attr("id"), selectedFieldValue));
					} else {
						var $multipleSelected = nullCoalesce($theItems.filter(".checked"), $theItems.filter(":checked"), null);
						var validCount = 0;
						var selectedFieldValueArray = [];
						if($multipleSelected.length === 0 ){
							validationResult = (typeof window[$theContainer.data("validatevia")]) !== "function" || (await window[$theContainer.data("validatevia")]($theContainer.attr("id"), selectedValue));  // Uncaught SyntaxError: await is only valid in async function
						}else{
							for (let i = 0; i < $multipleSelected.length; i++) {
								var selectedValue		= $multipleSelected[i].value,
									partvalidationResult	= (typeof window[$theContainer.data("validatevia")]) !== "function" || (await window[$theContainer.data("validatevia")]($theContainer.attr("id"), selectedValue));  // Uncaught SyntaxError: await is only valid in async function
								if(partvalidationResult){
									validCount++
									selectedFieldValueArray.push(selectedValue);
								}
							}
							if(validCount === $multipleSelected.length){
								validationResult = true;
								selectedFieldValue= JSON.stringify(selectedFieldValueArray)
							}else {
								validationResult = false;
							}
						}
					}
					if(validationResult === true){
						if(
							typeof $theContainer.data("validateinvalidates") !== "undefined" &&
							window.currentFormData[$theContainer.data("fieldname")]	!= selectedFieldValue
						){
							var linkedItems = $theContainer.data("validateinvalidates");
							for(var item in linkedItems){
								delete window.currentFormData[linkedItems[item]];
								delete window.generatedFormData[linkedItems[item]];
							}
						}
						window.currentFormData[$theContainer.data("fieldname")]	= selectedFieldValue;
						if(typeof $theContainer.data("validatelinkedfields") !== "undefined"){
							var linkedContainers = $theContainer.data("validatelinkedfields");
							for(var item in linkedContainers){
								var $linkedContainer = $theContainer.closest("form").find(".multipleFieldParent").filter(function(_index, element){
									return ($(element).data("fieldname") == linkedContainers[item]);
								});
								if($linkedContainer.length > 0){
									window.currentFormData[$linkedContainer.data("fieldname")]	= nullCoalesce($linkedContainer.find(".multipleField").filter(".checked").val(), $linkedContainer.find(".multipleField").filter(":checked").val(), null);
								}
							}
						}
						clearValidationMessage($theContainer.data("fieldname"));
						postValidationSuccess(
							$theContainer.data("fieldname"), 
							nullCoalesce(
								$theItems.filter(".checked").attr("id"), 
								$theItems.filter(":checked").attr("id"), 
								(
									!checkCriteriaMet($theContainer.data("requiredif")) ? 
									$theItems.attr("id") : 
									null
								),
								null
							), 
							selectedFieldValue
						);
						return true;
					} else{
						postValidationFailures(
							$theContainer.data("fieldname"), 
							nullCoalesce(
								$theItems.filter(".checked").attr("id"), 
								$theItems.filter(":checked").attr("id"), 
								$theItems.attr("id")
							), 
							selectedFieldValue,
							buildAndDisplayValidationMessage(
								$theContainer.data("fieldname"), 
								$theContainer.attr("id")
							)
						);
						return false;
					}
				},
				stateChangeFunction	= function(){
					var requiredIf	= $theContainer.data("requiredif"),
						displayIf	= $theContainer.data("displayif"),
						disabledIf	= $theContainer.data("disabledif"),
						compChkRst;

					compChkRst		= checkCriteriaMet(requiredIf);
					if(compChkRst === true){
						$theContainer.data("required", true);
					} else if(compChkRst === false){
						$theContainer.data("required", false);
					}

					compChkRst		= checkCriteriaMet(displayIf);
					if(compChkRst === true){
						$theContainer.closest(".sectionContainer").removeClass("hidden");
						compChkRst		= checkCriteriaMet(disabledIf);
						if(compChkRst === true){
							$theContainer.data("disabled", "true");
							$theItems.prop("disabled", true);
						} else if(compChkRst === false){
							$theContainer.data("disabled", "false");
							$theItems.prop("disabled", false);
						} else if(Array.isArray(compChkRst)){
							if($theItems.length > 0){
								var actionsQueue	= [];
								$theItems.each(function(){
									if($.inArray(this.value, compChkRst) >= 0){
										var theCurrentThis	= this;
										actionsQueue.push(function(){
											$(theCurrentThis).prop("disabled", "disabled");
											if($(theCurrentThis).hasClass("checked")){
												var $nextEnabledElement = $(theCurrentThis).parentsUntil(".multipleFieldParent").nextAll().filter(function(_index, element){
													if($(element).find(".multipleField").length == 0 || $(element).find(".multipleField").is(':disabled')){
														return false;
													} else{
														return true;
													}
												});
												if($nextEnabledElement.length > 0){
													$nextEnabledElement.first().find(".multipleField").first().addClass("checked").data("checked", true);
												} else{
													var $prevEnabledElement = $(theCurrentThis).parentsUntil(".multipleFieldParent").prevAll().filter(function(_index, element){
														if($(element).find(".multipleField").length == 0 || $(element).find(".multipleField").is(':disabled')){
															return false;
														} else{
															return true;
														}
													});
													if($prevEnabledElement.length > 0){
														$prevEnabledElement.first().find(".multipleField").first().addClass("checked").data("checked", true);
													}
												}
											}
											$(theCurrentThis).removeClass("checked").data("checked", false);
										});
									} else{
										$(this).prop("disabled", "");
									}
								});
								for(var key in actionsQueue){
									if(typeof actionsQueue[key] == "function"){
										actionsQueue[key]();
									}
								}
								$theContainer.trigger("formState:criteriaStateChange");
							}
						}
					} else if(compChkRst === false){
						$theContainer.closest(".sectionContainer").addClass("hidden").data("disabled", "true");
					}
				};

			stateChangeQueue[$theContainer.attr("id")]	= stateChangeFunction;

			if(($theContainer.is(":visible") || $theContainer.hasClass("validateEvenWhenHidden")) && $theContainer.data("enabled").toString() == "true"){
				validationQueue[$theContainer.attr("id")] = validationFunction;
			}

			$($theContainer).on("formState:visibilityChange formState:enabledStateChange", "", function(){
				if(($theContainer.is(":visible") || $theContainer.hasClass("validateEvenWhenHidden")) && $theContainer.data("enabled").toString() == "true"){
					validationQueue[$theContainer.attr("id")] = validationFunction;
				} else{
					delete validationQueue[$theContainer.attr("id")];
				}
			});
			
			$theItems.filter(":checkbox").each(function(_index, element){
				var newHiddenInput = document.createElement("input");
				
				newHiddenInput.type = "hidden";
				newHiddenInput.name = element.name;
				$(element).parent().prepend(newHiddenInput);
			});
		});
	} catch(e){console.log(e)}



	try{
		$("input").not(":submit").on("keypress", "", function(event){
			if((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)){
				event.preventDefault();
				$(this).closest("form").trigger("submit");
				return false;
			}
			return true;
		});
	} catch(e){console.log(e)}



	try{
		$(".autoHide").each(function(_index, element){
			var $element 	= $(this),
				delay		= $element.data("delay"),
				oneway		= $element.data("oneway");

			if(
				(oneway === true && window.drivingDirection == "backwards") ||
				isNaN(delay)
			){
				$element.closest(".sectionContainer").addClass("hidden");
				delete stateChangeQueue[$element.attr("id")];
			}
			window.setTimeout(
				function(){
					if($element.is(":visible")){
						$element.closest(".sectionContainer").addClass("hidden");
						delete stateChangeQueue[$element.attr("id")];
						runStateChangeQueue();
					}
				},
				delay
			);
		});
	} catch(e){console.log(e)}



	try{
		$(".copyFromButton.copyTo").each(function(index, element){
			try{
				var submitOnButtonPress	= ($(element).hasClass("copySubmit") ? $(element)[0].form : false);
				$('<button type="button" class="theCopyButtonButton">Use ' + $(".copyFrom").parent().find("label.inputLabelAkira span").text().toLowerCase() + '</button>')
					.appendTo($(element).parent())
					.on("click", "", function(){
						$(".copyTo").val($(".copyFrom").val()).trigger("blur");
						if(submitOnButtonPress){
							$(submitOnButtonPress).trigger("submit");
						}
					});
			} catch(e){console.log(e)}
			return false; // Only one button set supported currently
		});
	} catch(e){console.log(e)}



	try{
		$(".selectAllRadio.copyFrom").on("change", function(event){
			var cpyVal		= $(this).val();
			$(".selectAllRadio.copyTo").filter(function(){
				return $(this).attr("value") == cpyVal;
			}).prop("checked", "checked");
		});
	} catch(e){console.log(e)}



	try{
		$(".hideOverflowElements").each(function(index, element){
			if(!$(".hideOverflowElements").hasClass("buttonContainer")){
				return; // Only this class is supported currently
			}
			try{
				let prcMultply		= ($(this).css("max-width") == "100%" ? 1.15 : 1.3),
					totalWidth		= Math.ceil($(this).children().first().width() * prcMultply * $(this).children().length);
				$(this).removeClass("buttonContainer centerByMargin").wrap("<div class='buttonContainer centerByMargin overflowContainer'></div>");
				$(this).css("width", totalWidth);
				$(this).on("formState:criteriaStateChange", "", function(){
					let containWdt	= $(this).parent().width(),
						numHiddenRt	= $(this).find(".flexyItem").filter(function(){
							return this.offsetLeft >= containWdt;
						}).length,
						numDisLeft	= ($(this).find(".flexyItem button").first().is(":disabled") ?
										($(this).find(".flexyItem").first().nextUntil($(this).find(".flexyItem button:enabled").first().closest(".flexyItem")).length + 1) :
										0
									),
						distMove	= Math.ceil($(this).find(".flexyItem").first().width() * prcMultply * numHiddenRt);

					if(numDisLeft >= numHiddenRt){
						$(this).css("transform", "translateX(-" + distMove + "px)");
					} else{
						$(this).css("transform", "");
					}
				});
			} catch(e){console.log(e)}
		});
	} catch(e){console.log(e)}



	try{
		$(".moveWhenLimitHit").on("keyup paste", "", function(event){
			var keyPressed	= event.which,
				allowedKeys	= [8,46,40,35,27,36,37,34,33,39,9,38,16,17,18]; // From: https://github.com/jquery/jquery-ui/blob/master/ui/keycode.js && http://www.javascripter.net/faq/keycodes.htm
			if(
				typeof this.value !== "undefined" && 
				typeof $(this).attr("max") !== "undefined" && 
				this.value.length == $(this).attr("max").length &&
				!allowedKeys.includes(keyPressed)
			){
				var $elementSet		= $(this).closest("form").find(".fieldForValidation:visible"),
					$nextElement	= $elementSet.eq($elementSet.index(this) + 1);
					
				if($nextElement.length > 0){
					$nextElement[0].focus();
				}
			}
		});
	} catch(e){console.log(e)}



	try{
		$(".hideInputOption").each(function(index, element){
			try{
				$('<button type="button" class="hideInputOptionButton show" tabindex="-1">&nbsp;</button>')
					.appendTo($(element).parent())
					.on("click", "", function(){
						if($(this).hasClass("show")){
							$(this).removeClass("show");
							$(element).addClass("maskedInput");
							var computedStyle = window.getComputedStyle(element);
							if(!computedStyle.webkitTextSecurity){
								$(element).data("origtype", nullCoalesce($(element).attr("type"), "text"));
								$(element).attr("type", "password");
							}
						} else{
							$(this).addClass("show");
							$(element).removeClass("maskedInput");
							if($(element).attr("type") == "password"){
								$(element).attr("type", nullCoalesce($(element).data("origtype"), "text"));
							}
						}
					})
					.trigger("click");
			} catch(e){console.log(e)}
		});
	} catch(e){console.log(e)}



	try{
		$(".suggestEmailDomains").each(function(index, element){
			try{
				$(element).on("input", "", function(){
					if(element.value.length >= 3 && element.value.indexOf("@") == -1){
						$("#esb-" + element.name + " .aSuggestionButton").each(function(index, innerEle){
							$(innerEle).text(element.value.substr(0, element.value.length) + "\n@" + innerEle.textContent.substr(innerEle.textContent.indexOf("@") + 1));
						});
						$("#esb-" + element.name).removeClass("hidden");
					} else{
						$("#esb-" + element.name).addClass("hidden");
					}
				});
				$("#esb-" + element.name + " .aSuggestionButton").on("click", "", function(){
					$(element).val($(this).text().replace("\n", "")).trigger("blur")
				});
			} catch(e){console.log(e)}
		});
	} catch(e){console.log(e)}



	$("input.fieldForValidation.singleField").filter(function(){
		return (typeof $(this).data("seldatalist") !== "undefined") || (typeof $(this).data("selsearchsrc") !== "undefined");
	}).each(async function(_index, element){
		try{
			var theOuterEle				= this,
				placeholder				= $(theOuterEle).nextAll(".inputLabelAkira").first().text(),
				inputWasRequired		= checkCriteriaMet($(theOuterEle).data("requiredif")),
				datalist,
				optionsObject			= {
					options:				[],
					create:					($(theOuterEle).data("selcreate") === false ? false :  true),
					createOnBlur:			($(theOuterEle).data("selallowcreateonblur") === false ? false :  true),
					hideSelected:           ($(theOuterEle).data("selhideselected") === true ? true :  false),
					persist:				($(theOuterEle).data("selallowcreate") === false ? false : true),
					placeholder:			placeholder.trim(),
					maxItems:				1,
					maxOptions:				Number.parseInt(nullCoalesce($(theOuterEle).data("selmaxoptions"), "1500")),
					copyClassesToDropdown:	false,
					preload:				true,
					valueField:				"value",
					labelField:				"name",
					searchField:			"name",
					onInitialize: function(){
						this.setValue(this.$input.data("orig-value"), true);
						this.$input.data("orig-value", null).attr("required", inputWasRequired);
					},
					onFocus: function(){
						let enteredValue	= this.getValue();
						this.clear(true);
						this.setTextboxValue(enteredValue);
						this.positionDropdown();
					}
				};
			$(theOuterEle).data("orig-value", ($(theOuterEle).val().length == 0 ? nullCoalesce(window.currentFormData[$(theOuterEle).attr("name")], "") : $(theOuterEle).val()));
			$(theOuterEle).val("");

			if(typeof $(theOuterEle).data("seldatalist") !== "undefined"){
				await $.getJSON($(theOuterEle).data("seldatalist"))
					.then((response) => {
						optionsObject.options	= response;
					})
					.catch((_jqxhr, _textStatus, error) => {
						console.log(error);
					});
				if(typeof optionsObject.options !== "object" || optionsObject.options.length == 0){
					return;
				}
			}
			if(typeof $(theOuterEle).data("selsearchsrc") !== "undefined"){
				optionsObject.preload		= false;
				optionsObject.labelField	= "displayTextMain";
				optionsObject.searchField	= "value";
				optionsObject.sortField		= [
					{field: "order", direction: "asc"},
					{field: "$score", direction: "desc"}
				];
				optionsObject.render		= {
					option: function(item, escape){
						return "<div class=\"option\"><b>" + escape(item.displayTextMain) + "</b>, " + escape(item.displayTextSupport) + "</div>";
					}
				};
				optionsObject.load			= function(query, callback){
					this.clearOptions();

					if(query.length < 2){ 
						callback();
					} else{
						$.getJSON($("#scriptData").data("baseloaderurl") + $(theOuterEle).data("selsearchsrc"), {
							"dtype": "companyName",
							"data": query
						}).done(function(response){
							if(response.result === true && typeof response.resultList !== "undefined"){
								callback(response.resultList);
							} else{
								callback();
							}
						});
					}
				}
			}

			$(theOuterEle).nextAll(".inputLabelAkira").remove();
			$(theOuterEle).on("formState:pageLoadChange", function(){
				$(theOuterEle)[0].selectize.setTextboxValue($(theOuterEle).val().substr(0, $(theOuterEle).val().indexOf('|')));
			});
			$(theOuterEle)
				.removeClass("inputField inputFieldAkira")
				.addClass("inputFieldForSelectize inputFieldAkiraForSelectize validateEvenWhenHidden")
				.selectize(optionsObject);
		} catch(e){console.log(e)}
	});



	try{
		$(".doAddressLookup").each(function(index, element){
			var theElementId			= element.id;
			window.stateChangeQueue[theElementId + "doAddressLookupSetup"] = function(){
				try{
					if(nullCoalesce($("#" + theElementId).data("adrSetup"), false) || $(element).filter(":visible").length == 0 || $(element).val() === "!!!"){
						return false;
					}
					$(element).focus(function() {
						$(this).attr('autocomplete', 'new-password');
					});
					$(":submit").addClass("hidden");
					var enticeDiv		= document.createElement("div");
					enticeDiv.innerText	= "Or enter your address manually...";
					enticeDiv.classList.add("extraText");
					$(enticeDiv).appendTo($("#" + theElementId).closest("div")).on("click", "", function(){
						$("#" + theElementId).data("requiredif", false);
						$("#" + theElementId).data("displayif", false);
						$(":submit").removeClass("hidden");
						$("#" + theElementId).trigger("change");
					});
					
					window.autocomplete	= new google.maps.places.Autocomplete(document.getElementById(theElementId), {types: ["geocode"], componentRestrictions: {country: 'GB'}});
					window.autocomplete.setFields(["address_components"]);
					window.autocomplete.addListener("place_changed", 
						function(){
							var place	= window.autocomplete.getPlace(),
								updFid	= 0;

							$(".doAddressLookupInput").val("");
							
							if(typeof place.address_components == "undefined"){
								$(".fieldInfoTxt").filter(function(){
									if($(this).closest(".sectionContainer").find("#" + theElementId).length > 0){
										return false;
									}

									return true;
								}).first().text("We couldn't find your address, please enter it here").addClass("errorMessage");
							} else{
								for(var i = 0; i < place.address_components.length; i++){
									$(".doAddressLookupInput." + place.address_components[i].types[0] + ".short_name").val(place.address_components[i]["short_name"]).trigger("blur")
									updFid += $(".doAddressLookupInput." + place.address_components[i].types[0] + ".short_name[required]").length;
									$(".doAddressLookupInput." + place.address_components[i].types[0] + ".long_name").val(place.address_components[i]["long_name"]).trigger("blur")
									updFid += $(".doAddressLookupInput." + place.address_components[i].types[0] + ".long_name[required]").length;
								}

								if(updFid >= $(".doAddressLookupInput").filter(":input[required]").length){
									window.stateChangeQueue["runOnceOnly"]	= function(){
										delete window.stateChangeQueue["runOnceOnly"];
										$($(".doAddressLookup")[0]).closest("form").trigger("submit");
									}
								}
							}

							$("#" + theElementId).data("requiredif", false);
							$("#" + theElementId).data("displayif", false);
							$(":submit").removeClass("hidden");
							$("#" + theElementId).trigger("change");
						}
					);
					
					function geolocate(){
						if(navigator.geolocation){
							navigator.geolocation.getCurrentPosition(function(position){
								var geolocation = {
									lat: position.coords.latitude,
									lng: position.coords.longitude
								};
								var circle = new google.maps.Circle(
									{center: geolocation, radius: position.coords.accuracy}
								);
								window.autocomplete.setBounds(circle.getBounds());
							});
						}
					}
					// geolocate();
					$("#" + theElementId).data("adrSetup", true);
					return false; // Only one button set supported currently
				} catch(e){console.log(e)}
			}
		});
	} catch(e){console.log(e)}



	try{
		$(".parseableField").each(function(_index, element){
			if(
				typeof window[$(element).data("parsevia")] === "function"
			){
				$(element).val(
					window[$(element).data("parsevia")](
						$(element).val()
					)
				);
			}

			if(
				(typeof window[$(element).data("validatevia")]) !== "function" || 
				(window[$(element).data("validatevia")](element.id, element.value))
			){
				window.generatedFormData[element.name]	= element.value;
			} else{
				buildAndDisplayValidationMessage(element.name, element.id);
			}
		});
	} catch(e){console.log(e)}



	try{
		$(".calculationField").each(function(_index, element){
			let calcDetails		= $(element).data("calculationdetails");

			if(typeof calcDetails === "undefined"){
				return;
			}

			let calculationVal	= calcDetails.value,
				calculations	= calcDetails.operations;

			if(
				typeof calcDetails.valueField === "string" &&
				calcDetails.valueField.length > 0
			){
				var $namedFields					= $(
					".fieldForValidation:visible[name=" + calcDetails.valueField + "]," +
					".fieldForValidation.validateEvenWhenHidden[name=" + calcDetails.valueField + "]"
				);
				var delegatedFieldValue				= null;
				$(".delegatedFieldParent:visible,.delegatedFieldParent.validateEvenWhenHidden").each(function(_index, element){
					var $delegatedFields			= $("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").filter(function(_index, element){
						return $(element).attr("name") == calcDetails.valueField;
					});
					if($delegatedFields.length > 0){
						delegatedFieldValue			= $delegatedFields.val();
					}
				});
				calculationVal					= 
					nullCoalesce(
						$namedFields.val(),
						$namedFields.data("value"),
						delegatedFieldValue,
						window.generatedFormData[calcDetails.valueField],
						window.currentFormData[calcDetails.valueField]
					);
			}

			if(
				typeof calculationVal === "undefined" ||
				typeof calculations === "undefined"
			){
				return;
			}

			calculationVal	= Number.parseFloat(calculationVal);

			for(var index in calculations){
				if(
					typeof(calculations[index]["op"]) === "undefined" ||
					(
						typeof(calculations[index]["operand"]) === "undefined" &&
						typeof(calculations[index]["operandFieldName"]) === "undefined"
					)
				){
					continue;
				}

				if(typeof(calculations[index]["operandFieldName"]) !== "undefined"){
					var $namedFields					= $(
						".fieldForValidation:visible[name=" + calculations[index]["operandFieldName"] + "]," +
						".fieldForValidation.validateEvenWhenHidden[name=" + calculations[index]["operandFieldName"] + "]"
					);
					var delegatedFieldValue				= null;
					$(".delegatedFieldParent:visible,.delegatedFieldParent.validateEvenWhenHidden").each(function(_index, element){
						var $delegatedFields			= $("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").filter(function(_index, element){
							return $(element).attr("name") == calculations[index]["operandFieldName"];
						});
						if($delegatedFields.length > 0){
							delegatedFieldValue			= $delegatedFields.val();
						}
					});
					calculations[index]["operand"]		= 
						nullCoalesce(
							$namedFields.val(),
							$namedFields.data("value"),
							delegatedFieldValue,
							window.generatedFormData[calculations[index]["operandFieldName"]],
							window.currentFormData[calculations[index]["operandFieldName"]]
						);
				}

				switch(calculations[index]["op"]){
					case "add":
						calculationVal	+= Number.parseFloat(calculations[index]["operand"]);
					break;
					case "subtract":
						calculationVal	-= Number.parseFloat(calculations[index]["operand"]);
					break;
					case "multiply":
						calculationVal	*= Number.parseFloat(calculations[index]["operand"]);
					break;
					case "divide":
						calculationVal	/= Number.parseFloat(calculations[index]["operand"]);
					break;
				}
				if(typeof calculations[index]["step"] !== "undefined"){
					calculations[index]["step"]	= Number.parseFloat(calculations[index]["step"]);
					let	ir;
					switch(calculations[index]["stepDirection"]){
                        case "ceil":
                            ir			= Math.ceil(calculationVal / calculations[index]["step"]);
							break;
						case "floor":
                            ir			= Math.floor(calculationVal / calculations[index]["step"]);
							break;
						case "round":
						default:
                            ir			= Math.round(calculationVal / calculations[index]["step"]);
					}
					if(
						(calculationVal - ir * calculations[index]["step"]) !== 0
					){
						calculationVal	= (calculationVal - (calculationVal - ir * calculations[index]["step"]));
					}
				}
			}

			element.value		=  calculationVal;
			if(
				(typeof window[$(element).data("validatevia")]) !== "function" || 
				(window[$(element).data("validatevia")](element.id, element.value))
			){
				window.generatedFormData[element.name]	= element.value;
			} else{
				buildAndDisplayValidationMessage(element.name, element.id);
			}
		});
	} catch(e){console.log(e)}



	try{
		let uniNames		= [];
		$(".fieldForValidation").each(function(){
			if((typeof window.currentFormData[this.name] !== "undefined") && $.inArray(this.name, uniNames) === -1){
				uniNames.push(this.name);
			}
		});
		
		for(var key in uniNames){
			// If we have a (visible) multipleFieldParent, then it is a set of buttons and so set according.
			if($(".fieldForValidation[name=" + uniNames[key] + "]").closest(".multipleFieldParent:visible").length > 0){
				$(".fieldForValidation[name=" + uniNames[key] + "]").each(function(_index, element){
					if($(element).closest(".multipleFieldParent:visible").length == 0){
							return;
					}
					if(hasJsonStructure(window.currentFormData[uniNames[key]])){
						let arrayOfValues = JSON.parse(window.currentFormData[uniNames[key]]);
						for (let i = 0; i < arrayOfValues.length; i++) {
							if($(element).is("[value='" + arrayOfValues[i] + "']")){
								$(element).trigger("formState:falseclick");
							}
						}
					}
					if($(element).is("[value='" + $.escapeSelector(window.currentFormData[uniNames[key]]) + "']")){
						$(element).trigger("formState:falseclick");
						return false;
					}
				});
			} else{ // Else if it is an input, and so set the value
				var $namedFields					= $(
					".fieldForValidation:visible[name=" + uniNames[key] + "]," +
					".fieldForValidation.validateEvenWhenHidden[name=" + uniNames[key] + "]"
					);
				if($namedFields.length > 0){
					$namedFields.val(window.currentFormData[uniNames[key]]).trigger("change").trigger("blur").trigger("formState:pageLoadChange");
				}
				$(".delegatedFieldParent:visible,.delegatedFieldParent.validateEvenWhenHidden").each(function(_index, element){
					var $delegatedFields			= $("#" + $(element).data("for") + ".fieldForValidation.singleDelegatedField").filter(function(_index, element){
						return $(element).attr("name") == uniNames[key];
					});
					if($delegatedFields.length > 0){
						$delegatedFields.val(window.currentFormData[uniNames[key]]).trigger("change").trigger("blur").trigger("formState:pageLoadChange");
					}
				});
			}
		}
		
		$(".fieldForValidation.byChange").on("change", "", runStateChangeQueue);
		$(".fieldForValidation.byBlur").on("blur", "", runStateChangeQueue);
		$(".fieldForValidation.byAjaxSubmit").on("ajax:select", "", runStateChangeQueue);
		runStateChangeQueue();
	} catch(e){console.log(e)}



	if($(".modalPopup").length > 0){
		$(".modalPopup").iziModal();
	}
	$(".openIziModal").on("click", "", openModalFunction);
}





function sleep(ms){
	return new Promise(resolve => setTimeout(resolve, ms));
}



async function waitUntilLoadingSlot(){
	while(window.preloadingCnt >= 5){
		await sleep(500);
	}
}

$(document).ready(function(){
	try{
		window.generatedFormData= {};
		window.currentFormData	= nullCoalesce($("#scriptData").data("fieldsfilledin"), {});
		window.preloadingCnt	= 0;

		$("form").attr("novalidate", true);
		async function actualFormPageFormSubmitFunctionAsync(event){
			let actualSubmitResult	= await pageSubmitFunction(event);
			if(actualSubmitResult){
				window.allowSubmit	= true;
				$("#formPageForm").trigger("submit");
			}
		}

		$("#formPageForm").on("submit", "", function(event){
			if(window.allowSubmit === true){
				window.allowSubmit	= false;
				return true;
			} else{
				event.preventDefault();
				actualFormPageFormSubmitFunctionAsync(event);
				return false;
			}
		});

		if(typeof window.dontLoadPageInBaseFiles === "undefined"){
			processPageLoadComplete(window.pageNumber);
			$("#formPageForm").parent().removeClass("invisibleWhileLoading");
		}
	} catch(e){console.log(e);}
    moveSubmitIntoBox();
});

/**
 * Moves the submit button into the first found .boxedSubmit
 * boxSubmit class would ideally be given to a question which is
 * stylized causing it to look like its own section
 * @return {void}
 */
function moveSubmitIntoBox()
{
    $('.appButtonWrapper').appendTo($('.boxedSubmit'));
}
