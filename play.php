<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<style>a:link {color: #FE9A2E}</style>
		<link rel="stylesheet" href="script/tocas.min.css">
		<script src="script/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			var player = document.getElementById("musicplayer");
			if (localStorage.getItem("systemvol") != null){
				player.volume = localStorage.getItem("systemvol");
				udvol();
			}
		});
		</script>
	</head>

<body>
<div align="center" class="ts text container">
<?php
if (isset($_GET['song']) !== False){
	if (strpos($_GET['song'],".mp4") !== False){
	echo "Now Playing || " . hex2bin(str_replace("inith","",basename($_GET['song'], ".mp4"))) . " [MP4 AAC]<br>";
	}elseif (strpos($_GET['song'],".mp3") !== False){
	echo "Now Playing || " . hex2bin(str_replace("inith","",basename($_GET['song'], ".mp3"))). " [MP3]<br>";
	}else{
	echo "Playing unsupported format >> " . str_replace("inith","",$_GET['song']). "<br>";	
	}
	echo '<audio id="musicplayer" style="width: 100%;" controls preload="auto" loop autoplay>';
	echo '<source type="audio/mpeg" src="' . $_GET['song'] . '">';
	echo '</audio>';
	echo "<br>";
}
?>
<div align="center" class="ts container">
<button class="ts mini basic button" onclick="Voldown()" type="button">Vol -</button>
<span id="vol">[Global Volume:100]</span>
<button class="ts mini basic button" onclick="Volup()" type="button">Vol +</button>
</div>
</div>
<script>
var player = document.getElementById("musicplayer");
function udvol(){
	$('#vol').text("[Global Volume: " + parseInt(player.volume * 100) + "]");
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