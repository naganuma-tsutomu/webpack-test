/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/js/view_timer.js":
/*!*************************************!*\
  !*** ./src/assets/js/view_timer.js ***!
  \*************************************/
/***/ (() => {

eval("$(document).ready(function() {\n    $(\".view_timer\").each(function(index, target) {\n      var startDate = $(this).attr(\"data-start-date\");\n      var endDate = $(this).attr(\"data-end-date\");\n      var nowDate = new Date();\n  \n      if (startDate) {\n        startDate = new Date(startDate);\n      } else {\n        startDate = nowDate;\n      }\n      if (endDate) {\n        endDate = new Date(endDate);\n      }\n  \n      if (startDate <= nowDate && (!endDate || nowDate <= endDate)) {\n        $(this).show();\n      } else {\n        $(this).hide();\n      }\n    });\n  });\n\n//# sourceURL=webpack://test/./src/assets/js/view_timer.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/assets/js/view_timer.js"]();
/******/ 	
/******/ })()
;