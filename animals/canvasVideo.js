// Namespace
this.GC = this.GC || {};

(function ($) {

	"use strict";
	
	function CanvasVideo(o) {
		this.video = o.video;
		
		this.videoImage = document.createElement('canvas');
		this.videoImage.width = o.width;
		this.videoImage.height = o.height;
		this.videoImage.id = this.video.face;

		this.videoImageContext = this.videoImage.getContext('2d');
		this.videoImageContext.fillStyle = '#000000'; // background colour if no video present
		this.videoImageContext.fillRect(0, 0, this.videoImage.width, this.videoImage.height);

		this.videoTexture = new THREE.Texture(this.videoImage);
		this.videoTexture.minFilter = THREE.LinearFilter;
		this.videoTexture.magFilter = THREE.LinearFilter;
		
		this.movieMaterial = new THREE.MeshBasicMaterial( { map: this.videoTexture, overdraw: true } );
	}
	
	GC.CanvasVideo = CanvasVideo;
	
})(jQuery)