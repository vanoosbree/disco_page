<!DOCTYPE HTML>
<html>
	<head>
		<title>Disco, Disco, Partizani!</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//loading audio
				var blop = document.createElement('audio');
		        blop.setAttribute('src', 'audio/blop.mp3');
		        $.get();
		        blop.addEventListener("load", function() {
		        blop.play();
		        }, true);

		        var tick = document.createElement('audio');
		        tick.setAttribute('src', 'audio/tick.mp3');
		        $.get();
		        tick.addEventListener("load", function(){
		        	tick.play();
		        }, true);

		        var button = document.createElement('audio');
		        button.setAttribute('src', 'audio/button.mp3');
		        $.get();
		        button.addEventListener("load", function(){
		        	button.play();
		        }, true);

		        //mute button
		        var $mute = $('#mute');
		        var mute = true;
		        $mute.click(function(){
		        	if (mute == true) {
		        		mute = false;
		        		$mute.css('color', 'white');
		        	} else {
		        		mute = true;
		        		$mute.css('color', 'red');
		        	}
		        });

		        //set color
		        $('li').mouseenter(function(){
					randColor = Math.random();
					if (randColor < 0.25) {
						randColor = "blue";
					} else if (randColor < 0.50) {
						randColor = "red";
					} else if (randColor < 0.75) {
						randColor = "green";
					} else {
						randColor = "yellow";
					}
						$(this).css('background-color', randColor);

					//play sound
					if (!mute) {
					randAudio = Math.random();
						if (randAudio < 0.33) {
			        		blop.play();
			        	} else if (randAudio < 0.66) {
			        		tick.play();
			        	} else {
			        		button.play();
			        	}
		        	}
				});

				//click to erase
	        	$('li').click(function(){
	        		$(this).css('background-color', '#061E05');
	        	});

	        	$('#clear_all').click(function(){
	        		$('li').css('background-color', '#061E05');
	        	})
			});
		</script>
	</head>

	<body>
		<h1 id="mute">Mute</h1>
		<h1 id="clear_all">Clear All</h1>
		<div class="clear"></div>

<?php
	for($i = 0; $i < 9; $i++)
	{
		echo "<ul>";

		for ($j = 0; $j < 17; $j++)
		{
			echo "<li></li>";
		}

		echo "</ul>";
	}
?>		
	</body>
</html>