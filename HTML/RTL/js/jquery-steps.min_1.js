/*!
    * Steps v1.0.2
    * https://github.com/oguzhanoya/jquery-steps
    *
    * Copyright (c) 2019 oguzhanoya
    * Released under the MIT license
    */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e(require("jquery")):"function"==typeof define&&define.amd?define(["jquery"],e):e((t=t||self).$)}(this,function(a){"use strict";function i(t,e){for(var o=0;o<e.length;o++){var i=e[o];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}a=a&&a.hasOwnProperty("default")?a.default:a;var n={startAt:0,showBackButton:!0,showFooterButtons:!0,onInit:$.noop,onDestroy:$.noop,onFinish:$.noop,onChange:function(){return!0},stepSelector:".step-steps > li",contentSelector:".step-content > .step-tab-panel",footerSelector:".step-footer",buttonSelector:"button",activeClass:"active",doneClass:"done",errorClass:"error"},e=function(){function o(t,e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,o),this.options=a.extend({},n,e),this.el=a(t),this.init()}return function(t,e,o){e&&i(t.prototype,e),o&&i(t,o)}(o,[{key:"init",value:function(){this.hook("onInit");var i=this;a(this.el).find(this.options.stepSelector).on("click",function(t){t.preventDefault();var e=a(this).closest("li").index(),o=i.getStepIndex();i.setActiveStep(o,e)}),a(this.el).find("".concat(this.options.footerSelector," ").concat(this.options.buttonSelector)).on("click",function(t){t.preventDefault();var e=a(this).data("direction");i.setAction(e)}),this.setShowStep(this.options.startAt,"",this.options.activeClass),this.setFooterBtns(),this.options.showFooterButtons||(this.hideFooterBtns(),this.setFooterBtns=a.noop)}},{key:"hook",value:function(t){void 0!==this.options[t]&&this.options[t].call(this.el)}},{key:"destroy",value:function(){this.el.empty(),this.el.removeData("plugin_Steps"),this.hook("onDestroy")}},{key:"getStepIndex",value:function(){return this.el.find(this.options.stepSelector).filter(".".concat(this.options.activeClass)).index()||0}},{key:"getMaxStepCount",value:function(){return this.el.find(this.options.stepSelector).length-1}},{key:"getStepDirection",value:function(t,e){var o="none";return e<t?o="backward":t<e&&(o="forward"),o}},{key:"setShowStep",value:function(t,e,o){var i=2<arguments.length&&void 0!==o?o:"";this.el.find(this.options.contentSelector).removeClass(this.options.activeClass);var n=this.el.find(this.options.stepSelector).eq(t);n.removeClass(e).addClass(i);var s=n.find("a").attr("href");a(s).addClass(this.options.activeClass)}},{key:"setActiveStep",value:function(t,e){if(e!==t){if(t<e)for(var o=0;o<=e;o+=1){o===e?this.setShowStep(o,this.options.doneClass,this.options.activeClass):this.setShowStep(o,"".concat(this.options.activeClass," ").concat(this.options.errorClass),this.options.doneClass);var i=this.getStepDirection(o,e);if(!this.options.onChange(o,e,i)){this.setShowStep(o,this.options.doneClass,"".concat(this.options.activeClass," ").concat(this.options.errorClass)),this.setFooterBtns();break}}if(e<t)for(var n=t;e<=n;n-=1){var s=this.getStepDirection(n,e);this.options.onChange(n,e,s),this.setShowStep(n,"".concat(this.options.doneClass," ").concat(this.options.activeClass," ").concat(this.options.errorClass)),n===e&&this.setShowStep(n,"".concat(this.options.doneClass," ").concat(this.options.errorClass),this.options.activeClass)}this.setFooterBtns()}}},{key:"setFooterBtns",value:function(){var t=this.getStepIndex(),e=this.getMaxStepCount(),o=this.el.find(this.options.footerSelector);0===t&&o.find('button[data-direction="prev"]').hide(),0<t&&this.options.showBackButton&&o.find('button[data-direction="prev"]').show(),e===t?(o.find('button[data-direction="prev"]').show(),o.find('button[data-direction="next"]').hide(),o.find('button[data-direction="finish"]').show()):(o.find('button[data-direction="next"]').show(),o.find('button[data-direction="finish"]').hide()),this.options.showBackButton||o.find('button[data-direction="prev"]').hide()}},{key:"setAction",value:function(t){var e=this.getStepIndex(),o=e;"prev"===t&&(o-=1),"next"===t&&(o+=1),"finish"===t&&(this.options.onChange(e,o,"forward")?this.hook("onFinish"):this.setShowStep(e,"","error"));"finish"!==t&&this.setActiveStep(e,o)}},{key:"next",value:function(){var t=this.getStepIndex();return this.getMaxStepCount()===t?this.setAction("finish"):this.setAction("next")}},{key:"prev",value:function(){return 0!==this.getStepIndex()&&this.setAction("prev")}},{key:"finish",value:function(){this.hook("onFinish")}},{key:"hideFooterBtns",value:function(){this.el.find(this.options.footerSelector).hide()}}],[{key:"setDefaults",value:function(t){a.extend(n,a.isPlainObject(t)&&t)}}]),o}(),t=a.fn.steps;a.fn.steps=function(t){return this.each(function(){a.data(this,"plugin_Steps")||a.data(this,"plugin_Steps",new e(this,t))})},a.fn.steps.version="1.0.2",a.fn.steps.setDefaults=e.setDefaults,a.fn.steps.noConflict=function(){return a.fn.steps=t,this}});