// Namespace
this.GC = this.GC || {};

(function ($) {

	"use strict";
	
	function Preloader() {
		
		var _this = this;
		
		this.cubeFaceEnum = { F:1, B:2, L:3, R:4, T:5, B:6 }; // font, back, left, right, top, bottom
		
		this.assetsLoaded = 0;
		this.assetsToLoad = 0;
		this.refreshRate = 500;
		this.videoLoader = setInterval(this.init, this.refreshRate);
		
		this.assetCollection = [
			{ face:F, type:"video", source:"" },
			{ face:B, type:"video", source:"" },
			{ face:L, type:"video", source:"" },
			{ face:R, type:"video", source:"" },
			{ face:T, type:"video", source:"" },
			{ face:B, type:"video", source:"" }
		];
		
		this.init = function() {
			this.assetsLoaded = 0;
			this.assetsToLoad = this.assetCollection.length;
			
			for (var i=0; i<assetsToLoad; i++) {
				var vid = document.getElementByID(assetCollection[i].source[0]);
				if (video.ReadyState) {
					var buffered = video.buffered.end(0).toFixed(2);
					var duration = video.duration.toFixed(2);
					if (buffered >= duration) {
						++this.assetsLoaded;
						if (this.assetsLoaded == this.assetsToLoad)
							clearInterval(this.videoLoader);
					}
				}
			}
		}
	}
	
	GC.Preloader = Preloader;

})(jQuery);

