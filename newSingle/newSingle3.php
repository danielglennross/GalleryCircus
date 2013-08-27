<?php
//start of file - Gallery Circus  - copyright 2013
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Gallery Circus</title>
	
		<style>
		
			html {
				height: 100%;
			}

			body {
				height:100%;
				margin:0px;
				padding:0px;
				list-style:none;
				
				
				background: url("/newSingle/img/testBG.png") no-repeat scroll; 
				/*-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;*/
				
				
				/*background: url("/img/websiteBGTile.png") repeat scroll center bottom transparent;
				-moz-box-shadow: inset 0 0 50px #000000;
				-webkit-box-shadow: inset 0 0 50px #000000;
				box-shadow: inset 0 0 50px #000000;*/
			}
				
			#box{
				width:654px; /*720*/
				height:500px;
				
				margin:0px auto;
				position:relative;
				
				float:left;
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
				background: #eee6d8; /fallback colour for browsers that don't support gradients/
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

			.wrapper {
				min-height: 100%;
				height: auto !important;
				height: 100%;
				margin: 0 auto -4em;
			}
			
			
			
			#main {
				margin:auto; 
				width:1354px; /*1274*/
				padding-top:35px;
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
				position:relative
			}
			
			#percent {
				loat:left; 
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
			
		</style>

	</head>

	<body>
		
		<div class="wrapper">
		
			<div style="display:none;">
				<video id="source-vid" autobuffer preload="auto"> <!--loop (add this attr to make it loops)-->
					<!--<source src="videos/Sequence02.mp4" type="video/mp4">
					<source src="videos/Sequence_02.ogv" type="video/ogg">-->
					<source src="videos/vid.mp4" type="video/mp4">
					<source src="videos/vid.ogv" type="video/ogg">
				</video>
			</div>

			
			<div id="main">
				<div id="sideBoxLeft" class="sideBoxes" style="">
					<div number="0" class="poppingLeft popping"><img src=""/></div>
					<div number="1" class="poppingLeft popping"><img src=""/></div>
					<div number="2" class="poppingLeft popping"><img src=""/></div>
				</div>
				
				<div id="box" class="media polaroidFade"></div>

				<div id="sideBoxRight" class="sideBoxes" style="float:left; width:300px; height:500px">
					<div number="0" class="poppingRight popping"><img src=""/></div>
					<div number="1" class="poppingRight popping"><img src=""/></div>
					<div number="2" class="poppingRight popping"><img src=""/></div>
				</div>
				
				<div style="clear:both;"></div>
				
				<!-- song controls -->
				<div id="controls" style="float:left; width:640px; position:relative; left:354px; top:-70px;">
					<div id="gameGrid" style="float:left;">
						<a id="gameGridLink" href="javascript:">EASIER?</a>
					</div>

					<div id="media" style="float:right; width:150px;">
						<a id="play" href="javascript:" style="float:left; width:60px;">PLAY</a>
						<div id="time" style="float:left; width:50px;">00:00</div>
						<a id="stop" href="javascript:" style="float:left; width:40px;">STOP</a>
					</div>
					
					<div style="clear:both;"></div>
					
					<div id="loader">
						<canvas id="percent" height="8" width="310"></canvas>
						<label id="percentIndicator"><label>
					</div>
					
				</div>
				<!-- end song controls -->
			</div>

		</div>

		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
		<!--<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>-->
		<script src="jquery.jplayer.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			
			// store timing triggers (trigger num index -> second to fire, timeout)
			var imageBuffer = 0; //1000
			var timings = new Array();
			// Verse 1
			timings[0] = { fireTimeSecs:26.2 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/littlegunrecklessdumb.png" };
			timings[1] = { fireTimeSecs:29 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/wereyourcelebratedscum.png" };
			timings[2] = { fireTimeSecs:32 - imageBuffer, timeoutLengthMilli:3200, sourceImage:"/newSingle/img/futuretabloidindestructibles.png" };
			timings[3] = { fireTimeSecs:35.2 - imageBuffer, timeoutLengthMilli:2800, sourceImage:"/newSingle/img/itsanenemyuntouched.png" };
			timings[4] = { fireTimeSecs:38 - imageBuffer, timeoutLengthMilli:3300, sourceImage:"/newSingle/img/drinkusuplikeavampire.png" };
			timings[5] = { fireTimeSecs:41.3 - imageBuffer, timeoutLengthMilli:3500, sourceImage:"/newSingle/img/sweeterthanyouraverageliar.png" };
			timings[6] = { fireTimeSecs:44 - imageBuffer, timeoutLengthMilli:5500, sourceImage:"/newSingle/img/werecontrolyournobodynoone.png" };
			// Chorus 1
			timings[7] = { fireTimeSecs:51 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/kingdomoverridekidsdieyoungtonight.png" };
			timings[8] = { fireTimeSecs:54 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/roseisthawning.png" };
			timings[9] = { fireTimeSecs:57 - imageBuffer, timeoutLengthMilli:3000 , sourceImage:"/newSingle/img/kingdomoverridekidsdieyoungtonight2.png" };
			timings[10] = { fireTimeSecs:60 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/roseisthawning2.png" };
			timings[11] = { fireTimeSecs:63 - imageBuffer, timeoutLengthMilli:6000, sourceImage:"/newSingle/img/poweredbykilowattswereelctricnumbers.png" };
			timings[12] = { fireTimeSecs:69 - imageBuffer, timeoutLengthMilli:2500, sourceImage:"/newSingle/img/werecomingforyourneighborhoods.png" };
			timings[13] = { fireTimeSecs:71 - imageBuffer, timeoutLengthMilli:4500, sourceImage:"/newSingle/img/goingtocomeforthecrown.png" };
			// Verse 2
			timings[14] = { fireTimeSecs:92.2 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/littlegunrecklessdumb2.png" };
			timings[15] = { fireTimeSecs:95 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/gotakickforkillerfun.png" };
			timings[16] = { fireTimeSecs:98 - imageBuffer, timeoutLengthMilli:3200, sourceImage:"/newSingle/img/likeasystematichurricane.png" };
			timings[17] = { fireTimeSecs:101.2 - imageBuffer, timeoutLengthMilli:3000, sourceImage:"/newSingle/img/droppingcutthroattornadoes.png" };

			// store related methods
			//var timingHandler = {
			//	0: polaroidHandler0,
			//	1: polaroidHandler1,
			//}

			// polaroid event locations
			var polaroid0 = "#";
			var polaroid0 = "#";

			// control locations
			var jplayerContainer = "#jPlayer";
			var playControl = "#play";
			var stopControl = "#stop";
			var timeDisplay = "#time";

			var songMP3 = "song.mp3";
			var songOGG = "song.ogg";
			var path = "./newSingle/";

			// current trigger
			var currentTrigger = 0;
			
			// video vars 
			var ROWS = 4;
			var COLS = 4;
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
			});
			
			function colorTile(context, tileW, tileH) {
				var idata = context.getImageData(0,0,tileW,tileH);
				var data = idata.data;
				for(var i = 0; i < data.length; i+=4) {
					var red = data[i];
					var gre = data[i+1];
					var blu = data[i+2];
					
					data[i] = red * 1.9;
					data[i+1] = gre * 1.4;
					data[i+2] = blu * 0.6;
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
					alert("game won");
					isGameWon = true;
					
					totalPlayerScore = 0;
					//$('#playerScore').text(totalPlayerScore);
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
					
					if ($.inArray(origanlNum, goBackArray) == -1) {
						currentTile.css('opacity', '0.5'); // if we're placing a tile over another one, make it transparent
					}
					currentTile.css({'z-index':'99'}).animate({left: 0, top: 0 }, 300);

					setTimeout(function() { 
						currentTile.css('z-index','1'); // set to 1, not auto to prevent some current tiles appearing under instead of over others	
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
					
						$(a.target).children().css('z-index','99').css('opacity','0.5').css({"border-color": failBorder, "border-width":"2px", "border-style":"solid"});
						$(a.target).css({"-moz-box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)", "-webkit-box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)", "box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)"});
						
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
									obj.children().css("border-color", successBorder);
									changedColour = true;
								}
							}
						}
							
						if (!changedColour) {
							if (inFocus)
								obj.children().css("border-color", failBorder);
							else 
								obj.children().css({"border-color": failBorder, "border-width":"2px", "border-style":"solid"});
						}
					},
					
					stop: function(a,ui){

						var inFocus = (typeof $(a.target).attr("id") != 'undefined' && $(a.target).attr("id").indexOf("tileBorder_") != -1 && parseInt($(a.target).attr("id").split('_')[1]) == currentDraggerID);
						if (inFocus) {
							$(a.target).children().css('z-index','auto').css('opacity','1').css('border', 'none');
							$(a.target).css({"-moz-box-shadow": "", "-webkit-box-shadow": "", "box-shadow": ""});
						}
						else {
							$("#tileBorder_"+currentDraggerID).children().css('z-index','auto').css('opacity','1').css('border', 'none');
							$("#tileBorder_"+currentDraggerID).css({"-moz-box-shadow": "", "-webkit-box-shadow": "", "box-shadow": ""});
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
										var ppp = {left: valueLeft, top: valueTop}; //{left: ui.position.left, top: ui.position.top};
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
							$(this).css('z-index','auto').css('border','none');
							isGameComplete();
						}); }, 50);
					}
				}); 
			}
			
			function SetUpMouseEventHandlers() {
				
				$(document.body).on("mouseover", ".tile", function() {
					//if (!isGameStart) return;
					$(this).css('z-index','99').css({"border-color": failBorder, "border-width":"2px", "border-style":"solid"});
					$(this).parent().css({"-moz-box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)", "-webkit-box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)", "box-shadow": "-3px 2px 1px 0px rgba(0,0,0,0.5)"});
				});
				
				$(document.body).on("mouseleave", ".tile", function() {
					//if (!isGameStart) return;
					$(this).css('z-index','auto').css("border","none");
					$(this).parent().css({"-moz-box-shadow": "", "-webkit-box-shadow": "", "box-shadow": ""});
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
				tiles(videoNaturalWidth, videoNaturalHeight, ROWS, COLS);
				update(video);
				
				$(".tileBorder").draggable('disable');
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
						if (buffered >= video.duration) {
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
				
					// render new time on page
					var minutes = Math.floor(vTime / 60);   
					var seconds = Math.floor(vTime);
					var timeDis = (minutes < 10 ? "0"+minutes.toString() : minutes.toString()) + ":" + (seconds < 10 ? "0"+seconds.toString() : seconds.toString());
					$(timeDisplay).html(timeDis);
					
					if (currentTrigger < timings.length) {
						// if we're reached a new timing - trigger related event
						var fireTime = timings[currentTrigger].fireTimeSecs;
						var timeout = timings[currentTrigger].timeoutLengthMilli;
						var image = timings[currentTrigger].sourceImage;
						
						if (vTime >= fireTime) {
							fireTrigger(currentTrigger, timeout, image);
							currentTrigger++;
						}
					}
				
				}, false);
			
				// stop control click event
				$(stopControl).click(function() {
					
					if (!isGameStart)
						return;
					
					// clean up
					$(playControl).text('PLAY');
					
					// vid control
					video.pause();

					if (isGameWon) {
						video.currentTime = 0;
						StopResetGame();
					}
					else if (!stopAnimateInProgress) {
						stopAnimateInProgress = true;
						
						var howManyTilesAreNotInOrder = 0;
						$('.tileBorder').each(function() {
							if (parseInt($(this).attr("tileNumber")) != parseInt($(this).attr("id").split("_")[1]))
								howManyTilesAreNotInOrder++;
						});
						
						deRandmoizeTiles();

						// reset game play vars
						setTimeout(function () {
							$("#box").fadeOut('fast');
							video.currentTime = 0;
							$("#box").fadeIn('fast');						
						
							StopResetGame();
							
							stopAnimateInProgress = false;
							
						}, (300 * howManyTilesAreNotInOrder) + 300);
					}
				});

				// play control click event
				$(playControl).click(function() {
				
					if (!isGameStart) {
						randmoizeTiles();
						isGameStart = true;
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
		
					StopResetGame();

					$("#box").fadeIn('fast');
				});
			}
			
			var previousImageLocation = -1;
			var poppingPolaroidsCount = 3;
			function fireTrigger(triggerNum, timeout, image) {
				var randomNumber = getRandomInt(0, poppingPolaroidsCount - 1);
				while (previousImageLocation == randomNumber) {
						randomNumber = getRandomInt(0, poppingPolaroidsCount - 1);
				}
				
				var leftOrRight = triggerNum % 2 == 0 ? "poppingLeft" : "poppingRight";
				var imageObj = $("."+leftOrRight+"[number="+randomNumber+"] img");

				imageObj.attr("src",image);
				
				var deg = getRandomInt(1, 12);
				var posOrNeg = deg % 2 == 0 ? "+" : "-";
				var degString = posOrNeg.toString() + deg.toString() + "deg";
				imageObj.css({
					"-webkit-transform": "rotate("+degString+")",
					"-moz-transform": "rotate("+degString+")",
					"-o-transform": "rotate("+degString+")",
					"-ms-transform": "rotate("+degString+")"
				});
				
				//imageObj.load(function() {
				//	imageObj.animate({ opacity: 1 }, 500);
				//	setTimeout(function() { imageObj.animate({ opacity: 0 }, 500); }, timeout);
				//});
				
				setTimeout(function() { imageObj.animate({ opacity: 1 }, 500); }, imageBuffer); // leave 1 second to load image
				setTimeout(function() { imageObj.animate({ opacity: 0 }, 500); }, timeout);

				previousImageLocation = randomNumber;
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			/*** 

			function GalleryCircusMain() {
				
				// render jplayer
				$(jplayerContainer).jPlayer( {
					ready: function () {
					$(this).jPlayer("setMedia", {
						mp3: songMP3, 
						oga: songOGG
						});//.jPlayer("play"); -- no auto play
					},
					volume: 0.9,
					supplied: "mp3, oga",
					swfPath: path
				}); 
						
				// bind page controls and jPlayer events
				bindPageControls();
				bindJPlayerEvents();
			}

			function bindPageControls() {
				// stop control click event
				$(stopControl).click(function() {
					$(jplayerContainer).jPlayer('stop');
					$(playControl).text('PLAY');
					currentTrigger = 0;
					clearVids();
				});

				// play control click event
				$(playControl).click(function() {
					if ($(playControl).text() == "PAUSE") {
						$(jplayerContainer).jPlayer('pause');
					}
					else {
						$(jplayerContainer).jPlayer('play');
					}
				});
			}

			function bindJPlayerEvents() {
				
				// load (called on page load) TODO disable button
				$(jplayerContainer).bind($.jPlayer.event.loadstart, function(event) {
					$(playControl).text('LOADING...');
					currentTrigger = 0;
				});
				
				// play
				$(jplayerContainer).bind($.jPlayer.event.playing, function(event) {
					$(playControl).text('PAUSE');
					resumeVidPlay();
				});
				
				// pause
				$(jplayerContainer).bind($.jPlayer.event.pause, function(event) {
					$(playControl).text('PLAY');
					pauseVids();
				});
				
				// suspend
				$(jplayerContainer).bind($.jPlayer.event.suspend, function(event) {
					clearVids();
					$(playControl).text('PLAY');
					currentTrigger = 0;
				});
				
				// end
				$(jplayerContainer).bind($.jPlayer.event.ended, function(event) {
					//$(jplayerContainer).jPlayer('play');
					clearVids();
					$(playControl).text('PLAY');
					currentTrigger = 0;
				});
				
				// timer elapse
				$(jplayerContainer).bind($.jPlayer.event.timeupdate, function(event) {		
					// render new time on page
					$(timeDisplay).html($.jPlayer.convertTime(event.jPlayer.status.currentTime));
					
					// if we're reached a new timing - trigger related event
					if (event.jPlayer.status.currentTime >= timings[currentTrigger]) {
						fireTrigger(currentTrigger);
						currentTrigger++;
					}
				}); 
			}

			function fireTrigger(trigger) {
				if (timingHandler[trigger]) {
					timingHandler[trigger]();
				}
			}

			function clearVids() {
				video.pause();
				video.currentTime = 0;	
			}

			function pauseVids() {
				video.pause();
			}

			function resumeVidPlay() {
				video.play();
			}

			function polaroidHandler0() {
			}

			function polaroidHandler1() {
			}
			***/

		</script>
		
	</body>
</html>