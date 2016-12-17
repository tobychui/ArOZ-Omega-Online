<!DOCTYPE html>
<html>
<link rel="stylesheet" href="//cdn.rawgit.com/TeaMeow/TocasUI/master/dist/tocas.min.css">
    <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<meta charset="UTF-8">
        <title>Meow</title>
    <!--Written by Rub-->
	<!-- Rewritten by TC@IMUS Lab in 2016 -->
	<script>
		$(document).ready(function(){
				if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					//Mobile
				}else{
					//Viewing on PC
				}
		});
		</script>
    </head>
    <body>
	<script type="text/javascript">
	$(document).ready(function(){
		$("div").click(function(){
			if ($(this).attr('id') != null && $(this).attr('id')!= "headbar"){
				//alert($(this).attr('id'));
				$("#headbar").load("play.php?song=" + $(this).attr('id'));
			}
		});
                
				
	});
	</script>
	<div class="ts container">
	<br>
	<h1>IMUS Laboratory </h1><br>
	<h2>ArOZ Music Bank</h2>
	<div class="ts pointing secondary big menu">
    <a class="item" href="index.php">Index</a>
    <a class="active item" href="music.php">Music</a>
	<a class="item" href="video.php">Video</a>
	<a class="item" href="upload/">Upload</a>
	<a class="item" href="upload/uploads/">Upload Dir</a>
</div>
	
	<div id="headbar" class="ts segment">
	<p><br></p>
    <p>On this page,
	<br>you can loop one of your favourite music by clicking the "Play" button on the right.
	<br>You can also adjust the global volume by using the Vol+ and Vol- Buttons, or adjust local volume by player's volume button.
	<br>Design for single person and local network use ONLY.</p>
    <p></p>
    <div class="ts top left attached label">Information</div>
	</div>

	<div class="ts horizontal divider">Music Bank</div>
        
		<?php
		//Change this to your upload dir if you are not using ArOZ build in upload system
		$uploaddir = 'upload/uploads/music/';
		//List out all the files in the upload dir first.
		$files = scandir($uploaddir);
		$linenumber = 0;
			foreach($files as $file) {
				if(strpos($file,"inith") !== False){
					$filename =  substr($file,0,strripos($file,"."));//mp4 acceptable playing method
					//$filename = str_replace(".mp3","",$file); //mp3 only method
					$filename = str_replace("inith","",$filename);
					$filename = hex2bin($filename);
					echo '<div class="ts text container">
						<div class="ts two column narrow container grid">
						
						<div align="left" class="column">
							<div class="ts text container">
							<i class="music icon"></i>'.$filename.'
							</div>
						</div>
						
						<div align="right" class="column">
							<div  class="ts buttons">
							<div id="'.$uploaddir.$file.'"class="ts mini basic button" href="#">Play</div>
							<a class="ts mini secondary basic button" href="'.$uploaddir.$file.'" download>Download</a>
							</div>
						</div>

						</div>
						</div>';
				}
			  $linenumber += 1;
			}
		
		?>
        <br>
		<p align="right"><img class="ts small image" src="logo.png""></p>
        </div>
    </body>
</html>