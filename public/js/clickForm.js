"use strict";

// This must be loaded after baseForm.js
if(typeof window.waitUntilLoadingSlot === "undefined"){
	throw new Error("File called out of order! (No baseForm.js loaded)");
}

window.dontLoadPageInBaseFiles	= true;

function loadNewPage(pageNumber, isSubmittingData){
	if(typeof window.pages[pageNumber] === "undefined"){
		$(".formLoaderOverlay .letsTxt").addClass("validatingText").text("Validating Your Application");
		$("body div.allowInherit").children().not(".visibleWhileLoading, .alwaysVisible").addClass("invisibleWhileLoading");
		$(".visibleWhileLoading").removeClass("done");
		if(typeof window.drivingDirection !== "undefined" && window.drivingDirection == "backwards"){
			event.preventDefault();
			window.location	= $("#scriptData").data("fullloaderurl") + pageNumber + "/Back";
			return false;
		} else{
			if(isSubmittingData == 1){
				return true;
			} else if(isSubmittingData == 2){
				throw "OutOfPages";
			} else{
				window.location	= $("#scriptData").data("fullloaderurl") + pageNumber;
				return false;
			}
		}
	}

	let newPageContent	= window.pages[pageNumber].replace(/(%![a-z0-9]+!%)/ig, function(matchedSubstring, capGroup, offset, string){
			return nullCoalesce(window.generatedFormData[capGroup.substr(2, (capGroup.length -4))], window.currentFormData[capGroup.substr(2, (capGroup.length -4))], capGroup);
		});
	newPageContent		= window.pages[pageNumber].replace(/(%[^][a-z0-9]+[^]!%)/ig, function(matchedSubstring, capGroup, offset, string){
			return nullCoalesce(window.generatedFormData[capGroup.substr(2, (capGroup.length -4))], window.currentFormData[capGroup.substr(2, (capGroup.length -4))], "");
		});

	$("#formPageForm").html(newPageContent);
	let	pageCount		= $("#scriptData").data("maxpages"),
		pageNumberForMt	= pageNumber;
	if(window.preloadingCnt == 0){
		pageCount		= window.effectivePages;
		pageNumberForMt	= 0
		for(var key in window.pages){
			if(key > pageNumber){
				break;
			}
			if(window.pages[key].trim().length > 0){
				pageNumberForMt++;
			}
		}
		
	}
	$("#progressNumber").text(Math.floor((pageNumberForMt / (pageCount + 1)) * 100));
	$(".meter progress").val(Math.floor((pageNumberForMt / (pageCount + 1)) * 100));
	processNewPageLoaded(pageNumber);
	return false;
}

