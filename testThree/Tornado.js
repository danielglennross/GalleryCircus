this.GC = this.GC || {};

(function($) {

	"use strict";

	function Preloader(o) {
	
		var assets = o || new Object();
		
		var images = assets.images;
		var audios = assets.audios;
		
		var imagesToLoad, imagesLoaded, audio, isAudioLoaded, isImagesLoaded, poller;
		
		this.load = function() {
			if (images.length == 0) return;
			
			isAudioLoaded = false;
			isImagesLoaded = false;
			
			fireImages();
			fireAudio();
			
			poller = setInterval(poll, 50);
		}
		
		function poll() {
			if (isAudioLoaded && isImagesLoaded) {
				document.body.style.display = "block";
				audio.play();
				clearInterval(poller);
			}
		}
		
		function fireImages() {
			imagesToLoad = images.length;
			imagesLoaded = 0;
			for (var i = 0; i < imagesToLoad; i++) {
				preloadImg(images[i].containerId, images[i].imgUrl, images[i].imageId);
			}
		}
		
		function fireAudio() {
			audio = document.createElement('audio');
			for (var i = 0; i < audios.length; i++) {
				preLoadAudio(audio, audios[i].audioSrc, audios[i].audioType);
			}
			audio.preload = "auto";
			audio.volume = 1;
			audio.addEventListener('ended', function(){
				audio.pause();
				audio.currentTime = 0;
				audio.play();
			});
			audio.addEventListener('canplaythrough', function(){
				isAudioLoaded = true;
			});
			document.body.appendChild(audio);
		}
		
		function preLoadAudio(audio, audioSrc, audioType) {			
			var source = document.createElement('source');
			if (audioType == "ogg" && audio.canPlayType('audio/ogg;')) {
				source.type= 'audio/ogg';
				source.src= audioSrc;
			} else if (audioType == "wav" && audio.canPlayType('audio/x-wav')) {
				source.type= 'audio/x-wav';
				source.src= audioSrc;
			}
			audio.appendChild(source);
		}
		
		function preloadImg(containerId, imgUrl, imageId) {
			var i = document.createElement('img');
			i.id = imageId;
			i.onload = function() {
				var container = document.getElementById(containerId);
				container.appendChild(this);
				++imagesLoaded;
				if (imagesLoaded == imagesToLoad)
					isImagesLoaded = true;
			};
			i.src = imgUrl;
		}
	}
	
	GC.Preloader = Preloader;
	
})(jQuery);

/*************************/

(function($) {
	
	"use strict";
	
	function GalleryCircusMegaTornado(o) {
	
		var self = this;
		
		// public
		this.containerElement = o.containerElement
	
		// private
		// standard threejs shite
		var container, scene, camera, renderer, controls, stats;
		var clock = new THREE.Clock();
		
		// engine 
		var cloudEngine, tornadoEngine, movingX;
		
		// public
		this.init = function() {
			movingX = 0;
			
			// scene
			scene = new THREE.Scene();
			
			// camera
			var screenWidth = window.innerWidth, screenHeight = window.innerHeight;
			var viewAngle = 45, aspect = screenWidth / screenHeight, near = 2, far = 5000; // 45, 2, 5000
			camera = new THREE.PerspectiveCamera(viewAngle, aspect, near, far);
			scene.add(camera);
			camera.position.set(0,200,400); // 0, 200, 400
			camera.lookAt(scene.position);	
			
			// renderer
			renderer = Detector.webgl ? new THREE.WebGLRenderer( {antialias:true} ) : new THREE.CanvasRenderer(); 
			renderer.setSize(screenWidth, screenHeight);
			container = document.getElementById(this.containerElement);
			container.appendChild( renderer.domElement );

			// LIGHT
			var light = new THREE.PointLight(0xffffff);
			light.position.set(0,250,0);
			scene.add(light);
			
			cloudEngine = new ParticleEngine();
			cloudEngine.setValues(Effects.clouds);
			cloudEngine.initialize(scene);
			
			tornadoEngine = new ParticleEngine();
			tornadoEngine.setValues(Effects.tornado);
			tornadoEngine.initialize(scene);
			
			handlers();
		}

		this.animate = function() {
			window.requestAnimationFrame( self.animate );
			render();		
			update();
		}
		
		// private
		function handlers() {
			$(document).on("mousemove", function(event) {
				var centerPoint = window.innerWidth*0.75;
				movingX = ((centerPoint - event.pageX)*-1)*0.1;
				//console.log(movingX);
			});
			
			window.onresize = function(event) {
				// re-calc renderer and camera
				renderer.setSize( window.innerWidth, window.innerHeight );
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
			};
		}
		
		function restartEngine() {
			resetCamera();			
			tornadoEngine.destroy(scene);
			tornadoEngine = new ParticleEngine();
			tornadoEngine.setValues(Effects.tornado);
			tornadoEngine.initialize(scene);
		}

		function resetCamera() {
			// CAMERA
			var screenWidth = window.innerWidth, screenHeight = window.innerHeight;
			var viewAngle = 45, aspect = screenWidth / screenHeight, near = 2, far = 5000; // 45, 2, 5000
			camera = new THREE.PerspectiveCamera(viewAngle, aspect, near, far);
			//camera.up = new THREE.Vector3( 0, 0, 1 );
			camera.position.set(0,200,400);
			camera.lookAt(scene.position);	
			scene.add(camera);
		}


		function update() {
			var dt = clock.getDelta() * 0.5;
			cloudEngine.update(dt);	
			tornadoEngine.update(dt, movingX);

			if (!tornadoEngine.emitterAlive)
				setTimeout(restartEngine, 3000);
		}

		function render() {
			renderer.render(scene, camera);
		}
	}
	
	GC.GalleryCircusMegaTornado = GalleryCircusMegaTornado;
	
})(jQuery);