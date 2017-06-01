<html>
<link rel="stylesheet" href="script/tocas.min.css">
    <head>
	<script src="script/jquery.min.js"></script>
	<meta charset="utf-8">
        <title>Video</title>
        <script>
		$(document).ready(function(){
			var vidvol = 0.5
			var player = document.getElementById("videoplayer");
			var viddiv = document.getElementById("vidcontainer");
			var maxvidwidth = document.getElementById("vidcontainer").offsetWidth;
			var screenwidth = $(window).width();
			if (localStorage.getItem("systemvol") != null){
				vidvol = localStorage.getItem("systemvol");
				player.volume = localStorage.getItem("systemvol");
				if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					//Mobile
					viddiv.style.left = 0;
					viddiv.style.width= screenwidth* 0.93 + 'px';
					player.width = screenwidth * 0.89; 
				}else{
					//Viewing on PC
					player.width = maxvidwidth * 0.65; 
				}
			}
			udvol();
		});
		</script>
    </head>
    <body>
	<div class="ts container">
	<br>
	<h1>IMUS Laboratory </h1><br>
	<h2>ArOZ Video Bank</h2><br>
	<div class="ts divider"></div>
	<div class="ts container">
	<?php
			$path = $_GET['directory'];
			$file = $_GET['filename'];
			echo '<div id="vidcontainer" class="ts basic jumbotron" style="background-color: #353535;">';
			$filetitle = "|| " . hex2bin(str_replace(".mp4","",str_replace("inith","",$file)));
			echo '<h2><font color="white">' . $filetitle . "</font></h2>";
			echo '<video id="videoplayer" width="480" autoplay controls>';
			echo '<source src="' . $path .$file.'" type="video/mp4">';
			echo '<script>';
			echo 'var video = document.currentScript.parentElement;';
			echo 'video.volume = vidvol;';
			echo '</script>';
			echo '</video><br>';
			
			echo '</div>';
	?>
	<div class="ts basic jumbotron" style="outline: solid #353535">
	<a align="right" class="ts mini basic button" href="video.php">Back</a>
	<button class="ts mini basic button" onclick="Voldown()" type="button">Vol -</button>
	<span id="vol">[Global Volume:100]</span>
	<button class="ts mini basic button" onclick="Volup()" type="button">Vol +</button>
	<button class="ts mini basic button" onclick="cinema()" type="button">Large Screen</button>
	<a class="ts mini basic button" href="<?php echo $path .$file; ?>" download>Download</a>
	</div><br>
	<script>
	var player = document.getElementById("videoplayer");
	var oncinema = false;
	function udvol(){
		$('#vol').text("[Global Volume: " + parseInt(player.volume * 100) + "]");
	}
	function cinema(){
		var maxvidwidth = document.getElementById("vidcontainer").offsetWidth;
		if (oncinema == false){
			player.width = maxvidwidth * 0.95;
			oncinema = true;
		}else{
			player.width = maxvidwidth * 0.65;
			oncinema = false;
		}
	}
	function saveVol(){
		var systemvol = player.volume;
		localStorage.setItem("systemvol", systemvol);
	}

	function Voldown() { 
		player.volume -= 0.1;
		saveVol();
		udvol();
	} 
	  
	function Volup() { 
		player.volume += 0.1;
		saveVol();
		udvol();
	} 
	</script>
</body>
</html>