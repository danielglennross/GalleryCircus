// Namespace
this.GC = this.GC || {};

(function ($) {

	"use strict";
	
	function Preloader() {
		
		var _this = this;
		
		this.cubeFaceEnum = { FRONT:1, BACK:2, LEFT:3, RIGHT:4, TOP:5, BOTTOM:6 };
		
		this.assetsLoaded = 0;
		this.assetsToLoad = 0;
		this.refreshRate = 500;
		this.videoLoader = null;
		
		this.assetCollection = [
			{ face:this.cubeFaceEnum.FRONT,  type:"video", id:"videoFront",  sources:[ {src:"bgSuperCell.mp4", type:"video/mp4"}, {src:"bgSuperCell.ogv", type:"video/ogg"} ] },
			{ face:this.cubeFaceEnum.BACK,   type:"video", id:"videoBack",   sources:[ {src:"bgSuperCell.mp4", type:"video/mp4"}, {src:"bgSuperCell.ogv", type:"video/ogg"} ] },
			{ face:this.cubeFaceEnum.LEFT,   type:"video", id:"videoLeft",   sources:[ {src:"bgSuperCell.mp4", type:"video/mp4"}, {src:"bgSuperCell.ogv", type:"video/ogg"} ] },
			{ face:this.cubeFaceEnum.RIGHT,  type:"video", id:"videoRight",  sources:[ {src:"bgSuperCell.mp4", type:"video/mp4"}, {src:"bgSuperCell.ogv", type:"video/ogg"} ] },
			{ face:this.cubeFaceEnum.TOP,    type:"video", id:"videoTop",    sources:[ {src:"bgSuperCell.mp4", type:"video/mp4"}, {src:"bgSuperCell.ogv", type:"video/ogg"} ] },
			{ face:this.cubeFaceEnum.BOTTOM, type:"video", id:"videoBottom", sources:[ {src:"bgSuperCell.mp4", type:"video/mp4"}, {src:"bgSuperCell.ogv", type:"video/ogg"} ] }
		];
		
		this.videos = [];
		
		this.init = function() {
			this.assetsLoaded = 0;
			this.assetsToLoad = this.assetCollection.length;
			for (var i=0; i<this.assetsToLoad; i++) {
				var v = this.createVideo(this.assetCollection[i]);
				v.load();
				this.videos.push(v);
			}
			this.videoLoader = setInterval(this.pollLoader.bind(_this), this.refreshRate); // this was changing context
		}
		
		this.pollLoader = function() {
			for (var i=0; i<this.assetsToLoad; i++) {
				var video = this.videos[i];
				if (video.readyState) {
					var buffered = video.buffered.end(0).toFixed(2);
					var duration = video.duration.toFixed(2);
					if (buffered >= duration) {
						++this.assetsLoaded; 
						console.log("Videos loaded: "+this.assetsLoaded);
						if (this.allVideosLoaded()) {
							clearInterval(this.videoLoader); 
							console.log("All videos loaded");
						}
					}
				}
			}
		}
		
		this.allVideosLoaded = function() {
			return this.assetsLoaded == this.assetsToLoad;
		}
		
		this.createVideo = function(elem) {
			var vid = document.createElement('video');
			vid.id = elem.id;
			vid.preload = true;
			vid.face = elem.face;
			vid.style.display = "none";
			for (var i=0; i<elem.sources.length; i++) {
				var s = document.createElement('source');
				s.src = elem.sources[i].src;
				s.type = elem.sources[i].type;
				vid.appendChild(s);
			}
			document.body.appendChild(vid);
			return vid;
		}		
	}
	
	GC.Preloader = Preloader;

})(jQuery);

