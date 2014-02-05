// Namespace
this.GC = this.GC || {};

(function ($) {

	"use strict";
	
	function Cube(videoArray) {
	
		var _this = this;
		this.videos = videoArray;
		this.canvasArr = [];
	
		this.container;
		this.scene;
		this.camera;
		this.renderer; 
		this.movieScreen;
		this.video; 
		this.videoImage; 
		this.videoImageContext; 
		this.videoTexture;
		
		// this.plane;
		// this.tgtRot      = 0;
		// this.tgtRotMouse = 0;

		// this.mouseX      = 0;
		// this.mouseXMouse = 0;

		// this.winHalfW = window.innerWidth / 2;
		
		// this.targetRotation = 0;
		// this.targetRotationOnMouseDown = 0;

		// this.mouseX = 0;
		// this.mouseXOnMouseDown = 0;
		
		this.init = function() 
		{
			this.scene = new THREE.Scene();
			this.camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 0.1, 1000);
			
			this.renderer = new THREE.CanvasRenderer(); // new THREE.WebGLRenderer( {antialias:true} );
			this.renderer.setSize(window.innerWidth, window.innerHeight);
			document.body.appendChild(this.renderer.domElement);
			
			this.setVideos({width:600, height:500});
			
			var movieMaterialArr = [];
			for (var i = 0; i < this.canvasArr.length; i++) {
				movieMaterialArr.push(this.canvasArr[i].movieMaterial);
			}
			
			// the geometry on which the movie will be displayed - movie image will be scaled to fit these dimensions.
			var movieGeometry = new THREE.CubeGeometry( 4, 4, 4 );
			var materials = new THREE.MeshFaceMaterial( movieMaterialArr );
			this.movieScreen = new THREE.Mesh( movieGeometry, materials );
			//movieScreen.position.set(0,50,0);
			this.scene.add(this.movieScreen);

			this.camera.position.z = 5;
			
			// var mats = [];
			// for (var i = 0; i < 6; i ++) {
				// mats.push(new THREE.MeshBasicMaterial({color:Math.random()*0xffffff}));
			// }
			
			// this.movieScreen = new THREE.Mesh(
				// new THREE.CubeGeometry(200, 200, 200, 1, 1, 1, mats),
				// new THREE.MeshFaceMaterial()
			// );
			// this.movieScreen.position.y = 150;
			// this.movieScreen.overdraw = true;
			// this.scene.add(this.movieScreen);
			
			
			// this.plane = new THREE.Mesh(
				// new THREE.PlaneGeometry(4, 4),
				// new THREE.MeshBasicMaterial( {color: 0xe0e0e0} )
			// );
			// this.plane.rotation.x = - 90 * (Math.PI / 180);
			// this.plane.overdraw = true;
			// this.scene.add(this.plane);
			
			// document.addEventListener( 'mousedown', _this.onDocumentMouseDown, false );
		}
		
		// this.onDocumentMouseDown = function(event) {
			// event.preventDefault();
			
			// document.addEventListener( 'mousemove', _this.onDocumentMouseMove, false );
			// document.addEventListener( 'mouseup', _this.onDocumentMouseUp, false );
			
			// this.mouseXMouse = event.clientX - this.winHalfW;
			// this.tgtRotMouse = this.tgtRot;
		// }
		
		// this.onDocumentMouseMove = function(event) {
			// this.mouseX = event.clientX - this.winHalfW;
			// this.tgtRot = this.tgtRotMouse + (this.mouseX - this.mouseXMouse) * 0.02;
		// }
		
		// this.onDocumentMouseUp = function(event) {
			// document.removeEventListener( 'mousemove', _this.onDocumentMouseMove, false );
			// document.removeEventListener( 'mouseup', _this.onDocumentMouseUp, false );
		// }
		
		this.setVideos = function(o) {
			for (var i = 0; i < this.videos.length; i++) {
				var v = new GC.CanvasVideo({video:this.videos[i], width:o.width, height:o.height});
				this.canvasArr.push(v);
				v.video.play();
			}
		}

		this.animate = function() 
		{
			window.requestAnimationFrame(_this.animate);
			_this.render();
		}

		this.render = function() 
		{	
			for (var i = 0; i < this.canvasArr.length; i++) {
				if (this.canvasArr[i].video.readyState === this.canvasArr[i].video.HAVE_ENOUGH_DATA) 
				{
					this.canvasArr[i].videoImageContext.drawImage(this.canvasArr[i].video, 0, 0);
					if (this.canvasArr[i].videoTexture) 
						this.canvasArr[i].videoTexture.needsUpdate = true;
				}
			}
			
			this.movieScreen.rotation.x += 0.005;
			this.movieScreen.rotation.y += 0.005;
			
			//this.plane.rotation.z = this.movieScreen.rotation.y += (this.tgtRot - this.movieScreen.rotation.y) * 0.05;

			this.renderer.render(this.scene, this.camera);
		}
	}
	
	GC.Cube = Cube;
	
})(jQuery)