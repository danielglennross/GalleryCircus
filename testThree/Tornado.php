<!doctype html>
<html lang="en">
<head>
	<title>Gallery Circus - Supercell</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	<script src="Three.js"></script>
	<script src="Detector.js"></script>

	<script src="TornadoEngine.js"></script>
	<script src="TornadoPresets.js"></script>
	<script src="Tornado.js"></script>
</head>

<style> 
	body {
		background-image:url('BackGround2.png'); no-repeat center center fixed;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		background-size:cover;
		background-color:#cccccc;
		overflow:hidden;
		
		/* reveal via preloader */
		opacity:0.2;
	}
	
	#splash {
		z-index:100; 
		position:absolute;
		height:100%;
		width:100%;
		
		color:#fff;
		font-size:20vmin;
		font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
		text-align:center;
	}
	
	#galleryCircus {
		/* reveal via preloader */
		display:none;
	}

	#foreGround {
		z-index:100; 
		position:absolute;
		height:100%;
		width:100%;
		left:0px; 
		top:0px;
	}
	
	#foreGround img {
		width: 100%;
		height: 100%;
	}

	#container {
		position:absolute; 
		left:0px; 
		top:0px;
	}
</style>

<body>
	<div id="splash"><p>LOADING...</p></div>
	<div id="galleryCircus">
		<div id="container"></div>
		<div id="foreGround"></div>
	</div>

	<script>
		this.GC = this.GC || {};

		$(document).ready(function() {
			var GalleryCircusMegaTornado = new GC.GalleryCircusMegaTornado({containerElement:'container'});
			GalleryCircusMegaTornado.init();
			GalleryCircusMegaTornado.animate();	
			
			var Preloader = new GC.Preloader({images:[{containerId:"foreGround", imgUrl:"ForeGround.png", imageId:"foreGroundImg"}], 
			                                  audios:[{audioSrc:"newTornado.wav", audioType:"wav"}
											         ,{audioSrc:"newTornado.ogg", audioType:"ogg"}]
										    });
			Preloader.load();
		});		
	</script>
</body>
</html>