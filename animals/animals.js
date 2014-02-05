// Namespace
this.GC = this.GC || {};

(function ($) {

	"use strict";
	
	function Animals() {
		var _this = this;
	
		this.poller = null;
		this.pollRate = 500;
	
		this.init = function() {
			var preloader = new GC.Preloader();
			preloader.init();
			this.poller = setInterval( function() { _this.isReady(preloader); }, this.pollRate); // no need for bind, as we're calling from _this and not a different this context (e.g. this.isReady)
		}
		
		this.isReady = function(preloader) {
			if (preloader.allVideosLoaded()) {
				clearInterval(this.poller);
				var cube = new GC.Cube(preloader.videos);
				cube.init();
				cube.animate();
			}
		}
	}
	
	GC.Animals = Animals;
	
})(jQuery)