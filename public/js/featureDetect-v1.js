/**
 * @fileoverview 
 * - Uses moderizr to check to see if promises | arrow | es5date are available within the browser
 * - An error box is show to the user if any of these features are not supported by their browser
 * - This gives feedback to users to currently get no message should their browser not support the JS features to run the site
 * @requires modernizr-custom.JS to be inlcuded before calling this file
 * @author Craig Harvey | TFLI 2019
 */

 // creates display box for applying on the page
 function createUnsuportedBrowserBox(){
	// create feature box
	var featureBox  = document.createElement("div");
	featureBox.setAttribute("class", "fixedErrorMsg");
	var featureText = document.createTextNode($("#featureDetectScriptData").data("featuredetecttext"));
	// create link
	var link 		= document.createElement("a");
	link.setAttribute("target", "_blank");
	link.setAttribute("href", $("#featureDetectScriptData").data("featuredetectlink"));
	var linkText	= document.createTextNode($("#featureDetectScriptData").data("featuredetectlinktext"));
	link.appendChild(linkText);
	featureBox.appendChild(featureText);
	featureBox.appendChild(link);

	return featureBox
}

$( document ).ready(function() { 
	var featureBox = createUnsuportedBrowserBox();
	if (testForArraysSupport() != true || testForDateSupport() != true || testForFunctionSupport() != true || testForObjectSupport() != true || testForStrictMode() != true || testForStringSupport() != true || testForSyntaxSupport() != true || testForUndefinedSupport() != true || window.sytaxfileparsed !== true) {
		document.getElementsByTagName("body")[0].insertAdjacentElement('afterbegin', featureBox);	
	}	
});


// Modernizr.es5 - array /  date Object / funciton / object / string / syntax / undefined
// Modernizr.es5 - arrays 
function testForArraysSupport(){
	return !!(Array.prototype &&
		Array.prototype.every &&
		Array.prototype.filter &&
		Array.prototype.forEach &&
		Array.prototype.indexOf &&
		Array.prototype.lastIndexOf &&
		Array.prototype.map &&
		Array.prototype.some &&
		Array.prototype.reduce &&
		Array.prototype.reduceRight &&
		Array.isArray);
};

// Modernizr.es5 - Date 
function testForDateSupport() {
	var isoDate = '2013-04-12T06:06:37.307Z',
		canParseISODate = false;
	try {
		canParseISODate = !!Date.parse(isoDate);
	} catch (e) {
		// no ISO date parsing yet
	}
	return !!(Date.now &&
		Date.prototype &&
		Date.prototype.toISOString &&
		Date.prototype.toJSON &&
		canParseISODate);
};

// Modernizr.es5 - function 
function testForFunctionSupport() {
    return !!(Function.prototype && Function.prototype.bind);
  };

// Modernizr.es5 - object
function testForObjectSupport() {
	return !!(Object.keys &&
		Object.create &&
		Object.getPrototypeOf &&
		Object.getOwnPropertyNames &&
		Object.isSealed &&
		Object.isFrozen &&
		Object.isExtensible &&
		Object.getOwnPropertyDescriptor &&
		Object.defineProperty &&
		Object.defineProperties &&
		Object.seal &&
		Object.freeze &&
		Object.preventExtensions);
}

// Modernizr.es5 - strict mode 
function testForStrictMode(){
	'use strict'; 
	return !this; 
};

// Modernizr.es5 - string
function testForStringSupport() {
	return !!(String.prototype && String.prototype.trim);
}

// Modernizr.es5 - syntax - zeroWidthChars
function testForZeroWidthChars(){
	if("_\u200c\u200d" === "_"){
		return true
	}else {
		return true
	}
}

// Modernizr.es5 - syntax
function testForSyntaxSupport() {
	var value, obj, stringAccess, getter, setter, reservedWords, zeroWidthChars;
	try {
		// Property access on strings
		stringAccess = "foobar"[3] === "b";
		// Getter in property initializer
		getter = ({ get x(){ return 1 } }).x === 1;
		({ set x(v){ value = v; } }).x = 1;
		// Setter in property initializer
		setter = value === 1;
		// Reserved words as property names
		var obj = { if: 1 };
		reservedWords = obj['if'] === 1;
		// Zero-width characters in identifiers
		zeroWidthChars = testForZeroWidthChars();
	
		return stringAccess && getter && setter && reservedWords && zeroWidthChars;
	} catch (ignore) {
		return false;
	}
}

// Modernizr.es5 - undefined
function testForUndefinedSupport() {
	var result, originalUndefined;
	try {
		originalUndefined = window.undefined;
		window.undefined = 12345;
		result = typeof window.undefined === 'undefined';
		window.undefined = originalUndefined;
	} catch (e) {
		return false;
	}
	return result;
}
