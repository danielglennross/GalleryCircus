// Namespace
this.GC = this.GC || {};

(function ($) {

	"use strict";
	
	function Cube(videoArray) {
		
		var _this = this;
		this.videos = videoArray;
		
		alert("got vids "+this.videos.length);
	}
	
	GC.Cube = Cube;
	
})(jQuery)