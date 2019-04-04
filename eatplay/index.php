<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Documento sem título</title>
	<style type="text/css">
		ul{list-style: none;padding: 0px}
		a{text-decoration: none; color: #444;font-family:: arial}
		li:hover{background: #eee; border-bottom: solid 1px #f60;}
		li{width: 20%;padding: 5px;border-bottom: solid 1px #ccc;}
		.active a{color:#f60; padding-left: 1px; font-style: italic;}
		#audio, #video{
			width:500px; height: 350px;
			background:url(img/opa_principal_1.jpg) no-repeat center center, #eee;
			border: solid 1px #ddd;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>﻿
</head>
<body>
	<audio id="audio" preload="auto" tabindex="0" controls="" >
    	<source src="media/Baile_Gaiola.mp3" >
    </audio>
    
    <video style="display:none" id="video" preload="auto" tabindex="0" controls="" >
    	<source src="media/ar_condicionado.mp4" >
    </video>
    <ul id="playlist">
    	<li class="active"><a href="media/Baile_Gaiola.mp3">Baile da Gaiola</a></li>
        <li><a href="media/David_s_Dream.mp3">David's Dream</a></li>
        <li><a class="video" href="media/ar_condicionado.mp4">Professor Puto</a></li>
        <li><a href="media/Deep_Floor.mp3">Deep Floor</a></li>
        <li><a class="video" href="media/ar_condicionado.mp4">Professor Puto</a></li>
	</ul>
    <script type="text/javascript">
		inicio();
		function inicio()
		{
			var corrente = 0;
			var media = $("#audio");
			var playlist = $("#playlist");
			var tracks = playlist.find("li a");
			var len = tracks.length - 1;
			media[0].play();
			playlist.find("a").click(function(e){
				e.preventDefault();
				link = $(this);
				if(link.hasClass('video'))
				{
					var media = $("#video");
					var playing = document.getElementById('audio');
					playing.pause();
					$('#audio').hide();
					$('#video').show();
				}
				else
				{
					var media = $("#audio");
					var playing = document.getElementById('video');
					playing.pause();
					$('#video').hide();
					$('#audio').show();
				}
				corrente = link.parent().index();
				run(link, media[0]);
			});
			media[0].addEventListener("ended", function(e){
				corrente++;
				if(corrente == len){
					corrente = 0;
					link = playlist.find("a")[0];
				}else{
					link = playlist.find("a")[corrente];
				}
				run($(link), media[0]);
			});
			
		}
		
		function run(Link, player)
		{
			player.src = link.attr("href");
			par = link.parent();
			par.addClass("active").siblings().removeClass("active");
			player.load();
			player.play();
		}
    </script>
</body>
</html>
