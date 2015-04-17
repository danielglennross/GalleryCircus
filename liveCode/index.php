<?php
//start of file - Gallery Circus  - copyright 2014
?>


<!DOCTYPE html>
<html>
	<head>
		<title> 
			Gallery Circus
		</title> 
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
		<meta name="description" content="A unique and abrasive rock outlet, Gallery Circus have quickly gained a strong reputation for delivering breathtakingly powerful live shows. Hailing from South Tyneside, Gallery Circus consists of 22 year-old identical twins Daniel (lead vocalist, guitar and piano) and Graeme Ross (drums and backing vocals).
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
		
		<link rel="icon" type="image/ico" href="/img/favicon.ico" />
	
		<style>
		
			html {
				height: 100%;
			}

			body {
				/*height:100%;*/
				margin:0px;
				padding:0px;
				list-style:none;
				
				/*background: url("/img/websiteBGTile.png") repeat scroll center bottom transparent;
				-moz-box-shadow: inset 0 0 50px #000000;
				-webkit-box-shadow: inset 0 0 50px #000000;
				box-shadow: inset 0 0 50px #000000;
				*/
				
				/*background: url("/img/supercellBG.png") no-repeat center center fixed;*/ 
				background-color:#303030;
				-webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
				  
				  -moz-box-shadow: inset 0 0 50px #000000;
				-webkit-box-shadow: inset 0 0 50px #000000;
				box-shadow: inset 0 0 50px #000000;
				
				
				
				font-family: 'Permanent Marker', cursive;
				font-size: 16px;
			}
				
			#box{
				width:654px; /*720*/
				height:500px;
				
				margin:0px auto;
				position:relative;
				
				float:right;
			}
			
			#shows{
				width:654px; /*720*/
				height:500px;
				
				margin:0px auto;
				position:relative;
				
				margin-top: 30px;
				/*padding-bottom: 40px; will override bottom padding of .media*/
				
				float:left;
			}

			.glasto {
			    width:600px;
			    height:500px;

                margin:0px auto;
                position:relative;

                margin-top: 30px;
                padding-bottom: 40px; /* will override bottom padding of .media*/

                float:left;
                margin-bottom:70px;
			}

			#glastoOne {
			    float:left;
			}

			#glastoTwo {
                float:right;
            }
			
			#shows table{
				position: absolute;
				margin: 0 auto;
				width: 100%;
				top: 15px;
				color: rgb(255, 0, 0);
				text-align: center;
				left: 30px;
				
				/* adjust when more gigs */
				/* font-weight: bold; */
				top: 10px;
				font-size: 15px;
			}
			
			#supercellCover {
				opacity:0.5;
			}
			
			.tileBorder {
				/*padding: 1px;*/
				float: left;	
			}
			
			.tile{	
				cursor: pointer;
				position: relative;
			}
			
			.media {
				padding: 7px 7px 70px;
				/*font-size: 3vmin;*/
			}

			.polaroidFade {
				/*give the frame's background colour a gradient*/
				background: #eee6d8; /*fallback colour for browsers that don't support gradients*/
				background: -webkit-linear-gradient(top, #ede1c9, #fef8e2 20%, #f2ebde 60%);
				background: -moz-linear-gradient(top, #ede1c9, #fef8e2 20%, #f2ebde 60%);
				background: -o-linear-gradient(top, #ede1c9, #fef8e2 20%, #f2ebde 60%);
				background: -ms-linear-gradient(top, #ede1c9, #fef8e2 20%, #f2ebde 60%);
				background: linear-gradient(top, #ede1c9, #fef8e2 20%, #f2ebde 60%);

				/*give the Polaroids a small drop shadow*/
				-webkit-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
				-moz-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
				box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
			}

			#box:before { 
				content: '';
				display: block;
				position: absolute;
				left:235px; /*postion from the left side of the frame (positive value move the tape right, negative moves it left)*/
				top: -22px; /*position from the top of the frame (positive move it above the frame, negative below)*/
				width: 200px; /*width of the tape*/
				height: 40px; /*height of the tape*/
				background-color: rgba(222,220,198,0.7); /*colour of the tape, use rgba to make it slightly transparent*/

				/*rotate the tape degrees anti-clockwise*/
				-webkit-transform: rotate(-3deg);
				-moz-transform: rotate(-3deg);
				-o-transform: rotate(-3deg);
				-ms-transform: rotate(-3deg);
			}
			
			#shows:before, .glasto:before {
				content: '';
				display: block;
				position: absolute;
				left:235px; /*postion from the left side of the frame (positive value move the tape right, negative moves it left)*/
				top: -22px; /*position from the top of the frame (positive move it above the frame, negative below)*/
				width: 200px; /*width of the tape*/
				height: 40px; /*height of the tape*/
				background-color: rgba(222,220,198,0.7); /*colour of the tape, use rgba to make it slightly transparent*/

				/*rotate the tape degrees anti-clockwise*/
				-webkit-transform: rotate(-3deg);
				-moz-transform: rotate(-3deg);
				-o-transform: rotate(-3deg);
				-ms-transform: rotate(-3deg);
			}

		    .glasto:before {
                content: '';
                display: block;
                position: absolute;
                left:235px; /*postion from the left side of the frame (positive value move the tape right, negative moves it left)*/
                top: -22px; /*position from the top of the frame (positive move it above the frame, negative below)*/
                width: 200px; /*width of the tape*/
                height: 40px; /*height of the tape*/
                background-color: rgba(222,220,198,0.7); /*colour of the tape, use rgba to make it slightly transparent*/

                /*rotate the tape degrees anti-clockwise*/
                -webkit-transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -o-transform: rotate(-3deg);
                -ms-transform: rotate(-3deg);
            }

			.wrapper {
				min-height: 100%;
				height: auto !important;
				height: 100%;
				margin: 0 auto -4em;
				
				padding-top: 75px;
			}
			
			.videoEmbed {
				position:relative; 
				margin: 0 auto; 
				width:1280px; 
				height:720px; 
				margin-bottom:35px; 
				
				/*give the Polaroids a small drop shadow*/
				-webkit-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
				-moz-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
				box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
			}
			
			#main {
				margin:auto; 
				width:1300px; /*1274*/
				padding-top:40px;
				
				background: url("/supercell/img/superCellBackground.png") no-repeat scroll; 
			}
			
			#sideBoxLeft {
				padding-right:40px;
			}
			
			#sideBoxRight {
				padding-left:40px;
			}
			
			.sideBoxes {
				float:left; 
				width:300px; 
				height:500px
			}
			
			.popping {
				height:75px
			}
			
			.popping img{
				opacity:0;
			}
			
			#loader {
				width:380px; 
				height:15px; 
				float:right; 
				margin-top:10px; 
				position:relative;
			}
			
			#percent {
				float:left; 
				background-color: white; 
				position:relative; 
				left: 25px; 
				position:absolute; 
				bottom:0;
			}
			
			#percentIndicator {
				float:right; 
				padding-left:10px; 
				height:15px;
			}
			
			.blur {
				filter: grayscale(30%);
				-webkit-filter: grayscale(30%);
				-moz-filter: grayscale(30%);
				
				transition: 0.5s all ease-in;
				-webkit-transition: 0.5s all ease-in;
				-moz-transition: 0.5s all ease-in;
			}
			
			.blur:hover {
				filter: grayscale(0%);
				-webkit-filter: grayscale(0%);
				-moz-filter: grayscale(0%);
			}
			
			img { 
				max-width: 100%; 
				height: auto;
				width:auto\9;
			}

			a {
				text-decoration:none;
				color: #000;
				
				transition: 0.2s all ease-in;
				-webkit-transition: 0.2s all ease-in;
				-moz-transition: 0.2s all ease-in;
			}
			a:hover {
				text-decoration:none;
				color: #fff;
			}
			a:active {
				text-decoration:none;
				color: #000;
			}

			a img {
				border:none;
				outline:none;
			}

			.clear {
				clear:both;
			}

			#nav {
				height: 40px;
				width: 1300px;
				margin: 0 auto;
				padding-top: 5px;
			}

			#logo {
				float:right;
				position: relative;
				height:100px;
				width:125px;
			}

			#tornado {
				height:100px;
				width:125px;
			}

			#socialTab{
				float:right;
				height:40px;
				width:270px; /*margin-right: 20px;*/ 
			}

			.socialLink {
				height:40px;
			}

			.socialIcon {
				height:40px;
				width:50px;
				margin-top:2px;
				
				/* outline: 0;
				outline: thin dotted \9;
				IE6-9 */

				/*background-color: rgba(233, 234, 230, 0.4);
				  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 14px rgba(233, 234, 230, 1);
				   -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 14px rgba(233, 234, 230, 1);
						box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 14px rgba(233, 234, 230, 1);*/
			}


			#txtLine1 {
				-webkit-transform: rotate(1deg);
				-moz-transform: rotate(1deg);
				-o-transform: rotate(1deg);
				-ms-transform: rotate(1deg);
				transform: rotate(1deg);
			}

			#txtLine2 {
				-webkit-transform: rotate(-1deg);
				-moz-transform: rotate(-1deg);
				-o-transform: rotate(-1deg);
				-ms-transform: rotate(-1deg);
				transform: rotate(-1deg);
			}


			.shadowFail {
			  border-color: rgba(250, 40, 40, 0.8); /* 82, 168, 236 blue */
			  border-width: 1px;
			  border-style: solid; 
			  
			  /* outline: 0;
			  outline: thin dotted \9;
			  IE6-9 */

			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 44px rgba(250, 40, 40, 0.8);
				 -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 44px rgba(250, 40, 40, 0.8);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 44px rgba(250, 40, 40, 0.8);
			}

			.shadowYay {
			  border-color: rgba(82, 168, 236, 0.8); /* 82, 168, 236 blue */ /* 40 250 96 green*/
			  border-width: 2px;
			  border-style: solid; 
			  
			  /* outline: 0;
			  outline: thin dotted \9;
			  IE6-9 */

			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 84px rgba(82, 168, 236, 0.8); /*14px*/
				 -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 84px rgba(82, 168, 236, 0.8);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 84px rgba(82, 168, 236, 0.8);
			}

			.winner {
			  border-color: rgba(233, 234, 230, 1); /* 82, 168, 236 blue */ /* 40 250 96 green*/

			  /* outline: 0;
			  outline: thin dotted \9;
			  IE6-9 */

			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 254px rgba(233, 234, 230, 1); /*14px*/
				 -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 254px rgba(233, 234, 230, 1);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 254px rgba(233, 234, 230, 1);
			}

			.headerFooter {
				width:100%;
				position:fixed;
				z-index: 100;
				height: 50px;
				
				/*background: url("/img/navSite.jpg") repeat scroll center bottom transparent;*/
				background-color:rgb(208,5,18);
				zoom: 1;
				filter: alpha(opacity=90);
				opacity: 0.9;
				-moz-box-shadow:    0px 0px 1px 2px #000; /* ccc */
				-webkit-box-shadow: 0px 0px 1px 2px #000;
				box-shadow:         0px 0px 1px 2px #000;	
			}

			#nav2 {
				width:1300px;
				margin: 0 auto;
			}

			#leftNav {
				float:left;
				width: 1000px;
			}

			#rightNav {
				float:right;
				width: 300px;
				padding-top:2px;
			}

			#logoTornado {
				width:181px;
				float:left;
			}

			#tornadoNew {
				height:135px;
			}

			#pageLinks {
				float:right;
				width:720px; /*640px;*/
				
				font-size:25px;
				padding-top:5px;
				text-transform:uppercase;
			}

			#pageLinks ul {
				margin: 0px;
				padding: 0px;
			}

			#pageLinks ul li {
				display: inline; 
				margin-right: 10px;
			}
			
			.fb-like-button {
				position: relative;
				left: 145px;
				top: -49px;
			}
			
			.twitter-follow-button {
				position: relative;
				top: -49px;
				left: 120px;
				vertical-align: middle;
			}

			/* Media Queries */

			/* Smartphones (portrait and landscape) ----------- */
			@media only screen 
			and (min-device-width : 320px) 
			and (max-device-width : 480px) {
				#pageLinks {
					width:785px;
				}
			}

			/* iPads (portrait and landscape) ----------- */
			@media only screen 
			and (min-device-width : 768px) 
			and (max-device-width : 1024px) {
				
			}

		</style>

	</head>

	<body>

		<!-- header / nav -->
		<div class="headerFooter">
			<div id="nav2">
				
				<div id="leftNav">
					<div id="logoTornado">
						<a href="http://www.gallerycircus.co.uk"><img id="tornadoNew" src="/img/GCLogoWhite.png"></a>
					</div>
					<div id="pageLinks">
						<ul>
							<li class="linkElement"><a id="linkVideos" href="#HollywoodDrip" class="shakeable">Hollywood Drip</a></li>
							<li class="linkElement"><a id="linkPlay" href="#TrackTheStorm" class="shakeable">play</a></li>
							<li class="linkElement"><a id="linkShows" href="#shows" class="shakeable">shows</a></li>
							<li class="linkElement"><a id="linkWatch" href="#glastonbury" class="shakeable">Watch</a></li>
							<li class="linkElement"><a id="linkContact" href="#Contact" class="shakeable">contact</a></li>
						</ul>
					</div>
				</div>
				
				<div id="rightNav">
					<div id="socialTab">
						<a class="socialLink" alt="Gallery Circus on Facebook" target="_blank" href="http://www.facebook.com/gallerycircus"><img class="socialIcon shakeable" src="/img/Facebook.png"></a>
						<a class="socialLink" alt="Gallery Circus on Twitter" target="_blank" href="http://www.twitter.com/gallerycircus"><img class="socialIcon shakeable" src="/img/Twitter.png"></a>
						
						<div class="fb-like-button"><div class="fb-like" data-href="https://www.facebook.com/gallerycircus" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></div>
						<a href="https://twitter.com/gallerycircus" class="twitter-follow-button" data-show-count="false">Follow @gallerycircus</a>
						
						<!--<a class="socialLink" alt="Gallery Circus on YouTube" target="_blank" href="http://www.youtube.com/gallerycircusvideos"><img class="socialIcon shakeable" src="/img/Youtube.png"></a>
						<a class="socialLink" alt="Gallery Circus on Tumblr" target="_blank" href="http://sanfrancircus.tumblr.com"><img class="socialIcon shakeable" src="/img/Tumblr.png"></a>-->
					</div>
				</div>
				
			</div>
		</div>
		<!-- end header / nav -->
	
		
		<div id="HollywoodDrip" class="wrapper">
		
			<div style="display:none;">
				<video id="source-vid" autobuffer preload="auto"> <!--loop (add this attr to make it loops)-->
					<!--<source src="videos/Sequence02.mp4" type="video/mp4">
					<source src="videos/Sequence_02.ogv" type="video/ogg">-->
					<source src="/supercell/videos/videoGame.mp4" type="video/mp4"> <!-- codecs=avc1.42E01E,mp4a.40.2" (this was messing up IE)-->
					<source src="/supercell/videos/videoGame.ogv" type="video/mp4">
				</video>
			</div>

			<div id="hollywoodVideo" class="videoEmbed">
				<iframe width="1280" height="720" src="http://www.youtube.com/embed/mSQMpqb-zTA?wmode=transparent" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<div id="supercellVideo" class="videoEmbed">
				<iframe width="1280" height="720" src="http://www.youtube.com/embed/mTdQ99G1n8A?wmode=transparent" frameborder="0" allowfullscreen></iframe>
			</div>

			<div id="main">
			
				<!-- video -->
				<div id="shows" class="media polaroidFade blur">
					<!--<video id="supercellCover" loop="" autoplay="" width="654" height="480" muted=""> 
						<source type="video/mp4" src="/videos/bgSuperCell.mp4"> 
						<source type="video/ogv" src="/videos/bgSuperCell.ogv"> 
					</video>-->
					<img src="img/ArcaneTourPosterGCWebsite.png" style="width: 654px; height: 480px;" />
					
					<!--<table>
						<tbody>
							<tr><td>Sat 19 Apr</td><td>Stockton Calling</td></tr>							
							<tr><td>Fri 02 May</td><td>Sound City</td></tr>
							<tr><td>Sat 03 May</td><td>Live At Leeds</td></tr>
							<tr><td>Sun 04 May</td><td>Stockton Sunday Live</td></tr>						
							<tr><td>Thu 08 May</td><td>The Cluny (Young Rebel Set)</td></tr>
							<tr><td>Fri 09 May</td><td>The Great Escape</td></tr>
							<tr><td>Sat 10 May</td><td>The Great Escape</td></tr>
							<tr><td>Tue 13 May</td><td>Huw Stephens Showcase</td></tr>
							<tr><td>Wed 14 May</td><td>Ace Hotel, Shoreditch</td></tr>
							<tr><td>Fri 23 May</td><td>Dot to Dot, Manchester</td></tr>
							<tr><td>Sat 24 May</td><td>Evo Emerging / Dot to Dot, Bristol</td></tr>
							<tr><td>Sun 25 May</td><td>Dot to Dot, Nottingham</td></tr>
							<tr><td>Thu 05 Jun</td><td>Oslo, Hackney</td></tr>
							<tr><td>Fri 20 Jun</td><td>Willow Man</td></tr>
							<tr><td>Sat 21 Jun</td><td>Amphitheatre, South Shields</td></tr>
							<tr><td>Sun 29 Jun</td><td>Glastonbury Festival</td></tr>
							<tr><td>Sat 26 Jul</td><td>Stockton Weekender</td></tr>						
							<tr><td>Fri 01 Aug</td><td>Think Tank, Newcastle</td></tr>
							<tr><td>Sat 02 Aug</td><td>Kendal Calling</td></tr>
							<tr><td>Sat 09 Aug</td><td>Split Festival</td></tr>	
							<tr><td>Thu 14 Aug</td><td>The Menagerie, Belfast</td></tr>
							<tr><td>Wed 20 Aug</td><td>The 100 Club, London</td></tr>
							<tr><td>Sun 24 Aug</td><td>Independent, Sunderland</td></tr>
							<tr><td>Fri 17 Oct</td><td>Think Tank, Newcastle</td></tr>
							<tr><td>Mon 20 Oct</td><td>Boston Music Room, London</td></tr>							
							<tr><td>Tue 21 Oct</td><td>Slade Rooms, Wolverhampton</td></tr>
							<tr><td>Wed 22 Oct</td><td>Leadmill, Sheffield</td></tr>
							<tr><td>Thu 23 Oct</td><td>Liquid Rooms, Edinburgh</td></tr>
							<tr><td>Fri 24 Oct</td><td>Uni Stylus, Leeds</td></tr>
							<tr><td>Sat 25 Oct</td><td>Empire, Middlesbrough</td></tr>
							<tr><td>Mon 27 Oct</td><td>53 Degrees, Preston</td></tr>
							<tr><td>Tue 28 Oct</td><td>02 Academy, Liverpool</td></tr>
							<tr><td>Wed 29 Oct</td><td>Sugarmill, Stoke</td></tr>
							<tr><td>Thu 30 Oct</td><td>Waterfront, Norwich</td></tr>
							<tr><td>Fri 31 Oct</td><td>Concorde 2, Brighton</td></tr>					
							<tr><td>Sat 01 Nov</td><td>Key Club, Leeds</td></tr>
							<tr><td>Sun 02 Nov</td><td>Glasgow, King Tuts</td></tr>
							<tr><td>Mon 03 Nov</td><td>London, Oslo</td></tr>
							<tr><td>Tue 04 Nov</td><td>Komedia, Bath</td></tr>
							<tr><td>Wed 05 Nov</td><td>02 Academy, Birmingham</td></tr>
							<tr><td>Thu 06 Nov</td><td>The Ruby Lounge, Manchester</td></tr>
							<tr><td>Sat 08 Nov</td><td>Open, Norwich</td></tr>
							<tr><td>Sun 01 Feb</td><td>Forum, Tunbridge Wells</td></tr>
							<tr><td>Mon 02 Feb</td><td>Waterfront, Norwich</td></tr>
							<tr><td>Tue 03 Feb</td><td>Arts Centre, Colchester</td></tr>
							<tr><td>Wed 04 Feb</td><td>Academy, Oxford</td></tr>
							<tr><td>Thu 05 Feb</td><td>Sub 89, Reading</td></tr>
							<tr><td>Fri 06 Feb</td><td>Library, Birmingham</td></tr>
							<tr><td>Sat 07 Feb</td><td>Sugarmill, Stoke</td></tr>
							<tr><td>Sun 08 Feb</td><td>Rescue Rooms, Nottingham</td></tr>
							<tr><td>Mon 09 Feb</td><td>Portland Arms, Cambridge</td></tr>
							<tr><td>Tue 10 Feb</td><td>Duchess, York</td></tr>
							<tr><td>Wed 11 Feb</td><td>Live Rooms, Chester</td></tr>
							<tr><td>Thu 12 Feb</td><td>Wardrobe, Leeds</td></tr>
							<tr><td>Fri 13 Feb</td><td>Trades Club, Hebden Bridge</td></tr>
							<tr><td>Sat 14 Feb</td><td>Manchester, Gorilla</td></tr>
							<tr><td>Thu 19 Feb</td><td>Riverside, Newcastle</td></tr>
							<tr><td>Fri 20 Feb</td><td>Limelight 2, Belfast</td></tr>
							<tr><td>Sat 21 Feb</td><td>Academy, Dublin</td></tr>
							<tr><td>Sat 28 Feb</td><td>Forum, London</td></tr>
							
							<tr><td>Wed 04 Mar</td><td>La Gaîté Lyrique, Paris, France</td></tr>
							<tr><td>Thu 06 Mar</td><td>Paloma, Nîmes, France</td></tr>
							<tr><td>Sat 07 Mar</td><td>Le Fil, Saint-Étienne, France</td></tr>
							<tr><td>Mon 09 Mar</td><td>Stereolux, Nantes, France</td></tr>
							<tr><td>Tue 10 Mar</td><td>Le Cargo, Caen, France</td></tr>
							<tr><td>Wed 11 Mar</td><td>La Cartonnerie Cabaret, Reims, France</td></tr>							
							<tr><td>Fri 13 Mar</td><td>Frannz Club, Berlin, Germany</td></tr>
							<tr><td>Sat 14 Mar</td><td>Molotow, Hamburg, Germany</td></tr>
							<tr><td>Mon 16 Mar</td><td>Underground, Cologne, Germany</td></tr>
							<tr><td>Tue 17 Mar</td><td>Botanique - Orangerie, Brussels, Belgium</td></tr>
							<tr><td>Fri 20 Mar</td><td>Den Atelier, Luxembourg, Luxembourg</td></tr>
							<tr><td>Fri 24 Apr</td><td>Corporation, Sheffield</td></tr>
							<tr><td>Sat 25 Apr</td><td>The Mash House, Edinburgh</td></tr>
							<tr><td>Sun 26 Apr</td><td>Crauford Arms, Milton Keynes</td></tr>
							<tr><td>Tue 28 Apr</td><td>Sticky Mikes, Brighton</td></tr>
							<tr><td>Wed 29 Apr</td><td>Portland Arms, Cambridge</td></tr>
							<tr><td>Thu 30 Apr</td><td>Colchester Arts Centre, Colchester</td></tr>	
							
							<tr><td>Fri 01 May</td><td>The Institute, Birmingham</td></tr>
							<tr><td>Sun 03 May</td><td>Fibbers, York</td></tr>
							<tr><td>Tue 05 May</td><td>East Village Arts Centre, Liverpool</td></tr>
							<tr><td>Thu 07 May</td><td>02 Academy, Oxford</td></tr>
							<tr><td>Fri 08 May</td><td>Bodega, Nottingham</td></tr>
							<tr><td>Sat 09 May</td><td>The Deaf Institute, Manchester</td></tr>
							<tr><td>Sun 10 May</td><td>Think Tank?, Newcastle</td></tr>
							<tr><td>Tue 12 May</td><td>King Tuts, Glasgow</td></tr>
							<tr><td>Wed 13 May</td><td>The Live Rooms, Chester</td></tr>
							<tr><td>Thu 14 May</td><td>Exchange, Bristol</td></tr>
							<tr><td>Fri 15 May</td><td>Forum, Tumbridge Wells</td></tr>
							<tr><td>Sun 17 May</td><td>Waterfront, Norwich</td></tr>
							<tr><td>Tue 19 May</td><td>Cavern Club, Exeter</td></tr>
							<tr><td>Wed 20 May</td><td>Sub 89, Reading</td></tr>
							<tr><td>Thu 21 May</td><td>The Boiler Room, Guildford</td></tr>
							<tr><td>Fri 22 May</td><td>Oslo, London</td></tr>
							<tr><td>Sat 23 May</td><td>Oslo, London</td></tr>
							
						</tbody>
					</table>-->
					
					<div style="margin: 0 auto; width: 220px; padding-top:8px; font-size: 20px;">
						<a href="http://www.songkick.com/artists/5405348-gallery-circus" class="shakeable" target="_blank">Buy your tickets here!</a>
					</div>
					<div style="margin: 0 auto; width: 410px; padding-top:8px; font-size: 20px;">
						<a href="http://www.amazon.co.uk/s/ref=ntt_srch_drd_B005WRXK3U?ie=UTF8&field-keywords=Gallery%20Circus&index=digital-music&search-type=ss" class="shakeable" target="_blank">Amazon</a>&nbsp;|
						<a href="http://gallerycircus.bandcamp.com/" class="shakeable" target="_blank">Bandcamp</a>&nbsp;|
						<a class="shakeable" target="_blank" href="http://www.soundcloud.com/gallerycircus">SoundCloud</a>&nbsp;|
						<a class="shakeable" target="_blank" href="http://www.vimeo.com/gallerycircus">Vimeo</a>
					</div>
				</div>
				<!-- video -->
				
				<div style="clear:both; margin-bottom:85px;"></div>
				
				<div id="TrackTheStorm">
				
					<div style="position:relative;">
						<!-- game -->
						<div id="box" class="media polaroidFade"></div>
						<!-- game -->
						
						<div style="clear:both;"></div>
						
						<!-- song controls -->
						<div id="controls" style="float:right; width:640px; position:relative; right:15px; top:-70px;">
							<div id="gameGrid" style="float:left;">
								<a id="gameGridLink" shouldDissapearOnStop href="javascript:">HARDER?</a>
							</div>

							<div id="media" style="float:right; width:160px;">
								<a id="play" shouldDissapearOnStop href="javascript:" style="float:left; width:60px;">PLAY</a>
								<div id="time" style="float:left; width:60px;">00:00</div>
								<a id="stop" href="javascript:" style="float:left; width:40px;">STOP</a>
							</div>
							
							<div id="winnerMsg" style="float:right; margin-right:90px; display:none;">
								<label></label>
								<div style="margin-top:5px; text-align:center;"><a href='javascript:void'>Tweet your time</a></div>
							</div>
							
							
							<div style="clear:both;"></div>
							
							<div id="loader">
								<canvas id="percent" height="8" width="310"></canvas>
								<label id="percentIndicator"></label>
							</div>
							
							<div>Use Chrome for best results</div>
							
						</div>
						<!-- end song controls -->
						
						<div id="txtLine1" style="width:275px; height:50px;position:absolute; bottom:-3px; left:15px; text-align: center">Try putting the video back together</div>
						<div id="txtLine2" style="width:275px; height:50px;position:absolute; bottom:160px; left:330px; text-align: center">Drag a tile one space at a time - no diagonals!</div>
					</div>
					
					<div style="clear:both; margin-bottom:10px;"></div>
					
				</div>

				<!-- video glasto -->
				<div id="glastonbury">
					<div id="glastoOne" class="media polaroidFade glasto">
						<iframe width="600" height="500" src="//www.youtube.com/embed/2jywFlBU6yA?wmode=transparent" frameborder="0" allowfullscreen></iframe>

						<div style="margin: 0 auto; width: 462px; padding-top:12px; font-size: 20px; vertical-align:middle;">
							<a class="shakeable" target="_blank" href="http://www.bbc.co.uk/events/errnc8/acts/ahhfhn#p021vs1z">Hands Up For The Hipsters - Glastonbury 2014</a>
						</div>
					</div>

					<div id="glastoTwo" class="media polaroidFade glasto">
						<iframe width="600" height="500" src="//www.youtube.com/embed/bCPjqivy7Rg?wmode=transparent" frameborder="0" allowfullscreen></iframe>

						<div style="margin: 0 auto; width: 462px; padding-top:12px; font-size: 20px; vertical-align:middle;">
						   <a class="shakeable" target="_blank" href="http://www.bbc.co.uk/events/errnc8/acts/ahhfhn#p021vrnj">Don't Think This Through - Glastonbury 2014</a>
						</div>
					</div>
				</div>
                <!-- video glasto -->
				
				<!-- new -->
				<div id="polaroidsTop">
					<img id="polaroidsTopImg" src="/img/GCSite.png">
				</div>
				<div id="Contact">
					<img id="newContactImg" src="/img/contact.png">
				</div>
				<div id="polaroidsBottom">
					<img id="polaroidsBottomImg" src="/img/GCSite2.png">
				</div>	
				<!-- new -->
				
			</div>

		</div>
		
		<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		
		<!-- google analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-46145247-1', 'gallerycircus.co.uk');
			ga('send', 'pageview');
		</script>
		<!-- google analytics -->
		
		<!-- facebook SDK -->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=399120618695&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<!-- facebook SDK -->
		
		<!-- twitter SDK -->
		<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		</script>
		<!-- twitter SDK -->
		
		<script type="text/javascript">
			
			// store timing triggers (trigger num index -> second to fire, timeout)
			var timings = new Array();
			// Verse 1
			timings[0] = { fireTimeSecs:33, timeoutLengthMilli:3000, text:"little gun we're reckless dumb" }; 
			timings[1] = { fireTimeSecs:35, timeoutLengthMilli:4000, text:"we're your celebrated scum" }; 
			timings[2] = { fireTimeSecs:38, timeoutLengthMilli:4000, text:"I'm a tabloid indestructible" };
			timings[3] = { fireTimeSecs:41, timeoutLengthMilli:4000, text:"It's an enemy untouched" };
			timings[4] = { fireTimeSecs:44, timeoutLengthMilli:5000, text:"drink us up like a vampire" };
			timings[5] = { fireTimeSecs:48, timeoutLengthMilli:3000, text:"sweeter than your average liar" };
			timings[6] = { fireTimeSecs:50, timeoutLengthMilli:3000, text:"we're control" };
			timings[7] = { fireTimeSecs:52, timeoutLengthMilli:4000, text:"your no body, no body, no-one" };
			
			// Chorus 1
			timings[8]  = { fireTimeSecs:57, timeoutLengthMilli:2500, text:"kingdom override" }; 
			timings[9]  = { fireTimeSecs:59, timeoutLengthMilli:1500, text:"kids die young tonight" }; 
			timings[10] = { fireTimeSecs:60, timeoutLengthMilli:2500, text:"rose is calling" };
			timings[11] = { fireTimeSecs:63, timeoutLengthMilli:1500, text:"kingdom override" };
			timings[12] = { fireTimeSecs:64, timeoutLengthMilli:2500, text:"kids die young tonight" };
			timings[13] = { fireTimeSecs:66, timeoutLengthMilli:3500, text:"rose is calling" };
			timings[14] = { fireTimeSecs:69, timeoutLengthMilli:2500, text:"powered by kilowatts" };
			timings[15] = { fireTimeSecs:71, timeoutLengthMilli:3500, text:"we're electric numbers" };
			timings[16] = { fireTimeSecs:75, timeoutLengthMilli:2500, text:"we're coming for your neighborhoods" };
			timings[17] = { fireTimeSecs:77, timeoutLengthMilli:3500, text:"gonna come for the crown" };
			timings[18] = { fireTimeSecs:80, timeoutLengthMilli:3000, text:"for the crown" };
			
			// Verse 2
			timings[19] = { fireTimeSecs:99,  timeoutLengthMilli:3000, text:"little gun, we're feeling young" }; 
			timings[20] = { fireTimeSecs:101, timeoutLengthMilli:4000, text:"got a kick for killer fun" }; 
			timings[21] = { fireTimeSecs:104, timeoutLengthMilli:4000, text:"like a systematic hurricane" };
			timings[22] = { fireTimeSecs:107, timeoutLengthMilli:4000, text:"dropping cut throat tornadoes" };
			timings[23] = { fireTimeSecs:110, timeoutLengthMilli:4000, text:"go scream all of your followers" };
			timings[24] = { fireTimeSecs:113, timeoutLengthMilli:4000, text:"you never wanna do us wrong" };
			timings[25] = { fireTimeSecs:116, timeoutLengthMilli:2000, text:"we're your blood" };
			timings[26] = { fireTimeSecs:117, timeoutLengthMilli:4000, text:"your no body, no body, no-one" };
			
			// Chorus 2
			timings[27]  = { fireTimeSecs:123, timeoutLengthMilli:2500, text:"kingdom override" }; 
			timings[28]  = { fireTimeSecs:125, timeoutLengthMilli:1500, text:"kids die young tonight" }; 
			timings[29]  = { fireTimeSecs:126, timeoutLengthMilli:2500, text:"rose is calling" };
			timings[30]  = { fireTimeSecs:129, timeoutLengthMilli:1500, text:"kingdom override" };
			timings[31]  = { fireTimeSecs:130, timeoutLengthMilli:2500, text:"kids die young tonight" };
			timings[32]  = { fireTimeSecs:131, timeoutLengthMilli:3500, text:"rose is calling" };
			timings[33]  = { fireTimeSecs:135, timeoutLengthMilli:2500, text:"powered by kilowatts" };
			timings[34]  = { fireTimeSecs:137, timeoutLengthMilli:3500, text:"we're electric numbers" };
			timings[35]  = { fireTimeSecs:141, timeoutLengthMilli:2500, text:"we're coming for your neighborhoods" };
			timings[36]  = { fireTimeSecs:143, timeoutLengthMilli:3500, text:"gonna come for the crown" };
			timings[37]  = { fireTimeSecs:146, timeoutLengthMilli:3000, text:"for the crown" };
			
			// Bridge
			timings[38]  = { fireTimeSecs:171, timeoutLengthMilli:4000, text:"string up the terraces" }; 
			timings[39]  = { fireTimeSecs:174, timeoutLengthMilli:4000, text:"we're sending messages" }; 
			timings[40]  = { fireTimeSecs:177, timeoutLengthMilli:4000, text:"on paper cup telephones" };
			timings[41]  = { fireTimeSecs:180, timeoutLengthMilli:4000, text:"nailed under your nose" };
			timings[42]  = { fireTimeSecs:183, timeoutLengthMilli:4000, text:"pack up our soldiers skins" };
			timings[43]  = { fireTimeSecs:186, timeoutLengthMilli:3000, text:"hide them in wide-eyed grins" };
			timings[44]  = { fireTimeSecs:188, timeoutLengthMilli:4000, text:"calculate on everything" };
			timings[45]  = { fireTimeSecs:191, timeoutLengthMilli:4000, text:"for country for kingdom" };
			
			// Chorus 3
			timings[46]  = { fireTimeSecs:194, timeoutLengthMilli:2500, text:"kingdom override" }; 
			timings[47]  = { fireTimeSecs:196, timeoutLengthMilli:1500, text:"kids die young tonight" }; 
			timings[48]  = { fireTimeSecs:197, timeoutLengthMilli:3500, text:"rose is calling" };
			timings[49]  = { fireTimeSecs:200, timeoutLengthMilli:2500, text:"kingdom override" };
			timings[50]  = { fireTimeSecs:202, timeoutLengthMilli:2500, text:"kids die young tonight" };
			timings[51]  = { fireTimeSecs:204, timeoutLengthMilli:2500, text:"rose is calling" };
			timings[52]  = { fireTimeSecs:206, timeoutLengthMilli:2500, text:"powered by kilowatts" };
			timings[53]  = { fireTimeSecs:208, timeoutLengthMilli:5000, text:"we're electric numbers" };
			timings[54]  = { fireTimeSecs:213, timeoutLengthMilli:2500, text:"we're coming for your neighborhoods" };
			timings[55]  = { fireTimeSecs:215, timeoutLengthMilli:3500, text:"gonna come for the crown" };
			timings[56]  = { fireTimeSecs:218, timeoutLengthMilli:3000, text:"for the crown" };
			
			// polaroid event locations
			var polaroid0 = "#";
			var polaroid0 = "#";

			// control locations
			var playControl = "#play";
			var stopControl = "#stop";
			var timeDisplay = "#time";

			// current trigger
			var currentTrigger = 0;
			
			// video vars 
			var ROWS = 3;
			var COLS = 3;
			var video = $("#source-vid")[0];
			var videoNaturalWidth = 654; //720
			var videoNaturalHeight = 480;
			var frameRate = 20;
			var stopAnimateInProgress = false;
			
			var failBorder = "#D11919";
			var successBorder = "#00BB3F";
			
			// slider game vars
			var startPosition = null;
			var currentDraggerID = null;
			var tileNaturalPositions = [];
			var tileRelativePositions = [];
			var colorArray = [];
			var isGameWon = false;
			var isGameStart = false;
			var totalPlayerMoves = 0;
			var totalPlayerScore = 0;
			var completedTime = 0;
			var accumTime = 0;
			var upper = 0;
			var lower = 0;
			var left = 0;
			var right = 0;
			var boundary = 0;
			
			$(document).ready(function() {
				// on chrome / safari always show pointer when dragging
			    document.onselectstart = function(e){ e.preventDefault(); return false; } 
				
				GalleryCircusMain();
				
				// exact dimensions of video for google chrome
				tiles(videoNaturalWidth, videoNaturalHeight, ROWS, COLS);
				update(video);

				SetUpMouseEventHandlers();
				
				$(".tileBorder").draggable('disable');
				
				slideToLink();

			});
			
			function slideToLink() {
				// foreach a link with slide
				$('a[href*=#]').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						slide($(this.hash));
					}
				}); 
			}
			
			function slide(hash) {
				// slide to div
				var $target = hash;
				$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
				if ($target.length) {
					var targetOffset = $target.offset().top;
					$('html,body').animate({scrollTop: targetOffset - 100}, 600);
					return false;
				}
			}
			
			function colorTile(context, tileW, tileH) {
				var idata = context.getImageData(0,0,tileW,tileH);
				var data = idata.data;
				for(var i = 0; i < data.length; i+=4) {
					var red = data[i];
					var gre = data[i+1];
					var blu = data[i+2];
					
					data[i] = red * 0.4; //1.9
					data[i+1] = gre * 1.8; //1.4
					data[i+2] = blu * 0.7; //0.6
				}
				idata.data = data; 
				context.putImageData(idata,0,0); 
			}
			
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			
			function updateColorArray(tileNum) {
				var ob = $('#box').find('div[tileNumber="'+tileNum+'"]');
				ob.css('opacity','0.8'); 
				ob.css({"-moz-box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)", "-webkit-box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)", "box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)"});
				colorArray.push(ob.attr('id'));
			}
			
			function getTileToMoveSingleCoord(tileToMovePreviousVal, senderPreviousVal, senderCurrentVal) {
				var value = 0;
				if (senderPreviousVal != senderCurrentVal) {
					if (senderPreviousVal < senderCurrentVal)
						value = tileToMovePreviousVal - ((senderPreviousVal*-1) - (senderCurrentVal*-1));
					else
						value = tileToMovePreviousVal + ((senderCurrentVal*-1) - (senderPreviousVal*-1));
				}
				else {
					value = tileToMovePreviousVal;
				}
				return value;
			}
			
			function updatePlayerMovesAndScore() {
				if (isGameWon)
					return;
				
				totalPlayerMoves++;
				//$('#playerMoves').text(totalPlayerMoves);
			}
			
			function isGameComplete() {
				if (isGameWon) // if game already won, lets not re calculate a score or alert user
					return;
				
				var isInOrder = true;
				var prevTileNum = -1;
				$('.tileBorder').each(function() {
					var tileNum = parseInt($(this).attr('tileNumber'));
					if (tileNum < prevTileNum) {
						isInOrder = false;
						return; // break
					}
					prevTileNum = tileNum
				});
					
				if (isInOrder) {
					isGameWon = true;
					$('#box').addClass('winner');
					totalPlayerScore = 0;
					
					// TODO take into account game level here
					var message = "";
					if (accumTime > 160)
						message = "What took you so long:";
					else if (accumTime > 90)
						message = "Not too bad:";
					else if (accumTime > 40)
						message = "Pretty good:";
					else if (accumTime > 20)
						message = "Daaaamn fast:"
					else 
						message = "Woooaaah:";
					$('#winnerMsg label').html(message + " " + completedTime);
					$('#winnerMsg').fadeIn(300);
				}
			}
			
			function calcTileBoundary() {
				// calc roughly half a tile height
				return tileNaturalPositions.length > 2 
					   ? Math.round(((((tileNaturalPositions[tileNaturalPositions.length-1].Top - tileNaturalPositions[0].Top) / (COLS - 1)) * COLS) / COLS) / 2)
					   : 30;
			}
			
			// this is the render func
			function update(video) {
				tiles(videoNaturalWidth, videoNaturalHeight, ROWS, COLS, video);
				setTimeout(function() { update(video) }, frameRate);
			}
			
			// shim layer with setTimeout fallback
			/*window.requestAnimFrame = (function(){
			  return  window.requestAnimationFrame       ||
					  window.webkitRequestAnimationFrame ||
					  window.mozRequestAnimationFrame    ||
					  function( callback ){
						window.setTimeout(callback, frameRate);
					  };
			})();
			
			(function animloop(){
			  requestAnimFrame(animloop);
			  tiles(videoNaturalWidth, videoNaturalHeight, ROWS, COLS, video);
			})();*/
			
			function tiles(w, h, r, c, source) {
				var tileW = Math.floor(w / c);
				var tileH = Math.floor(h / r);
			
				var tilesRendered = [];
				var tileNumber = 0;
				
				for(var ri = 0; ri < r; ri += 1) {
					for(var ci = 0; ci < c; ci += 1) {
						if (typeof source === 'undefined') { //if source is not specified, just build canvas object, otherwise draw inside them - render all tiles in correct order while video is undefined
							
							var randomNumber = getRandomInt(0, (ROWS * COLS) - 1);
							while ($.inArray(randomNumber, tilesRendered) !== -1) {
								randomNumber = getRandomInt(0, (ROWS * COLS) - 1);
							}
							tilesRendered.push(randomNumber);
							
							// build tile
							var sb  = '<div id="tileBorder_'+ tileNumber +'" class="tileBorder" tileNumber='+ tileNumber +' randomNumber=' + randomNumber + ' style="height:'+ tileH +'px; width:'+ tileW +'px;">';
								sb += 	'<canvas id="tile_'+ tileNumber +'" class="tile" tileNumber='+ tileNumber +' randomNumber=' + randomNumber + ' height="' + tileH + '" width="' + tileW + '"></canvas>';
								sb += '</div>';
							
							// add tile to page
							var tile = $(sb).get(0);
							$("#box").append(tile);
							
							// remember it's page position
							var pos = $('#tileBorder_'+tileNumber).position();
							var posObj = { Left: pos.left, Top: pos.top }
							tileNaturalPositions.push(posObj);
							
							// store its default natural position (0,0)
							var ppp = {left: 0, top: 0}
							tileRelativePositions.push(ppp);

							SetUpDragHandlers();
							
						} else {
							
							// get the tile's associated random coords (only if game has started)
							//ar location = parseInt($('#tile_' + tileNumber).attr('randomNumber'));
							//var rr = isGameStart ? Math.floor(location / COLS) : ri;
							//var cc = isGameStart ? location < (COLS - 1) ? location : location % COLS : ci;
		
							var rr = ri;
							var cc = ci;
							
							// determine whether this tile be coloured diff
							var foundCoords = false;
							for (var i = 0; i < colorArray.length; i++) {
								var cellId = colorArray[i];
								if (cellId == 'tileBorder_' + tileNumber)
									foundCoords = true;
							}
							
							// draw
							var getit = $('#tile_' + tileNumber).get(0);
							var context = getit.getContext('2d');
							context.drawImage(source, cc*tileW, rr*tileH, tileW, tileH, 0, 0, tileW, tileH);
							
							// colour tile if neccessary
							if (foundCoords) 
								colorTile(context, tileW, tileH);
						}
						tileNumber++;
					}
				}
			}
			
			function randmoizeTiles() {
				
				for (var i = tileNaturalPositions.length - 1; i >= 0; i--) {
					var currentTile = $("#tileBorder_"+i);
					var randNum = parseInt(currentTile.attr("randomNumber"));
					
					var valueLeft = 0;
					if (tileNaturalPositions[i].Left != tileNaturalPositions[randNum].Left) {
						if (tileNaturalPositions[i].Left < tileNaturalPositions[randNum].Left)
							valueLeft = tileNaturalPositions[randNum].Left - tileNaturalPositions[i].Left;
						else
							valueLeft = (tileNaturalPositions[i].Left - tileNaturalPositions[randNum].Left) *-1;
					}

					var valueTop = 0;
					if (tileNaturalPositions[i].Top != tileNaturalPositions[randNum].Top) {
						if (tileNaturalPositions[i].Top < tileNaturalPositions[randNum].Top)
							valueTop = tileNaturalPositions[randNum].Top - tileNaturalPositions[i].Top;
						else
							valueTop = (tileNaturalPositions[i].Top - tileNaturalPositions[randNum].Top) *-1;
					}
					
					currentTile.animate({left: valueLeft, top: valueTop }, 500);
					
					// update all array positions
					tileNaturalPositions[i] = { Left: currentTile.position().left, Top: currentTile.position().top };
					tileRelativePositions[i] = { left: valueLeft, top: valueTop };
				}

				for (var i = tileNaturalPositions.length - 1; i >= 0; i--) {
					var currentTile = $("#tileBorder_"+i);
					var currentTileInner = $("#tile_"+i);
					
					var randNum = parseInt(currentTile.attr("randomNumber"));
					
					currentTile.attr("tileNumber",randNum);
					currentTileInner.attr("tileNumber",randNum);
				}
				
			}
			
			var goBackArray = null;
			function deRandmoizeTiles() {
				goBackArray = [];
				RevertTiles();
				$('.tileBorder:not([z-index="auto"])').each(function() { // reset all z-indexs
					$(this).css('opacity','auto');
				});
			}
			
			function RevertTiles() {
				if (goBackArray.length == tileNaturalPositions.length)
					return;
				
				var randomNumber = getRandomInt(0, tileNaturalPositions.length - 1);
				while ($.inArray(randomNumber, goBackArray) !== -1) {
					randomNumber = getRandomInt(0, tileNaturalPositions.length - 1);
				}
				goBackArray.push(randomNumber);
				
				var currentTile = $('#box').find('div[tileNumber="'+randomNumber+'"]');
				
				var origanlNum = parseInt(currentTile.attr('id').split('_')[1]);
				var tileNumber = parseInt(currentTile.attr('tileNumber'));
				
				if (origanlNum != tileNumber) {
					$('#tileBorder_'+randomNumber).css('opacity', '1'); // reset the tile over this one (if there is one) to opaque
					
					currentTile.children().addClass('shadowYay');
					if ($.inArray(origanlNum, goBackArray) == -1) {
						currentTile.css('opacity', '0.5'); // if we're placing a tile over another one, make it transparent
					}
					currentTile.css({'z-index':'99'}).animate({left: 0, top: 0 }, 300);

					setTimeout(function() { 
						currentTile.css('z-index','1').children().removeClass('shadowYay'); // set to 1, not auto to prevent some current tiles appearing under instead of over others	
						
						RevertTiles();				
					}, 300);
				}
				else {
					RevertTiles();	
				}
			}
			
			
			function SetUpDragHandlers() {
				
				var CONSTRAINT = { NONE: 0, LEFT: 1, TOP: 2 };
				var axisDirectionEnum = CONSTRAINT.NONE;
				
				$(".tileBorder").draggable({
					snap: true,
					stack: "#box",
					containment: '#box', 
					
					start:function(a,ui){
					
						$(a.target).children().css('z-index','99').css('opacity','0.5').addClass('shadowFail');
						
						// get initial position of tileBorder
						startPosition = $(a.target).position();
						
						// get div id of selected (we will use this if our sender loses or changes focus during drag)
						currentDraggerID = parseInt($(a.target).attr("id").split('_')[1]);
						
						// show applicable divs (and add them colorArray)
						var tileNumber = parseInt($(a.target).attr('tileNumber'));
						upper = tileNumber - COLS;
						lower = tileNumber + COLS;
						left = tileNumber % COLS == 0 ? -1 : tileNumber - 1;
						right = tileNumber % COLS == COLS - 1 ? -1 : tileNumber + 1;
						boundary = (ROWS * COLS) -1;
						
						if (upper >= 0) 
						    updateColorArray(upper);
						
						if (lower <= boundary) 
							updateColorArray(lower);
						
						if (left != -1) 
							updateColorArray(left);
						
						if (right != -1) 
							updateColorArray(right);
					},
					
					drag: function(a,ui){
						
						// check whether our sender has lost scope
						var inFocus = (typeof $(a.target).attr("id") != 'undefined' && $(a.target).attr("id").indexOf("tileBorder_") != -1 && parseInt($(a.target).attr("id").split('_')[1]) == currentDraggerID);
						// find our tileBorder using sender, or currentDraggerID if the scope is lost
						var obj = inFocus ? $(a.target) : $("#tile_"+currentDraggerID);
						
						// x / y constraint
						var vvv = parseInt(obj.attr('id').split('_')[1]);
						var bounds = 10;
						var isWithinBounds = tileRelativePositions[vvv].left >= (ui.position.left - bounds) && tileRelativePositions[vvv].left <= (ui.position.left + bounds) 
											  && tileRelativePositions[vvv].top >= (ui.position.top - bounds) && tileRelativePositions[vvv].top <= (ui.position.top + bounds);
						
						if (isWithinBounds) {
							$(this).draggable('option','axis','x,y');
							axisDirectionEnum = CONSTRAINT.NONE;
						}
						else if (axisDirectionEnum != CONSTRAINT.TOP && tileRelativePositions[vvv].left != ui.position.left) {
							$(this).draggable('option','axis','x');
							axisDirectionEnum = CONSTRAINT.LEFT;
						}
						else if (axisDirectionEnum != CONSTRAINT.LEFT && tileRelativePositions[vvv].top != ui.position.top) {
							$(this).draggable('option','axis','y');
							axisDirectionEnum = CONSTRAINT.TOP;
						}

						// calc roughly half a tile height
						var boundary = calcTileBoundary();
						
						var changedColour = false;
						var currentPosition = obj.position();
						for (var i = 0; i < tileNaturalPositions.length; i++) {
							var pos = tileNaturalPositions[i];
							
							// create a boundary to check within
							var currentLeftLower = Math.round(pos.Left);
							if (right != -1 && parseInt($(a.target).attr("tileNumber")) + 1 == i) 
								currentLeftLower = Math.round(pos.Left) - boundary;	

							var currentLeftUpper = Math.round(pos.Left);								
							if (left != -1 && parseInt($(a.target).attr("tileNumber")) - 1 == i) 
								currentLeftUpper = Math.round(pos.Left) + boundary;
							
							var currentTopUpper = Math.round(pos.Top);							
							if (parseInt($(a.target).attr("tileNumber")) - COLS == i) 
								currentTopUpper = Math.round(pos.Top) + boundary;
							
							var currentTopLower = Math.round(pos.Top);
							if (parseInt($(a.target).attr("tileNumber")) + COLS == i) 
								currentTopLower = Math.round(pos.Top) - boundary;

							if (startPosition != currentPosition 
								&& Math.round(currentPosition.left) >= currentLeftLower && Math.round(currentPosition.left) <= currentLeftUpper
								&& Math.round(currentPosition.top) >= currentTopLower && Math.round(currentPosition.top) <= currentTopUpper
							   ) {
								var tm = parseInt(obj.attr('tileNumber'));
								// only change color if still in scope
								// when checking left / right - make sure, they're on the same row
								if (inFocus && ((right != -1 && i == tm + 1) || (left != -1 && i == tm - 1) || i == tm + COLS || i == tm - COLS)) {	
									obj.children().removeClass('shadowFail').addClass('shadowYay');//obj.children().css("border-color", successBorder);
									changedColour = true;
								}
							}
						}
							
						if (!changedColour) {
							if (inFocus)
								obj.children().removeClass('shadowYay').addClass('shadowFail');
							else 
								bj.children().removeClass('shadowYay').addClass('shadowFail');
						}
					},
					
					stop: function(a,ui){

						var inFocus = (typeof $(a.target).attr("id") != 'undefined' && $(a.target).attr("id").indexOf("tileBorder_") != -1 && parseInt($(a.target).attr("id").split('_')[1]) == currentDraggerID);
						if (inFocus) {
							$(a.target).children().css('z-index','auto').css('opacity','1').removeClass('shadowFail').removeClass('shadowYay');
						}
						else {
							$("#tileBorder_"+currentDraggerID).children().css('z-index','auto').css('opacity','1').removeClass('shadowFail').removeClass('shadowYay');
						}
						
						colorArray = []; // clear array (also reset opacities and shadow borders)
						$('.tileBorder:not([opacity="1"])').each(function() {
							$(this).css('opacity','1');
						});
						$('.tileBorder:not([box-shadow=""])').each(function() {
							$(this).css({"-moz-box-shadow": "", "-webkit-box-shadow": "", "box-shadow": ""});
						});
						
						var isSet = false;
						if (inFocus) {
							var currentPosition = $(a.target).position();

							for (var i = 0; i < tileNaturalPositions.length; i++) {
								var pos = tileNaturalPositions[i];
								
								// create a boundary to check within
								var boundary = calcTileBoundary();
							
								// create a boundary to check within
								var currentLeftLower = Math.round(pos.Left);
								if (right != -1 && parseInt($(a.target).attr("tileNumber")) + 1 == i) 
									currentLeftLower = Math.round(pos.Left) - boundary;	

								var currentLeftUpper = Math.round(pos.Left);								
								if (left != -1 && parseInt($(a.target).attr("tileNumber")) - 1 == i) 
									currentLeftUpper = Math.round(pos.Left) + boundary;
								
								var currentTopUpper = Math.round(pos.Top);							
								if (parseInt($(a.target).attr("tileNumber")) - COLS == i) 
									currentTopUpper = Math.round(pos.Top) + boundary;
								
								var currentTopLower = Math.round(pos.Top);
								if (parseInt($(a.target).attr("tileNumber")) + COLS == i) 
									currentTopLower = Math.round(pos.Top) - boundary;

								if (startPosition != currentPosition 
									&& Math.round(currentPosition.left) >= currentLeftLower && Math.round(currentPosition.left) <= currentLeftUpper
									&& Math.round(currentPosition.top) >= currentTopLower && Math.round(currentPosition.top) <= currentTopUpper
								   ) {

									var tm = tm = parseInt($(a.target).attr('tileNumber'));	
									// when checking left / right - make sure, they're on the same row
									if ((right != -1 && i == tm + 1) || (left != -1 && i == tm - 1) || i == tm + COLS || i == tm - COLS) {
										
										// calc correct resting position of dragged tile
										var vvv = parseInt($(a.target).attr('id').split('_')[1]);

										var valueLeft = tileRelativePositions[vvv].left;
										if (startPosition.left != pos.Left) 
											valueLeft = tileRelativePositions[vvv].left + ((startPosition.left*-1) - (pos.Left*-1));

										var valueTop = tileRelativePositions[vvv].top;
										if (startPosition.top != pos.Top) 
											valueTop = tileRelativePositions[vvv].top + ((startPosition.top*-1) - (pos.Top*-1));

										// move dragged tile to it's correct offset
										$(a.target).animate({left: valueLeft, top: valueTop }, 100);
										
										// update pos for animate
										var vals = parseInt($(a.target).attr('id').split('_')[1]);

										var previousPosition = tileRelativePositions[vals]; //current pos
										var ppp = {left: valueLeft, top: valueTop}; 
										tileRelativePositions[vals] = ppp; // update with new pos
										
										// update other tile pos 
										var vals2 = parseInt($('#box').find('div[tileNumber="'+i+'"]').attr('id').split('_')[1]);	
										
										var lll = getTileToMoveSingleCoord(tileRelativePositions[vals2].left, previousPosition.left, valueLeft);//ui.position.left);
										var ttt = getTileToMoveSingleCoord(tileRelativePositions[vals2].top, previousPosition.top, valueTop);//ui.position.top);
										var ppp2 = {left: lll, top: ttt}
										tileRelativePositions[vals2] = ppp2;
										
										$('#box').find('div[tileNumber="'+i+'"]').animate({ left: ppp2.left, top: ppp2.top }, 100);
										
										// update tile numbers
										var startIndex = $(a.target).attr('tileNumber');
										$('#box').find('div[tileNumber="'+i+'"]').attr('tileNumber', startIndex);
										$(a.target).attr('tileNumber', i);

										// increment number of total moves
										updatePlayerMovesAndScore();
										
										isSet = true;
										break;
									}
								}
							}
						}
						
						// if we didnt find a set, revert the tile
						if (!isSet) {
							var vals = inFocus ? parseInt($(a.target).attr('id').split('_')[1]) : currentDraggerID;
							var tmt = inFocus ? $(a.target) : $("#tile_" + currentDraggerID);
							var yyy = tileRelativePositions[vals];
							tmt.css('z-index','99').animate({ left: yyy.left, top: yyy.top }, 300);
							setTimeout(function() { tmt.css('z-index','auto') }, 500);
						}
						
						// if a tile was hilighted on mouse over, remove this after animation (otherwise we'll re highlight)
						// check if we've won
						setTimeout(function () {$('.tile:not([z-index="auto"])').each(function() {
							isGameComplete();
						}); }, 50);
					}
				}); 
			}
			
			function SetUpMouseEventHandlers() {
				$(document.body).on("mouseover", ".tile", function() {
					$(this).css('z-index','99').addClass('shadowFail');
				});
				
				$(document.body).on("mouseleave", ".tile", function() {
					$(this).css('z-index','auto').removeClass('shadowFail');
				});
				
				$(document.body).on("click", "#winnerMsg div a", function() {
					tweet();
				});
				
				$(document.body).on("mouseover", "#shows", function() {
					$(this).find("video").prop("muted", false);
				});
				
				$(document.body).on("mouseleave", "#shows", function() {
					$(this).find("video").prop("muted", true);
				});
				
			}

			function StopResetGame() {
				isGameStart = false;
				isGameWon = false;
				totalPlayerMoves = 0;
				totalPlayerScore = 0;
				
				// clear all arrays
				currentTrigger = 0;
				tileNaturalPositions = [];
				tileRelativePositions = [];
				
				// redraw tiles and calc new rando positions
				$("#box").html('');
				
				if ($("#box").hasClass('winner')) {
					$("#box").removeClass('winner');
				}
				
				if ($("#winnerMsg:visible")) {
					$("#winnerMsg").fadeOut(300);
					setTimeout(function() { $("#winnerMsg label").html("");}, 400);
				}
				
				tiles(videoNaturalWidth, videoNaturalHeight, ROWS, COLS);
				update(video);
				
				$(".tileBorder").draggable('disable');
			}
			
			function resetPolaroidText() {
				if (globalTimeout.length > 0) {
					for (var i = 0; i < globalTimeout.length; i++) {
						clearTimeout(globalTimeout[i]);
					}
					globalTimeout = [];
				}
									
				if ($("#txtLine1:visible")) { $("#txtLine1").fadeOut(300) };
				if ($("#txtLine2:visible")) { $("#txtLine2").fadeOut(300) };
				setTimeout(function() { $("#txtLine1").html("Try putting the video back together").fadeIn("slow"); }, 400);
				setTimeout(function() { $("#txtLine2").html("Drag a tile one space at a time - no diagonals!").fadeIn("slow"); }, 400);
			}
			
			
			function GalleryCircusMain() {
			
				// content has loaded
				video.addEventListener("canplay", function () {
					
				}, false);
				
				// content has loaded fully (no more buffering)
				video.addEventListener("canplaythrough", function () {
					
				}, false);
				
				// loading...
				//video.addEventListener("progress", updateProgressBar, false);
				
				var updateProgressBar = function(){
					if (video.readyState) {
						var buffered = video.buffered.end(0);
						var percent = Math.round(100 * buffered / video.duration);

						var canvas = $("#percent").get(0);
						var ctx = canvas.getContext('2d');
						var r = video.buffered;
						ctx.fillStyle = "white";
						ctx.fillRect(0,0,canvas.width,canvas.height);
						
						ctx.fillStyle = "grey";
						if (r) {
							for (var i=0; i<r.length; i++) {
								var start = r.start(i)/video.duration * canvas.width;
								var end = r.end(i)/video.duration * canvas.width;
								ctx.fillRect(start, 0, Math.max(2, end-start), canvas.height);
							} 
						}
						
						$("#percentIndicator").html(percent.toString()+"%");

						//If finished buffering buffering quit calling it
						if (buffered.toFixed(2) >= video.duration.toFixed(2)) {
							clearInterval(watchBuffer);
							$("#loader").animate({ opacity: 0 }, 500);
						}
					}
				};
				var watchBuffer = setInterval(updateProgressBar, 500);

				// loaded duration
				video.addEventListener("loadedmetadata", function () {
					
				}, false);
				
				// pause
				video.addEventListener("pause", function () {
				
				}, false);
				
				// playing
				video.addEventListener("playing", function () {
				
				}, false);
				
				// ended
				video.addEventListener("ended", function () {

				}, false);
				
				// reset
				video.addEventListener("emptied", function () {

				}, false);
			
				// time elapsed
				video.addEventListener("timeupdate", function () {
				
					var vTime = video.currentTime;
				
					accumTime = Math.floor(vTime);
				
					// render new time on page
					var minutes = Math.floor(vTime / 60);   
					var seconds = Math.floor(vTime % 60);
					var timeDis = (minutes < 10 ? "0"+minutes.toString() : minutes.toString()) + ":" + (seconds < 10 ? "0"+seconds.toString() : seconds.toString());
					$(timeDisplay).html(timeDis);
					
					completedTime = timeDis;
					
					if (currentTrigger < timings.length) {
						// if we're reached a new timing - trigger related event
						var fireTime = timings[currentTrigger].fireTimeSecs;
						var timeout = timings[currentTrigger].timeoutLengthMilli;
						var text = timings[currentTrigger].text;
						
						if (vTime >= fireTime) {
							fireTrigger(currentTrigger, timeout, text);
							currentTrigger++;
						}
					}
				
				}, false);
			
				// stop control click event
				$(stopControl).click(function() {
					
					if (!isGameStart)
						return;
					
					$(".tileBorder").draggable('disable');
					
					// vid control
					video.pause();

					if (isGameWon) {
						$(playControl).text('PLAY');
						video.currentTime = 0;
						StopResetGame();
					}
					else if (!stopAnimateInProgress) {
						stopAnimateInProgress = true;
						$("a[shouldDissapearOnStop]").animate({opacity:0}, 300)
						
						var howManyTilesAreNotInOrder = 0;
						$('.tileBorder').each(function() {
							if (parseInt($(this).attr("tileNumber")) != parseInt($(this).attr("id").split("_")[1]))
								howManyTilesAreNotInOrder++;
						});
						
						deRandmoizeTiles();

						// reset game play vars
						setTimeout(function () {
							$(playControl).text('PLAY');
							
							$("#box").fadeOut('fast');
							video.currentTime = 0;
							$("#box").fadeIn('fast');						
						
							StopResetGame();
							
							$("a[shouldDissapearOnStop]").animate({opacity:1}, 300)
							stopAnimateInProgress = false;
							
						}, (300 * howManyTilesAreNotInOrder) + 300);
					}
					
					resetPolaroidText();
				});

				// play control click event
				$(playControl).click(function() {
				
					if (!isGameStart) {
						randmoizeTiles();
						isGameStart = true;
						$("#txtLine1").fadeOut('fast');
						$("#txtLine2").fadeOut('fast');
					}
				
					if ($(this).text() == "PAUSE") {
						video.pause();
						$(this).text('PLAY');
						$(".tileBorder").draggable('disable');
					}
					else {
						$(this).text('PAUSE');
						video.play();
						$(".tileBorder").draggable('enable');
					}
				});
				
				// game mode control
				$("#gameGridLink").click(function() {
					
					if ($(this).text() == "HARDER?") {
						ROWS = 4; COLS = 4;
						$(this).text('EASIER?');
					}
					else {
						$(this).text('HARDER?');
						ROWS = 3; COLS = 3;
					}
					
					$("#box").fadeOut('fast');
					
					$(playControl).text('PLAY');
					
					// vid control
					video.pause();
					video.currentTime = 0;
			
					if (isGameStart) {
						resetPolaroidText();
					}
			
					StopResetGame();

					$("#box").fadeIn('fast');
				});
			}
			
			var globalTimeout = [];
			function fireTrigger(triggerNum, timeout, text) {
				var line1Or2 = triggerNum % 2 == 0 ? "txtLine1" : "txtLine2";
				$("#"+line1Or2).html(text);
				$("#"+line1Or2).fadeIn('fast');
				globalTimeout.push(setTimeout(function() { $("#"+line1Or2).fadeOut('fast'); }, timeout));
			}
			
			function tweet() {
				var tweet_url = 'https://twitter.com/intent/tweet?related=gallerycircus&text=';
				tweet_url += encodeURIComponent("I tracked the storm in " + completedTime + " seconds! #gallerycircus #supercell");
				tweet_url += '&url=' + window.location.href;
				window.open(tweet_url,'_blank');
			} 
			
		</script>
		
	</body>
</html>