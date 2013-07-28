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
				width:700px; /*750px;*/
				height:510px;
				margin:0px auto;
				padding-top:10px;
			}
			
			.tileBorder {
				/*border:1px solid #000;*/
				float:left;
			}
			
			.tile{	
				cursor: pointer;
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
			var ROWS = 20;
			var COLS = 20;
			var video = $("#source-vid")[0];
			
			// minesweeper
			var grid = [];
			var openedCells = [];
			
			// on page load
			$(document).ready(function() {
				GalleryCircusMain();
				
				tiles(700, 500, ROWS, COLS);
				update(video);
				
				HandleClicks();
				HandleShakes();
				
				// minsweeper set up
				CreateMinesweeperGrid();
				PopulateMines(40);
				CalculateMineDistances();
				//PrintGrid();
			});
			
			function update(video) {
				tiles(700, 500, ROWS, COLS, video);
				setTimeout(function() { update(video) }, 60);
			}
			
			function tiles(w, h, r, c, source) {
				var tileW = Math.round(w / c);
				var tileH = Math.round(h / r);
				
				for(var ri = 0; ri < r; ri += 1) {
					for(var ci = 0; ci < c; ci += 1) {
						//if source is not specified, just build canvas object, otherwise draw inside them
						if (typeof source === 'undefined') {
							var tile = $('<div class="tileBorder" style="height:'+ tileH +'px; width:'+ tileW +'px;"><canvas class="tile shakeable" id="tile_' + ri + '_' + ci + '" height="' + tileH + '" width="' + tileW + '"></canvas></div>').get(0);
							$("#box").append(tile);
							$(".tile").draggable();
						} else {
						
							var foundCoords = false;
							for (var i = 0; i < openedCells.length; i++) {
								var cell = openedCells[i];
								if (cell.Y == ri && cell.X == ci)
									foundCoords = true;
							}
							
							var getit = $('#tile_' + ri + '_' + ci).get(0);
							var context = getit.getContext('2d');
							if (!foundCoords) {
								context.drawImage(source, ci*tileW, ri*tileH, tileW, tileH, 0, 0, tileW, tileH);
							}
							else {
							
								//var idata = context.getImageData(0,0,tileW,tileH);
								//var data = idata.data;
								//for(var i = 0; i < data.length; i+=4) {
									/*var red = data[i];
									var gre = data[i+1];
									var blu = data[i+2];
									var brightness = parseInt((red + gre + blu) / 3);
									data[i] = brightness;
									data[i+1] = brightness;
									data[i+2] = brightness;*/
									//data[i] = 0;
								//}
								//idata.data = data; 
								//context.putImageData(idata,0,0); 
								//$('#tile_' + ri + '_' + ci).effect("pulsate", { times:1 }, 100);
							}
						}
					}
				}
			}
			
			function HandleShakes() {
				//$(".shakeable").mouseover(function () {
				//	$(this).fadeOut('fast').fadeIn('fast');
				//}); 
			}
			
			function HandleClicks() {	
				$(".tile").click(function() {
					var id = $(this).attr("id").split('_');
					var yAxis = id[1];
					var xAxis = id[2];
					
					var openCell = { X: xAxis, Y: yAxis }
					openedCells.push(openCell);
					
					var tile = grid[yAxis][xAxis];
					var drawObj = tile.DistanceFromMine != -1 ? tile.DistanceFromMine != 0 ? tile.DistanceFromMine : "" : "X";
					$(this).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+drawObj+"</span>");
					
					if (tile.DistanceFromMine == 0)
						Recursive(yAxis, xAxis);
					else if (tile.DistanceFromMine == -1) {
						HitMine();
					}
					
					update(video);
				});
			}
			
			
			
			/*** mine sweeper ***/
			
			function HitMine() {
				for (var i = 0; i < 20; i++) {
					for (var j = 0; j < 20; j++) {
						var tile = grid[i][j];
						if (tile.IsMine) {
							var openCell = { X: j, Y: i }
							openedCells.push(openCell);
							//$("#tile_" + i + "_" + j).parent().html("X");
							$("#tile_" + i + "_" + j).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>X</span>");
						}
					}
				}
			}
			
			function CreateMinesweeperGrid() {
				grid = new Array(20);
				for (var i = 0; i < 20; i++) {
					grid[i] = new Array(20);
				}
				
				for (var i = 0; i < 20; i++) {
					for (var j = 0; j < 20; j++) {
						var Tile = { IsMine: false, DistanceFromMine: 0 };
						grid[i][j] = Tile;
					}
				}
			}
			
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			
			function PopulateMines(numberOfMines) {
				var i = 0;
				while (i < numberOfMines) {
					var yAxis = getRandomInt(0, 19);
					var xAxis = getRandomInt(0, 19);

					var tile = grid[yAxis][xAxis];
					if (!tile.IsMine) {
					    var Tile = { IsMine: true, DistanceFromMine: -1 };
						grid[yAxis][xAxis] = Tile;
						i++;
					}
				}
			}
			
			function IsCellValid(y, x) {
				if (y >= 0 && y < 20 && x >= 0 && x < 20) {
					var tile = grid[y][x];
					return !tile.IsMine;
				}
				else
					return false;
			}
			
			function CalculateMineDistances() {
				for (var i = 0; i < 20; i++) {
					for (var j = 0; j < 20; j++) {
						var tile = grid[i][j];
						if (tile.IsMine) {
							if (IsCellValid(i, j + 1)) {
								var tile = grid[i][j+1];
								tile.DistanceFromMine++;
								grid[i][j+1] = tile;
							}
							
							if (IsCellValid(i - 1, j + 1)) {
								var tile = grid[i-1][j+1];
								tile.DistanceFromMine++;
								grid[i-1][j+1] = tile;
							}
							
							if (IsCellValid(i - 1, j)) {
								var tile = grid[i-1][j];
								tile.DistanceFromMine++;
								grid[i-1][j] = tile;
							}
							
							if (IsCellValid(i - 1, j - 1)) {
								var tile = grid[i-1][j-1];
								tile.DistanceFromMine++;
								grid[i-1][j-1] = tile;
							}
							
							if (IsCellValid(i, j - 1)) {
								var tile = grid[i][j-1];
								tile.DistanceFromMine++;
								grid[i][j-1] = tile;
							}
							
							if (IsCellValid(i + 1, j - 1)) {
								var tile = grid[i+1][j-1];
								tile.DistanceFromMine++;
								grid[i+1][j-1] = tile;
							}
							
							if (IsCellValid(i + 1, j)) {
								var tile = grid[i+1][j];
								tile.DistanceFromMine++;
								grid[i+1][j] = tile;
							}
							
							if (IsCellValid(i + 1, j + 1)) {
								var tile = grid[i+1][j+1];
								tile.DistanceFromMine++;
								grid[i+1][j+1] = tile;
							}
						}
					}
				}
			}
			
			queue = [];
			
			function Recursive(y, x) {
				x = parseInt(x);
				y = parseInt(y);
				
				if (IsCellValid(y,x + 1)) {
					var openCell = { X: x+1, Y: y }
					openedCells.push(openCell);
					
					if (grid[y][x+1].DistanceFromMine == 0) {
						//$("#tile_" + (y) + "_" + (x+1)).parent().html("");

						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y][x+1] = t
						
						queue.push(openCell);
					}
					else if (grid[y][x+1].DistanceFromMine > 0) {
						//$("#tile_" + (y) + "_" + (x+1)).parent().html(grid[y][x+1].DistanceFromMine);
						$("#tile_" + (y) + "_" + (x+1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y][x+1].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y -1,x +1)) {
					var openCell = { X: x+1, Y: y-1 }
					openedCells.push(openCell);
					
					if (grid[y-1][x+1].DistanceFromMine == 0) {
						//$("#tile_" + (y-1) + "_" + (x+1)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y-1][x+1] = t
						
						queue.push(openCell);
					}
					else if (grid[y-1][x+1].DistanceFromMine > 0) {
						//$("#tile_" + (y-1) + "_" + (x+1)).parent().html(grid[y-1][x+1].DistanceFromMine);
						$("#tile_" + (y-1) + "_" + (x+1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y-1][x+1].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y - 1,x)) {
					var openCell = { X: x, Y: y-1 }
					openedCells.push(openCell);
					
					if (grid[y-1][x].DistanceFromMine == 0) {
						//$("#tile_" + (y-1) + "_" + (x)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y-1][x] = t
						
						queue.push(openCell);
					}
					else if (grid[y-1][x].DistanceFromMine > 0) {
						//$("#tile_" + (y-1) + "_" + (x)).parent().html(grid[y-1][x].DistanceFromMine);
						$("#tile_" + (y-1) + "_" + (x)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y-1][x].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y -1,x-1)) {
					var openCell = { X: x-1, Y: y-1 }
					openedCells.push(openCell);
					
					if (grid[y-1][x-1].DistanceFromMine == 0) {
						//$("#tile_" + (y-1) + "_" + (x-1)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y-1][x-1] = t
						
						queue.push(openCell);
					}
					else if (grid[y-1][x-1].DistanceFromMine > 0) {
						//$("#tile_" + (y-1) + "_" + (x-1)).parent().html(grid[y-1][x-1].DistanceFromMine);
						$("#tile_" + (y-1) + "_" + (x-1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y-1][x-1].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y,x-1)) {
					var openCell = { X: x-1, Y: y }
					openedCells.push(openCell);
					
					if (grid[y][x-1].DistanceFromMine == 0) {
						//$("#tile_" + (y) + "_" + (x-1)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y][x-1] = t
						
						queue.push(openCell);
					}
					else if (grid[y][x-1].DistanceFromMine > 0) {
						//$("#tile_" + (y) + "_" + (x-1)).parent().html(grid[y][x-1].DistanceFromMine);
						$("#tile_" + (y) + "_" + (x-1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y][x-1].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y +1,x-1)) {
					var openCell = { X: x-1, Y: y+1 }
					openedCells.push(openCell);
					
					if (grid[y+1][x-1].DistanceFromMine == 0) {
						//$("#tile_" + (y+1) + "_" + (x-1)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y+1][x-1] = t
						
						queue.push(openCell);
					}
					else if (grid[y+1][x-1].DistanceFromMine > 0) {
						//$("#tile_" + (y+1) + "_" + (x-1)).parent().html(grid[y+1][x-1].DistanceFromMine);
						$("#tile_" + (y+1) + "_" + (x-1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y+1][x-1].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y+1,x)) {
					var openCell = { X: x, Y: y+1 }
					openedCells.push(openCell);
					
					if (grid[y+1][x].DistanceFromMine == 0) {
						//$("#tile_" + (y+1) + "_" + (x)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y+1][x] = t
						
						queue.push(openCell);
					}
					else if (grid[y+1][x].DistanceFromMine > 0) {
						//$("#tile_" + (y+1) + "_" + (x)).parent().html(grid[y+1][x].DistanceFromMine);
						$("#tile_" + (y+1) + "_" + (x)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y+1][x].DistanceFromMine+"</span>");
					}
				}
				
				if (IsCellValid(y+1,x+1)) {
					var openCell = { X: x+1, Y: y+1 }
					openedCells.push(openCell);
					
					if (grid[y+1][x+1].DistanceFromMine == 0) {
						//$("#tile_" + (y+1) + "_" + (x+1)).parent().html("");
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y+1][x+1] = t
						
						queue.push(openCell);
					}
					else if (grid[y+1][x+1].DistanceFromMine > 0) {
						//$("#tile_" + (y+1) + "_" + (x+1)).parent().html(grid[y+1][x+1].DistanceFromMine);
						$("#tile_" + (y+1) + "_" + (x+1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y+1][x+1].DistanceFromMine+"</span>");
					}
				}
				
				while (queue.length > 0) {
					var tile = queue[0];
					var x = tile.X;
					var y = tile.Y;
					
					queue.splice(0, 1); // remove [0] element
					
					if (IsCellValid(y,x + 1)) {
						var openCell = { X: x+1, Y: y }
						openedCells.push(openCell);
					
						if (grid[y][x+1].DistanceFromMine == 0) {
							//$("#tile_" + (y) + "_" + (x+1)).parent().html("");

							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y][x+1] = t
							
							queue.push(openCell);
						}
						else if (grid[y][x+1].DistanceFromMine > 0) {
							//$("#tile_" + (y) + "_" + (x+1)).parent().html(grid[y][x+1].DistanceFromMine);
							$("#tile_" + (y) + "_" + (x+1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y][x+1].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y -1,x +1)) {
						var openCell = { X: x+1, Y: y-1 }
						openedCells.push(openCell);
						
						if (grid[y-1][x+1].DistanceFromMine == 0) {
							//$("#tile_" + (y-1) + "_" + (x+1)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y-1][x+1] = t
							
							queue.push(openCell);
						}
						else if (grid[y-1][x+1].DistanceFromMine > 0) {
							//$("#tile_" + (y-1) + "_" + (x+1)).parent().html(grid[y-1][x+1].DistanceFromMine);
							$("#tile_" + (y-1) + "_" + (x+1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y-1][x+1].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y - 1,x)) {
						var openCell = { X: x, Y: y-1 }
						openedCells.push(openCell);
						
						if (grid[y-1][x].DistanceFromMine == 0) {
							//$("#tile_" + (y-1) + "_" + (x)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y-1][x] = t
							
							queue.push(openCell);
						}
						else if (grid[y-1][x].DistanceFromMine > 0) {
							//$("#tile_" + (y-1) + "_" + (x)).parent().html(grid[y-1][x].DistanceFromMine);
							$("#tile_" + (y-1) + "_" + (x)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y-1][x].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y -1,x-1)) {
						var openCell = { X: x-1, Y: y-1 }
						openedCells.push(openCell);
						
						if (grid[y-1][x-1].DistanceFromMine == 0) {
							//$("#tile_" + (y-1) + "_" + (x-1)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y-1][x-1] = t
							
							queue.push(openCell);
						}
						else if (grid[y-1][x-1].DistanceFromMine > 0) {
							//$("#tile_" + (y-1) + "_" + (x-1)).parent().html(grid[y-1][x-1].DistanceFromMine);
							$("#tile_" + (y-1) + "_" + (x-1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y-1][x-1].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y,x-1)) {
						var openCell = { X: x-1, Y: y }
						openedCells.push(openCell);
						
						if (grid[y][x-1].DistanceFromMine == 0) {
							//$("#tile_" + (y) + "_" + (x-1)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y][x-1] = t
							
							queue.push(openCell);
						}
						else if (grid[y][x-1].DistanceFromMine > 0) {
							//$("#tile_" + (y) + "_" + (x-1)).parent().html(grid[y][x-1].DistanceFromMine);
							$("#tile_" + (y) + "_" + (x-1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y][x-1].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y +1,x-1)) {
						var openCell = { X: x-1, Y: y+1 }
						openedCells.push(openCell);
						
						if (grid[y+1][x-1].DistanceFromMine == 0) {
							//$("#tile_" + (y+1) + "_" + (x-1)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y+1][x-1] = t
							
							queue.push(openCell);
						}
						else if (grid[y+1][x-1].DistanceFromMine > 0) {
							//$("#tile_" + (y+1) + "_" + (x-1)).parent().html(grid[y+1][x-1].DistanceFromMine);
							$("#tile_" + (y+1) + "_" + (x-1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y+1][x-1].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y+1,x)) {
						var openCell = { X: x, Y: y+1 }
						openedCells.push(openCell);
						
						if (grid[y+1][x].DistanceFromMine == 0) {
							//$("#tile_" + (y+1) + "_" + (x)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y+1][x] = t
							
							queue.push(openCell);
						}
						else if (grid[y+1][x].DistanceFromMine > 0) {
							//$("#tile_" + (y+1) + "_" + (x)).parent().html(grid[y+1][x].DistanceFromMine);
							$("#tile_" + (y+1) + "_" + (x)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y+1][x].DistanceFromMine+"</span>");
						}
					}
					
					if (IsCellValid(y+1,x+1)) {
						var openCell = { X: x+1, Y: y+1 }
						openedCells.push(openCell);
						
						if (grid[y+1][x+1].DistanceFromMine == 0) {
							//$("#tile_" + (y+1) + "_" + (x+1)).parent().html("");
							
							var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
							grid[y+1][x+1] = t
							
							queue.push(openCell);
						}
						else if (grid[y+1][x+1].DistanceFromMine > 0) {
							//$("#tile_" + (y+1) + "_" + (x+1)).parent().html(grid[y+1][x+1].DistanceFromMine);
							$("#tile_" + (y+1) + "_" + (x+1)).parent().append("<span style='position:relative; z-index:99; top:-30px; left:12px'>"+grid[y+1][x+1].DistanceFromMine+"</span>");
						}
					}				
				}
			}
			
			
			/*function Recursive(y, x) {
				if (y >= 0 && y < 20 && x >= 0 && x < 20) {
					var tile = grid[y][x];
					if (!tile.IsMine && tile.DistanceFromMine == 0) {
						var openCell = { X: x, Y: y }
						openedCells.push(openCell);
						$("#tile_" + y + "_" + x).parent().html(""); // empy cell
						
						var t = { IsMine:false, DistanceFromMine:-2} // mark as already been checked (-2)
						grid[y][x] = t
						
						Recursive(y, x +1);
						Recursive(y-1, x+1);
						Recursive(y-1, x);
						Recursive(y-1, x-1);
					}
				}
			}*/
			
			function PrintGrid() {
				var sb = "<table cellspacing='8'>";
				for (var i = 0; i < 20; i++) {
					sb += "<tr>";
					for (var j = 0; j < 20; j++) {
						var tile = grid[i][j];
						sb += "<td>" + tile.DistanceFromMine + "</td>";
					}
					sb += "</tr>";
				}
				sb += "</table>";
				$("#debug").html(sb);
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
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