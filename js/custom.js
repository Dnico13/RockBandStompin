/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Home Slider
5. Init Featured Album Player
6. InitMagic
7. Init Single Player


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var ctrl = new ScrollMagic.Controller();

	initMenu();
	initHomeSlider();
	initAlbumPlayer();
	initMagic();
	initSinglePlayer();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 91)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var hamb = $('.hamburger');
			var menu = $('.menu');
			var menuOverlay = $('.menu_overlay');

			hamb.on('click', function()
			{
				menu.addClass('active');
			});

			menuOverlay.on('click', function()
			{
				menu.removeClass('active');
			});
		}
	}

	/* 

	4. Init Home Slider

	*/

	function initHomeSlider()
	{
		if($('.home_slider').length)
		{
			var homeSlider = $('.home_slider');
			homeSlider.owlCarousel(
			{
				animateOut: 'fadeOutLeft',
    			animateIn: 'fadeInRight',
				items:1,
				loop:true,
				autoplay:false,
				autoplayTimeout:8000,
				smartSpeed:1200,
				autoplaySpeed:1200,
				dotsSpeed:1200,
				mouseDrag:false,
				nav:false,
				dots:true,
				margin:250
			});
		}
	}

	/* 

	5. Init Featured Album Player

	*/

	function initAlbumPlayer()
	{
		if($('#jplayer_1').length)
		{
			// Duration has to be entered manually
			var playlist = 
			[
				{
					title:"All I can do is cry",
					artist:"Stompin'Bones",
					mp3:"files/All_I_can_do_is_cry.mp3",
					duration:"3.01"
				},
				{
					title:"Gambling Barroom",
					artist:"Stompin'Bones",
					mp3:"files/gambling_Barroom.mp3",
					duration:"3.32"
				},
				{
					title:"Deep down in my soul",
					artist:"Stompin'Bones",
					mp3:"files/Deep_down_in_my_soul.mp3",
					duration:"1.37"
				},
				{
					title:"Hard Time",
					artist:"Stompin'Bones",
					mp3:"files/Hard_time.mp3",
					duration:"2.23"
				},
				{
					title:"Lost Soul",
					artist:"Stompin'Bones",
					mp3:"files/Lost_Soul.mp3",
					duration:"3.20"
				},
				{
					title:"Paddle Alone",
					artist:"Stompin'Bones",
					mp3:"files/Paddle-alone.mp3",
					duration:"3.58"
				},
				{
					title:"Ride the Blind",
					artist:"Stompin'Bones",
					mp3:"files/ride-the-blind.mp3",
					duration:"2.23"
				},
				{
					title:"Saint James Infirmery",
					artist:"Stompin'Bones",
					mp3:"files/Saint-James-infirmery.mp3",
					duration:"3.46"
				},
				{
					title:"Stomping Blues",
					artist:"Stompin'Bones",
					mp3:"files/Stomping-blues.mp3",
					duration:"1.53"
				},
				{
					title:"Stomping Bones",
					artist:"Stompin'Bones",
					mp3:"files/Stomping-bones.mp3",
					duration:"2.46"
				},
				{
					title:"Stranger Things",
					artist:"Stompin'Bones",
					mp3:"files/Stranger_things.mp3",
					duration:"2.36"
				},
				{
					title:"The Wolf",
					artist:"Stompin'Bones",
					mp3:"files/The_Wolf.mp3",
					duration:"3.56"
				}
			];

			var options =
			{
				playlistOptions:
				{
					autoPlay:false,
					enableRemoveControls:false
				},
				play: function() // To avoid multiple jPlayers playing together.
				{ 
					$(this).jPlayer("pauseOthers");
				},
				solution: 'html',
				supplied: 'oga, mp3',
				useStateClassSkin: true,
				preload: 'metadata',
				volume: 0.2,
				muted: false,
				backgroundColor: '#000000',
				cssSelectorAncestor: '#jp_container_1',
				errorAlerts: false,
				warningAlerts: false
			};

			var cssSel = 
			{
				jPlayer: "#jplayer_1",
				cssSelectorAncestor: "#jp_container_1",
				play: '.jp-play',
				pause: '.jp-pause',
				stop: '.jp-stop',
				seekBar: '.jp-seek-bar',
				playBar: '.jp-play-bar',
				globalVolume: true,
				mute: '.jp-mute',
				unmute: '.jp-unmute',
				volumeBar: '.jp-volume-bar',
				volumeBarValue: '.jp-volume-bar-value',
				volumeMax: '.jp-volume-max',
				playbackRateBar: '.jp-playback-rate-bar',
				playbackRateBarValue: '.jp-playback-rate-bar-value',
				currentTime: '.jp-current-time',
				duration: '.jp-duration',
				title: '.jp-title',
				fullScreen: '.jp-full-screen',
				restoreScreen: '.jp-restore-screen',
				repeat: '.jp-repeat',
				repeatOff: '.jp-repeat-off',
				gui: '.jp-gui',
				noSolution: '.jp-no-solution'
			};

			var myPlaylist = new jPlayerPlaylist(cssSel,playlist,options);
			
			
			setTimeout(function()
			{
				var items = $('.jp-playlist ul li > div');
				for(var x = 0; x < items.length; x++)
				{
					var item = items[x];
					var dur = playlist[x].duration;
					var durationDiv = document.createElement('div');
					durationDiv.className = "song_duration";
					durationDiv.append(dur);
					item.append(durationDiv);
				}
			},200);
		}
	}

	/* 

	6. Init Magic

	*/

	function initMagic()
	{
		if($('.image_overlay').length)
		{
			var eles = $('.image_overlay');
			eles.each(function()
			{
				var ele = this;

				var projectScene = new ScrollMagic.Scene(
				{
					triggerElement: ele,
			        triggerHook: "onEnter",
			        offset: 400,
			        reverse:false
				})
				.setClassToggle(ele, 'active')
				.addTo(ctrl);
			});
		}
	}

	/* 

	7. Init Single Player

	*/

	function initSinglePlayer()
	{
		if($("#jplayer_2").length)
		{
			$("#jplayer_2").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title:"Saint James Infirmery",
					artist:"Stompin'Bones",
					mp3:"files/Saint-James-infirmery.mp3"
			});
		},
		play: function() { // To avoid multiple jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "plugins/jPlayer",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_container_2",
		wmode: "window",
		globalVolume: true,
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		solution: 'html',
		preload: 'metadata',
		volume: 0.2,
		muted: false,
		backgroundColor: '#000000',
		errorAlerts: false,
		warningAlerts: false
	});
		}	
	}

});