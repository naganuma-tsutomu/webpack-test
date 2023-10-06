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

/***/ "./src/assets/js/archive-products.js":
/*!*******************************************!*\
  !*** ./src/assets/js/archive-products.js ***!
  \*******************************************/
/***/ (() => {

eval("// -------------------- 数量入力\n$(\".btn-number\").click(function (e) {\n    e.preventDefault();\n  \n    fieldName = $(this).attr(\"data-field\");\n    type = $(this).attr(\"data-type\");\n    var input = $(\"input[name='\" + fieldName + \"']\");\n    var currentVal = parseInt(input.val());\n    if (!isNaN(currentVal)) {\n      if (type == \"minus\") {\n        if (currentVal > input.attr(\"min\")) {\n          input.val(currentVal - 1).change();\n        }\n        if (parseInt(input.val()) == input.attr(\"min\")) {\n          $(this).attr(\"disabled\", true);\n        }\n      } else if (type == \"plus\") {\n        if (currentVal < input.attr(\"max\")) {\n          input.val(currentVal + 1).change();\n        }\n        if (parseInt(input.val()) == input.attr(\"max\")) {\n          $(this).attr(\"disabled\", true);\n        }\n      }\n    } else {\n      input.val(0);\n    }\n  });\n  $(\".input-number\").focusin(function () {\n    $(this).data(\"oldValue\", $(this).val());\n  });\n  $(\".input-number\").change(function () {\n    minValue = parseInt($(this).attr(\"min\"));\n    maxValue = parseInt($(this).attr(\"max\"));\n    valueCurrent = parseInt($(this).val());\n  \n    name = $(this).attr(\"name\");\n    if (valueCurrent >= minValue) {\n      $(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr(\n        \"disabled\"\n      );\n    } else {\n      $(this).val($(this).data(\"oldValue\"));\n    }\n    if (valueCurrent <= maxValue) {\n      $(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr(\n        \"disabled\"\n      );\n    } else {\n      $(this).val($(this).data(\"oldValue\"));\n    }\n  });\n  $(\".input-number\").keydown(function (e) {\n    // Allow: backspace, delete, tab, escape, enter and .\n    if (\n      $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||\n      // Allow: Ctrl+A\n      (e.keyCode == 65 && e.ctrlKey === true) ||\n      // Allow: home, end, left, right\n      (e.keyCode >= 35 && e.keyCode <= 39)\n    ) {\n      // let it happen, don't do anything\n      return;\n    }\n    // Ensure that it is a number and stop the keypress\n    if (\n      (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&\n      (e.keyCode < 96 || e.keyCode > 105)\n    ) {\n      e.preventDefault();\n    }\n  });\n  \n  /* input type=\"nunber\" の値を div id=\"output-number-of-unit\" に出力する。*/\n  $(function () {\n    var $input = $(\"#number-of-unit\");\n    var $output = $(\"#output-number-of-unit\");\n    $input.on(\"change\", function (event) {\n      var value = $input.val();\n      $output.text(value);\n    });\n  });\n\n//# sourceURL=webpack://test/./src/assets/js/archive-products.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/assets/js/archive-products.js"]();
/******/ 	
/******/ })()
;