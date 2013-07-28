// store timing triggers
var timings = new Array();
timings[0] = 3;
timings[1] = 4;

// store related methods
var timingHandler = {
	0: polaroidHandler0,
	1: polaroidHandler1
}

// polaroid event locations
var polaroid1 = "#polaroid1";
var polaroid2 = "#polaroid2";

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

// on page load
$(document).ready(function() {
	GalleryCircusMain();
});

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
	// clear page here
	$(".videoOuter").each(function() {
		$(this).css('visibility','hidden');
	});
}

function pauseVids() {
	$(".videoOuter").each(function() {
		var innerVideo = $(this).find("video:first");
		if (!innerVideo.get(0).paused) {
			innerVideo.get(0).pause();
		}
	});
}

function resumeVidPlay() {
	$(".videoOuter").each(function() {
		var innerVideo = $(this).find("video:first");
		if (innerVideo.get(0).paused) {
			innerVideo.get(0).play();
		}
	});
}

// handle the triggers - each func will be responsible for starting their events, the following function will stop
function polaroidHandler0() {
	// start 1
	$(polaroid1).hide().css({visibility: "visible"}).fadeIn("slow");
	$(polaroid1+"Vid").get(0).play();	
}

function polaroidHandler1() {
	// close 1
	setTimeout(function() { $(polaroid1).fadeOut("fast", function() { $(this).show().css({visibility: "hidden"} ); }); }, 1000);

	// start 2
	$(polaroid2).hide().css({visibility: "visible"}).fadeIn("slow");
	$(polaroid2+"Vid").get(0).play();
}

