<?php
//start of file - Gallery Circus  - copyright 2013
?>

<!DOCTYPE html>
<html>
	<head>
		<title>HTML5 Video Tiles with Drag and Drop using CANVAS Demo</title>
	
		<style>
		
			body {
				height:100%;
				width:100%;
				
				margin:0px;
				padding:0px;
				background-color: #000;
				color: #fff
			}
			
			#box{
				width:660px; 
				height:500px;
				
				margin:0px auto;
				padding-top:10px;
			}
			
			.tileBorder {
				padding: 1px;
				float: left;
			}
			
			.tile{	
				cursor: pointer;
				position: relative;
			}
		</style>

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
		
		<!-- debug -->
		<div id="debug"><div>
		<!-- end debug -->
		
		<div style="display:none;">
			<video id="source-vid" loop>
				<source src="videos/Sequence02.mp4" type="video/mp4">
				<source src="videos/Sequence_02.ogv" type="video/ogg">
			</video>
		</div>

		<div id="box"></div>

		<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script src="jquery.jplayer.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			
			// store timing triggers
			var timings = new Array();
			timings[0] = 2;
			timings[1] = 3;

			// store related methods
			var timingHandler = {
				0: polaroidHandler0,
				1: polaroidHandler1,
			}

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
			
			// slider
			var startPosition = null;
			var currentDraggerID = null;
			var tilesAndPositions = [];
			var colorArray = [];
			var upper = 0;
			var lower = 0;
			var left = 0;
			var right = 0;
			var boundary = 0;
			
			// on page load
			$(document).ready(function() {
				GalleryCircusMain();
				
				// exact dimensions of video for google chrome
				tiles(654, 480, ROWS, COLS);
				update(video);
				
				MouseClick();
			});
			
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			
			function update(video) {
				tiles(654, 480, ROWS, COLS, video);
				setTimeout(function() { update(video) }, 20);
			
			}
			
			function tiles(w, h, r, c, source) {
				var tileW = Math.floor(w / c);
				var tileH = Math.floor(h / r);
				
				var tilePositions = [];
				var tilesRendered = [];
				var tileNumber = 0;
				for(var ri = 0; ri < r; ri += 1) {
					for(var ci = 0; ci < c; ci += 1) {
						//if source is not specified, just build canvas object, otherwise draw inside them
						if (typeof source === 'undefined') {
							// render all tiles in correct order while video is undefined
							
							var randomNumber = getRandomInt(0, (ROWS * COLS) - 1);
							while ($.inArray(randomNumber, tilesRendered) !== -1) {
								randomNumber = getRandomInt(0, (ROWS * COLS) - 1);
							}
								
							var sb  = '<div id="tileBorder_'+ tileNumber +'" class="tileBorder" tileNumber='+ tileNumber +' randomNumber='+randomNumber+' style="height:'+ tileH +'px; width:'+ tileW +'px;">';
								sb += 	'<canvas id="tile_'+ tileNumber +'" class="tile" tileNumber='+ tileNumber +' randomNumber='+randomNumber+' height="' + tileH + '" width="' + tileW + '"></canvas>';
								sb += '</div>';
								
							var tile = $(sb).get(0);
							$("#box").append(tile);
							
							var pos = $('#tileBorder_'+tileNumber).position();
							var posObj = { Left: pos.left, Top: pos.top }
							tilesAndPositions.push(posObj);
							
							var ppp = {left: 0, top: 0}
							tilePositions.push(ppp);
							
							$(".tileBorder").draggable({
									snap: true,
									stack: "#box",
									containment: '#box', 
									
									start:function(a,ui){
										
										$(a.target).css('z-index','99').css('opacity','0.5').css({"border-color": "#D11919", "border-weight":"1px", "border-style":"solid"});
										
										// get position of tileBorder
										startPosition = $(a.target).parent().position();
										
										// get div id of selected
										currentDraggerID = parseInt($(a.target).attr("id").split('_')[1]);
										
										// show applicable divs
										var tileNumber = parseInt($(a.target).parent().attr('tileNumber'));
										upper = tileNumber - COLS;
										 lower = tileNumber + COLS;
										 left = tileNumber % COLS == 0 ? -1 : tileNumber - 1;
										 right = tileNumber % COLS == COLS - 1 ? -1 : tileNumber + 1;
										 boundary = (ROWS * COLS) -1;
										
										 if (upper >= 0) { 
											 $('#box').find('div[tileNumber="'+upper+'"]').css('opacity','0.8'); 
											 colorArray.push($('#box').find('div[tileNumber="'+upper+'"]').attr('id'));
										 }
										
										 if (lower <= boundary) { 
											 $('#box').find('div[tileNumber="'+lower+'"]').css('opacity','0.8');
											 colorArray.push($('#box').find('div[tileNumber="'+lower+'"]').attr('id'));											
										 }
										
										 if (left != -1) { 
											 $('#box').find('div[tileNumber="'+left+'"]').css('opacity','0.8'); 
											 colorArray.push($('#box').find('div[tileNumber="'+left+'"]').attr('id'));
										 }
										
										 if (right != -1) { 
											 $('#box').find('div[tileNumber="'+right+'"]').css('opacity','0.8'); 
											 colorArray.push($('#box').find('div[tileNumber="'+right+'"]').attr('id'));
										 }
									},
									
									drag: function(a,ui){
										
										var changedColour = false;
										var currentPosition = $(a.target).parent().position();
											for (var i = 0; i < tilesAndPositions.length; i++) {
												var pos = tilesAndPositions[i];
												if (startPosition != currentPosition && currentPosition.left == pos.Left && currentPosition.top == pos.Top) {

													var tm = parseInt($(a.target).parent().attr('tileNumber'));
													if ( i == tm + 1 
														|| i == tm - 1 
														|| i == tm + COLS 
														|| i == tm - COLS) {
															$(a.target).css("border-color","#CFE001");
															changedColour = true;
														}
													
												}
											}
											
											if (!changedColour)
												$(a.target).css("border-color","#D11919");
										//var grp = $(a.target).data('group');
										//if(grp != undefined){
											//calculate distanse of drag
										//	$('#can_space canvas[data-group="'+grp+'"]').each(function(i,elm){
										//		if(elm!=a.target){
										//			diffY = Math.round($(elm).position().top + (helper.position.top - elDragStartY));
										//			diffX = Math.round($(elm).position().left + (helper.position.left - elDragStartX));
										//			$(elm).css({'top':diffY,'left':diffX});
										//		};
										//	});
										//	elDragStartY = helper.position.top;
										//	elDragStartX = helper.position.left;
										//}
									},
									
									stop: function(a,ui){
									
										var inFocus = true;
										if (typeof $(a.target).attr("id") != 'undefined' && $(a.target).attr("id").indexOf("tile_") != -1 && parseInt($(a.target).attr("id").split('_')[1]) == currentDraggerID)
											$(a.target).css('z-index','auto').css('opacity','1').css('border', 'none');
										else { // lost focus
											$("#tile_"+currentDraggerID).css('z-index','auto').css('opacity','1').css('border', 'none');
											inFocus = false;
										}
										
										colorArray = []; // clear array
										$('.tileBorder:not([opacity="1"])').each(function() {
											$(this).css('opacity','1');
										});
										
										
										var isSet = false;
										if (inFocus) {
											var currentPosition = $(a.target).parent().position();
											for (var i = 0; i < tilesAndPositions.length; i++) {
												var pos = tilesAndPositions[i];
												if (startPosition != currentPosition && currentPosition.left == pos.Left && currentPosition.top == pos.Top) {

													var tm = parseInt($(a.target).parent().attr('tileNumber'));
													if ( i == tm + 1 
														|| i == tm - 1 
														|| i == tm + COLS 
														|| i == tm - COLS) {
														// update tileNumber to match grid layout
														// update offset array with values for the current tile, and the tile that it's swithing with
														//$('#box').find('div[tileNumber="'+i+'"]').offset({ top: startPosition.top, left: startPosition.left });
														
														// update pos for animate
														var vals = parseInt($(a.target).attr('id').split('_')[1]);
														var previousPosition = tilePositions[vals]; //current pos
														var ppp = {left: ui.position.left, top: ui.position.top}
														tilePositions[vals] = ppp; // update with new pos
														
														// update other tile pos
														var vals2 = parseInt($('#box').find('div[tileNumber="'+i+'"]').attr('id').split('_')[1]);	
														var lll = 0;
														if (previousPosition.left != ui.position.left) {
															if (previousPosition.left < ui.position.left)
																lll = tilePositions[vals2].left - ((previousPosition.left*-1) - (ui.position.left*-1));
															else
																lll = tilePositions[vals2].left + ((ui.position.left*-1) - (previousPosition.left*-1));
														}
														else {
															lll = tilePositions[vals2].left;
														}
														
														var ttt = 0;
														if (previousPosition.top != ui.position.top) {
															if (previousPosition.top < ui.position.top)
																ttt = tilePositions[vals2].top - ((previousPosition.top*-1) - (ui.position.top*-1));
															else
																ttt = tilePositions[vals2].top + ((ui.position.top*-1) - (previousPosition.top*-1));
														}
														else {
															ttt = tilePositions[vals2].top;
														}
														var ppp2 = {left: lll, top: ttt}
														tilePositions[vals2] = ppp2;
														
														$('#box').find('div[tileNumber="'+i+'"]').animate({ left: ppp2.left, top: ppp2.top }, 100);
														
														// update tile numbers
														var startIndex = $(a.target).parent().attr('tileNumber');
														$('#box').find('div[tileNumber="'+i+'"]').attr('tileNumber', startIndex);
														$(a.target).parent().attr('tileNumber', i);
														
														isSet = true;
														break;
													}
													
												}
											}
										}
										
										if (!isSet) {
											
											var vals = 0;
											if (typeof $(a.target).attr("id") != 'undefined' && $(a.target).attr("id").indexOf("tile_") != -1 && parseInt($(a.target).attr("id").split('_')[1]) == currentDraggerID) {
												vals = parseInt($(a.target).attr('id').split('_')[1]);
												var ttt = tilePositions[vals];
											    $(a.target).parent().css('z-index','99').animate({ left: ttt.left, top: ttt.top }, 300);
											    setTimeout(function() {$(a.target).parent().css('z-index','auto')}, 500);
											}
											else {
												vals = currentDraggerID;
												var yyy = tilePositions[vals];
											    $("#tile_"+currentDraggerID).parent().css('z-index','99').animate({ left: yyy.left, top: yyy.top }, 300);
											    setTimeout(function() {$("#tile_"+currentDraggerID).parent().css('z-index','auto')}, 500);
											}
												
											//var ttt = tilePositions[vals];
											//$(a.target).parent().css('z-index','99').animate({ left: ttt.left, top: ttt.top }, 300);
											//setTimeout(function() {$(a.target).parent().css('z-index','1')}, 500);
											
											//$(a.target).parent().offset({ top: startPosition.top, left: startPosition.left });
										}
										
										// if a tile was hilighted on mouse over, remove this after animation (otherwise we'll re highlight)
										setTimeout(function () {$('.tile:not([z-index="auto"])').each(function() {
											$(this).css('z-index','auto').css('border','none');
										}); }, 50);
									
										//_sibObj = JSON.parse($(a.target).data('siblings'));
										//locateSiblings(_sibObj,$(a.target));
										//var grp = $(a.target).data('group');
										//if(grp != undefined){
											//$('#can_space canvas[data-group="'+grp+'"]').not(a.target).each(function(i,elm){
											//	_sibObj = JSON.parse($(elm).data('siblings'));
											//	locateSiblings(_sibObj,$(elm));
											//});
										//}
									}
								}); 
							
							tilesRendered.push(randomNumber);
							
						} else {

							var location = parseInt($('#tile_' + tileNumber).attr('randomNumber'));
							var rr = Math.floor(location / COLS);
							var cc = location < (COLS - 1) ? location : location % COLS;
		
							var getit = $('#tile_' + tileNumber).get(0);
							var context = getit.getContext('2d');
							
							var foundCoords = false;
							for (var i = 0; i < colorArray.length; i++) {
								var cellId = colorArray[i];
								if (cellId == 'tileBorder_' + tileNumber)
									foundCoords = true;
							}
							
							if (!foundCoords) {
								context.drawImage(source, cc*tileW, rr*tileH, tileW, tileH, 0, 0, tileW, tileH);
								//context.drawImage(source, cc*tileW, rr*tileH, tileW, tileH, 0, 0, tileW, tileH);
							}
							else {
							
								context.drawImage(source, cc*tileW, rr*tileH, tileW, tileH, 0, 0, tileW, tileH);
								var idata = context.getImageData(0,0,tileW,tileH);
								var data = idata.data;
								for(var i = 0; i < data.length; i+=4) {
									var red = data[i];
									var gre = data[i+1];
									var blu = data[i+2];
									
									//var brightness = parseInt((red + gre + blu) / 3);
									data[i] = red * 1.9;
									data[i+1] = gre * 1.4;
									data[i+2] = blu * 0.6;
									
									//data[i] = 0;
								}
								idata.data = data; 
								context.putImageData(idata,0,0); 
							}

						}
						tileNumber++;
					}
				}
			}
			
			function MouseClick() {

			    document.onselectstart=function(e){e.preventDefault();return false;} //  on chrome / safari always show pointer when dragging
			
				$(".tile").mouseover(function() {
					$(this).css('z-index','99').css({"border-color": "#D11919", "border-weight":"1px", "border-style":"solid"});
				});
				
				$(".tile").mouseleave(function() {
					$(this).css('z-index','auto').css("border","none");
				});
			
				//$(".tileBorder").mouseup(function() {
				//	$(this).children().css('z-index','0').css('opacity','1').css('border', 'none');
				//	rendered = false;					
				//	colorArray = []; // clear array
				//	$('.tileBorder:not([opacity="1"])').each(function() {
				//		$(this).css('opacity','1');
				//	});
					
				//	update(video);
				//});
			}
			
			//var rendered = false;
			//function MouseClick() {
				// mouse down
			//	 $(".tileBorder").mousedown(function() {
			//		 if (!rendered) {
			//			 $(this).children().css('z-index','99').css('opacity','0.5').css({"border-color": "#C1E0FF", "border-weight":"1px", "border-style":"solid"});
					//	  rendered = true;					
						// // show applicable divs
						// var tileNumber = parseInt($(this).attr('tileNumber'));
						// upper = tileNumber - COLS;
						// lower = tileNumber + COLS;
						// left = tileNumber % COLS == 0 ? -1 : tileNumber - 1;
						// right = tileNumber % COLS == COLS - 1 ? -1 : tileNumber + 1;
						// boundary = (ROWS * COLS) -1;
						
						// if (upper >= 0) { 
							// $('#box').find('div[tileNumber="'+upper+'"]').css('opacity','0.8'); 
							// colorArray.push($('#box').find('div[tileNumber="'+upper+'"]').attr('id'));
						// }
						
						// if (lower <= boundary) { 
							// $('#box').find('div[tileNumber="'+lower+'"]').css('opacity','0.8');
							// colorArray.push($('#box').find('div[tileNumber="'+lower+'"]').attr('id'));											
						// }
						
						// if (left != -1) { 
							// $('#box').find('div[tileNumber="'+left+'"]').css('opacity','0.8'); 
							// colorArray.push($('#box').find('div[tileNumber="'+left+'"]').attr('id'));
						// }
						
						// if (right != -1) { 
							// $('#box').find('div[tileNumber="'+right+'"]').css('opacity','0.8'); 
							// colorArray.push($('#box').find('div[tileNumber="'+right+'"]').attr('id'));
						// }
						
					//	 update(video);
					// }
				 //});
				
				// mouse up
				//$(".tileBorder").mouseup(function() {
				//	$(this).children().css('z-index','0').css('opacity','1').css('border', 'none');
				//	rendered = false;					
				//	colorArray = []; // clear array
				//	$('.tileBorder:not([opacity="1"])').each(function() {
				//		$(this).css('opacity','1');
				//	});
					
				//	update(video);
				//});
			//}
			
			

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			/*** ***/

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

		</script>
		
	</body>
</html>