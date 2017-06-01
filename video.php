<!DOCTYPE html>
<html>
<link rel="stylesheet" href="script/css/font-awesome.min.css">
<link rel="stylesheet" href="script/tocas.min.css">
    <head>
	<meta charset="utf-8">
        <title>Meow</title>
        <?php
		//Modify this if you need mmfpeg support
		// movie.avi.... name of the movie you want to take a screenshot from
		// 00:00:00.... Where in the movie do you wanna take your screenshot, 10 seconds from start? ex: 00:00:10
		// picname..... name your generated pic
		//exec("START ffmpeg.exe -vcodec png -i uploads/video/movie.avi -ss  00:00:10 -vframes frames picname%d.png");
		?> 
    </head>
    <body>
	<div class="ts container">
	<br>
	<h1>IMUS Laboratory </h1><br>
	<h2>ArOZ Video Bank</h2>
	<div class="ts pointing secondary big menu">
    <a class="item" href="index.php">Index</a>
    <a class="item" href="music.php">Music</a>
	<a class="active item" href="video.php">Video</a>
	<a class="item" href="photo.php">Photo</a>
	<a class="item" href="upload/">Upload</a>
	<a class="item" href="upload/uploads/">Upload Dir</a>
</div>
	<div class="ts segment">
	<p><br></p>
    <p>On this page, you can click "View" to stream a video from your server.
	<br>You can also download the video after you have entered the "view" page.
	<br>Make sure your browser support HTML5 player function :)</p>
    <p></p>
    <div class="ts top left attached label">Information</div>
	</div>
	<div class="ts container">
	<?php
	$dir = 'upload/uploads/video/';
	$files = scandir($dir);
	$linenumber = 0;
	foreach($files as $file){
		#echo substr_count($dir,"/") - 1 . '<br>';
		if ($linenumber >= substr_count($dir,"/") - 1){ #Bypass the fisrt two directory
			if (strpos($file, '.mp4') == True){
			#echo $file;
			echo '<div class="ts basic jumbotron" style="outline: solid #353535">';
			$filetitle = hex2bin(str_replace(".mp4","",str_replace("inith","",$file)));
			echo '<h4 class="ts header"><i class="fa fa-video-camera" style="font-size:18px"></i>' . $filetitle . "</h4>";
			echo substr(filesize($dir . $file)/1000000,0,4) . "MB [" . pathinfo($dir.$file)['extension'].']<br>';
			echo '<div class="ts buttons">';
			echo '<a class="ts mini primary button" href="vidplay.php?directory='. $dir .'&filename='.$file.'">View</a>';
			echo '<a class="ts mini basic button" href="'.$dir . $file .'"download="'.$filetitle . ".mp4".'">Download</a>';
			echo '</div>';
			echo '</div>';
			}
			}
		$linenumber += 1;
	}
	
	?>
	</div>
	<p align="right"><img class="ts small image" src="logo.png"></p>
    </body>
</html>