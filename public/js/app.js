/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

window.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".js-footerDate").forEach(function (date) {
    date.innerHTML = new Date().getFullYear();
  });
  var headerAsideMenuBtns = document.querySelectorAll(".js-headerAsideMenuBtn");
  var headerAsideMenus = document.querySelectorAll(".js-headerAsideMenu");
  headerAsideMenuBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      headerAsideMenus.forEach(function (menu) {
        menu.parentElement.removeAttribute("open");
      });
    });
  });
  var newsletter = document.querySelector(".js-newsletter");
  var NEWSLETTER_ID = "NEWSLETTER";
  var isHideNewsletter = localStorage.getItem(NEWSLETTER_ID);

  if (newsletter) {
    document.querySelectorAll(".js-newsletterBtn").forEach(function (button) {
      button.addEventListener("click", function (e) {
        e.preventDefault();
        localStorage.setItem(NEWSLETTER_ID, true);
        newsletter.remove();
      });
    });
  }

  var headerBounce = document.querySelector(".js-headerBounce");

  if (headerBounce) {
    var headerBounceHeight = headerBounce.getBoundingClientRect().height;
    var headerBounceAnimationHeight = headerBounceHeight / 2;
    var headerScrollHeight = headerBounceHeight - headerBounceHeight * 0.4;
    var toHeader = true;
    var toTop = false;
    var lastScroll = 0;
    var downBefore = false;
    window.addEventListener("scroll", function (e) {
      var scrollY = window.pageYOffset;

      if (!downBefore && scrollY > headerBounceHeight) {
        downBefore = true;
      }

      if (!toTop && downBefore && scrollY < lastScroll && scrollY < headerScrollHeight) {
        toTop = true;
        toHeader = true;
        window.scrollTo({
          left: 0,
          top: 0
        });
      }

      lastScroll = scrollY;

      if (scrollY > headerBounceAnimationHeight) {
        headerBounce.classList.add("stop-animation");
      } else {
        headerBounce.classList.remove("stop-animation");
      }

      if (toHeader && scrollY > headerScrollHeight) {
        toHeader = false;
        toTop = false;
        window.scrollTo({
          left: 0,
          top: headerBounceHeight
        });
      }

      if (newsletter) {
        if (scrollY > headerBounceHeight && !isHideNewsletter) {
          newsletter.classList.remove("hidden");
        } else {
          newsletter.classList.add("hidden");
        }
      }
    });
    document.querySelectorAll(".js-bounceDownBtn").forEach(function (button) {
      button.addEventListener("click", function () {
        window.scrollTo({
          left: 0,
          top: headerBounceHeight
        });
      });
    });
  } else if (newsletter && !isHideNewsletter) {
    newsletter.classList.remove("hidden");
  }

  window.dispatchEvent(new Event("scroll"));
  var announcementBar = document.querySelector(".js-announcementBar");

  if (announcementBar) {
    var ANNOUNCEMENT_BAR_ID = "ANNOUNCEMENT_BAR";

    try {
      if (localStorage.getItem(ANNOUNCEMENT_BAR_ID)) {
        announcementBar.remove();
      }

      document.querySelectorAll(".js-announcementBarBtn").forEach(function (button) {
        button.addEventListener("click", function (e) {
          e.preventDefault();
          localStorage.setItem(ANNOUNCEMENT_BAR_ID, true);
          announcementBar.remove();
        });
      });
    } catch (e) {}
  }

  document.querySelectorAll(".js-videoPopupBtn").forEach(function (videoPopupBtn) {
    var videoPopup = document.querySelector(".js-videoPopup");

    if (videoPopup && videoPopupBtn) {
      var iframe = videoPopup.querySelector("iframe");
      videoPopupBtn.addEventListener("click", function () {
        iframe.src = videoPopupBtn.getAttribute("data-url");
        videoPopup.classList.remove("hidden");
      });
      videoPopup.addEventListener("click", function () {
        iframe.removeAttribute("src");
        videoPopup.classList.add("hidden");
      });
    }
  });
  var partners = document.querySelectorAll(".js-partnerCard");

  if (partners.length) {
    var filterPartners = function filterPartners() {
      for (var i = 0; i < partners.length; i++) {
        var partnerName = partners[i].querySelector(".js-partnerName").textContent.trim().toLowerCase();
        var partnerCategory = partners[i].getAttribute("data-category");
        var isAvailable = true;

        if (categoryInput.value && !(partnerCategory == categoryInput.value)) {
          isAvailable = false;
        }

        if (searchInput.value && !partnerName.includes(searchInput.value.toLowerCase())) {
          isAvailable = false;
        }

        if (isAvailable) {
          partners[i].classList.remove("hidden");
        } else {
          partners[i].classList.add("hidden");
        }
      }

      if (document.querySelector(".js-partnerCard.hidden")) {
        banner.classList.add("hidden");
      } else {
        banner.classList.remove("hidden");
      }
    };

    var searchInput = document.querySelector(".js-partnerSearch");
    var categoryInput = document.querySelector(".js-partnerCategory");
    var banner = document.querySelector(".js-partnerBanner");
    searchInput.addEventListener("keyup", function () {
      filterPartners();
    });
    categoryInput.addEventListener("change", function () {
      filterPartners();
    });
  }
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;