<html>
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" href="script/tocas.min.css">
<title>ArOZ System</title>
</head>
<body>
<br>
<div class="ts container">
	<h1>IMUS Laboratory</h1><br>
	<h2>ArOZ Photo Station</h2>
<div class="ts pointing secondary big menu">
    <a class="item" href="index.php">Index</a>
    <a class="item" href="music.php">Music</a>
	<a class="item" href="video.php">Video</a>
	<a class="active item" href="photo.php">Photo</a>
	<a class="item" href="upload/">Upload</a>
	<a class="item" href="upload/uploads/">Upload Dir</a>
</div>
	<h2> Previews </h2><br>
	<div class="ts grid">
		<!-- Preview Bar -->
		<?php
		$photodir = "upload/uploads/photo/";
		$path = $photodir;
		$files = array_diff(scandir($path), array('.', '..'));
		foreach($files as $file){
			$filename = hex2bin(str_replace("inith","",pathinfo($file)['filename']));
			$ext = pathinfo($file)['extension'];
			$shortenname = mb_strimwidth($filename, 0, 25, "...");
			echo '<div class="four wide column">';
			echo '<div class="ts segment" style="height:250px">';
			echo '<p>'.$shortenname. "." . $ext . '</p>';
			echo '<a href="'.$photodir . $file.'" class="ts link medium image">
					<img src="'.$photodir . $file.'">
				  </a>';
			echo '</div>';
			echo '</div>';
		}
		
		?>
	</div>
</div>

</div>
</body>
</html>