async function pageSubmitFunction(event){
	if(typeof window.pages[(window.pageNumber + 1)] !== "undefined"){
		event.preventDefault();
	}

	let validationResult = await runValidationQueue();
	if(!validationResult){
		if(typeof pageValidationPrompt === "function"){
			pageValidationPrompt(); // Note, will not wait for each function to complete!
		}
		event.preventDefault();
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

	window.pageNumber++;
	return loadNewPage(window.pageNumber, 1);
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
	
	if($(".sectionContainer:not(.hidden)").length == 0){ // No fields on current page, load the next!
		if(typeof window.drivingDirection !== "undefined" && window.drivingDirection == "backwards"){
			window.pageNumber--;
		} else{
			window.pageNumber++;
		}
		try{
			loadNewPage(window.pageNumber, 2);
		} catch(e){
			if(e == "OutOfPages"){
				if($("#formPageForm").length > 0){
					$("#formPageForm").find(".sectionContainer.hidden").remove();
					window.pageNumber--;
					$("#formPageForm").trigger("submit");
				} else{
					window.location	= $("#scriptData").data("fullloaderurl") + pageNumber;
				}
			} else{
				throw e;	
			}
		}
	}
}

function processNewPageLoaded(pageNumber){
	$(".pagedContent").filter("[class*='showIfPageCountOver']").hide().filter(function(){
		for(const theClass of this.classList.entries()){
			if(theClass[1].substr(0, 19) == "showIfPageCountOver" && theClass[1].substr(19) < window.effectivePages){
				return true;
			}
		}
		return false;
	}).show();
	$(".pagedContent").filter("[class*='hideIfPageCountOver']").show().filter(function(){
		for(const theClass of this.classList.entries()){
			if(theClass[1].substr(0, 19) == "hideIfPageCountOver" && theClass[1].substr(19) < window.effectivePages){
				return true;
			}
		}
		return false;
	}).hide();
	$(".pagedContent").filter("[class*='hideOnPage']").show();
	$(".hideOnPage" + pageNumber + ",.hideOnPageNegative" + (window.effectivePages - pageNumber)).hide();
	$(".pagedContent").filter("[class*='showOnPage']").hide();
	$(".showOnPage" + pageNumber + ",.showOnPageNegative" + (window.effectivePages - pageNumber)).show();
	if(pageNumber == $("#scriptData").data("maxpages")){
		$(".hideOnPageMax").hide();
		$(".showOnPageMax").show();
	} else if(pageNumber == 1){
		$(".hideOnPageMin").hide();
		$(".showOnPageMin").show();
	}
	
	processPageLoadComplete();
}



async function preloadAPage(pageNumber){
	await waitUntilLoadingSlot();
	window.preloadingCnt++;

	let backoffFactor	= 2000,
		loopRunning		= true;

	while(loopRunning){
		await $.get($("#scriptData").data("preloaderurl") + pageNumber)
			.then((response) => {
				window.pages[pageNumber] = response;
				if(response.trim().length > 0){
					window.effectivePages++;
				}
				window.preloadingCnt--;
				loopRunning	= false;
			})
			.catch((_jqxhr, _textStatus, error) => {
				console.log(error);
				console.log(backoffFactor);
			});
		await sleep(backoffFactor);
		backoffFactor = backoffFactor * 2;
	}
}

async function preloadPageContent(direction){
	var pointer	= (direction < 0 ? "backwardPointer" : "forwardPointer");

	while(window[pointer] > 0 && window[pointer] <= $("#scriptData").data("maxpages")){
		preloadAPage(window[pointer]);
		await sleep(Math.floor((Math.random() * 500) + 1));
		if(direction < 0){
			window[pointer]--;
		} else{
			window[pointer]++;
		}
	}
}

$(document).ready(function(){
	try{
		$("body div.allowInherit").children().not(".visibleWhileLoading, .alwaysVisible").addClass("invisibleWhileLoading");
		$(".visibleWhileLoading").show();
		var	indexOfPage			= (window.location.toString().toLowerCase().indexOf("page") + 4),
			urlFromPageOnwards	= window.location.toString().substr(indexOfPage),
			indexOfNextSlash	= urlFromPageOnwards.indexOf("/"),
			urlUntilNextSlash	= urlFromPageOnwards.substr(0, indexOfNextSlash);
		window.pageNumber		= new Number(
												indexOfPage >= 4 ? /* This would normally be -1, so >= 0; but due to the +4 above, we add 4 to the cond */
												(
													indexOfNextSlash >= 0 ?
													urlUntilNextSlash :
													urlFromPageOnwards
												) :
												(
													typeof $("#scriptData").data("loadedpage") !== "undefined" ?
													$("#scriptData").data("loadedpage") :
													1
												)
											);
		window.pages			= {};
		window.effectivePages	= 1;
		window.backwardPointer	= window.pageNumber - 1;
		window.forwardPointer	= window.pageNumber;
		window.drivingDirection	= nullCoalesce($("#scriptData").data("startdrivingdirection"), "forwards");

		$(".progressBackButton").closest(".meterBut").on("click", "*", function(event){
			event.preventDefault();
			window.pageNumber--;
			window.drivingDirection	= "backwards";
			loadNewPage(window.pageNumber, 0);
			window.drivingDirection = "forwards";
			return false;
		});
		$(".progressForwardButton").closest(".meterBut").on("click", "*", function(event){
			if($("#formPageForm").length > 0){
				$("#formPageForm").trigger("submit");
			} else{
				pageSubmitFunction(event);
			}
			event.preventDefault();
			return false;
		});

		processNewPageLoaded(window.pageNumber);
		window.drivingDirection	= "forwards";

		// Preload The Site
		preloadPageContent(1); // Forwards
		preloadPageContent(-1); // Backwards
		window.setTimeout(function(){
			$(".invisibleWhileLoading").removeClass("invisibleWhileLoading");
			$(".visibleWhileLoading").addClass("done");
		}, 2500);
	} catch(e){console.log(e);}
});
