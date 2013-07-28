<?php
//start of file - Gallery Circus  - copyright 2013
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
        <title>
			Gallery Circus
		</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="width=device-width, maximum-scale=1.0" name="viewport">
		
		<meta name="description" content="A unique and abrasive blues-rock outlet, Gallery Circus have quickly gained a strong reputation for delivering breathtakingly powerful live shows. Hailing from South Tyneside, Gallery Circus consists of 22 year-old identical twins Daniel (lead vocalist, guitar and piano) and Graeme Ross (drums and backing vocals).
		Having played in bands from the tender age of five, Gallery Circus began to take on its current form when the brothers relocated to Chicagos hipster haven Wicker Park two years ago, in a bid to write new music, and thrash together something extraordinary. The brothers became known for throwing DIY gigs around the city and quickly built up a buzz. 
		Helping to spark an anti-garage/ street pop scene with several like-minded bands - Daniel and Graeme took to playing upon rooftops, illegal make-shift venues and public landmarks amongst the usual routine spots. Despite having no instruments of their own (not to mention getting evicted from their apartment after two months, due to their penchant for parties), 
		the pair managed to scrape together equipment from like-minded musicians and acquired quite a following in the iconic city. Having soaked up their new-found Americana influences, Gallery Circus returned to the UK last year, and with their white-hot, screeching blues, and reinforced their reputation as one of the most entertaining and fearsome live performers on the circuit.
		Gallery Circus is designed to be a live thing, says Graeme. Were all about spontaneity and raw passion. Well never use drum loops or samples. Live and on record, our songs capture what can only be achieved by two people, even if that means playing guitar and piano simultaneously. The band managed to retain their in-your-face live sound when they released 
		their debut EP in August last year to rapturous applause. Having relocated back to the states in 2012, this time to Americas most avant-garde city, San Francisco, the twins insist they are taking a strong influence from their surroundings which will be evident when they return home at the end of the year." /> 
        
		<meta name="keywords" content="Gallery Circus, Band, Music, Garage, Rock, Daniel Ross, Graeme Ross, Hipsters" /> 

		<meta name='robots' content='all, index, follow' /> 
        <meta name='rating' content='general' /> 
        <meta name='distribution' content="Gallery Circus" /> 
        <meta name='revisit-after' content='1 days' />
        <meta name='language' content='en' />
        <meta name='copyright' content="Gallery Circus" />
        <meta name='alias' content='http://www.gallerycircus.co.uk/' />
        <meta name='author' content="Gallery Circus" />

		<meta http-equiv='expires' content='0' /> 
		<meta http-equiv='pragma' content='no-cache' /> 
		<meta http-equiv='cache-control' content='no-cache' /> 

		<!-- all links relative to the domain - may need changed when addondomain created -->
		
		<!-- Favicon -->
		<link rel="icon" type="image/ico" href="/img/favicon.ico" />
		<!-- end Favicon -->

		<!-- google fonts -->
			<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
		<!-- end google fonts -->
		
		<!-- JQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<!-- end JQuery -->
		
		<!-- JPlayer -->
        <script src="jquery.jplayer.min.js" type="text/javascript"></script>
		<!-- end JPlayer-->
		
		<!-- video js 
		<link href="video-js.css" rel="stylesheet">
		<script src="video.js"></script>
		<script>
		  videojs.options.flash.swf = "video-js.swf"
		</script>
		 end video js -->
		
		<!-- our scripts -->
        <script src="newSingle.js" type="text/javascript"></script>
        <!-- end scripts -->
		
		<!-- css -->
		<link href="newSingle.css" rel="stylesheet" type="text/css">
		<!-- end css -->
		
    </head>
	
    <body>
        	
		<!-- song controls -->	
        <div id="controls">
            <div id="jPlayer">
			    <img id="jp_poster_0">
				<audio id="jp_audio_0" preload="metadata" src="song.mp3"></audio>
			</div>
			
			<div id="media">
				<a id="play" href="javascript:">PLAY</a> 
				<div id="time">00:00</div> 
				<a id="stop" href="javascript:">STOP</a>
			</div>			
        </div>
		<!-- end song controls -->
		
		<!-- video1 -->
		<div id="polaroid1" class="videoOuter videoContainerSmall" style="visibility:hidden">
			<video id="polaroid1Vid" class="videoSmall">
			  <source src="videos/Sequence01.mp4" type="video/mp4">
			  <source src="videos/Sequence_01.ogv" type="video/ogg">
			  Your browser does not support the video tag.
			</video>
			<div class="leftSmall"></div>
			<div class="rightSmall"></div>
			<div class="topSmall"></div>
			<div class="bottomSmall"></div>
		</div>
		<!-- end video 1 -->
		
		<!-- video2 -->
		<div id="polaroid2" class="videoOuter videoContainerSmall" style="visibility:hidden">
			<video id="polaroid2Vid" class="videoSmall">
			  <source src="videos/Sequence02.mp4" type="video/mp4">
			  <source src="videos/Sequence_02.ogv" type="video/ogg">
			  Your browser does not support the video tag.
			</video>
			<div class="leftSmall"></div>
			<div class="rightSmall"></div>
			<div class="topSmall"></div>
			<div class="bottomSmall"></div>
		</div>
		<!-- end video 2 -->
        
	</body>
</html>