<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>

<body>
    <link rel="stylesheet" href="script/tocas.min.css">
	<div class="ts text container">
    <h1>IMUS Laboratory </h1>
	<h2>ArOZ Bulk Download</h2>


<?php
//Change this line if you are not downloading from the aroz upload dir
$uploaddir = 'upload/uploads/music/';

foreach ($_GET as $key => $value) {
$files = scandir($uploaddir);
$filename = "inith" . bin2hex(str_replace("_"," ",$key));
	foreach($files as $file) {
	  if(strpos($file,substr($filename,0,-1))!== False){
		  echo '<div class="ts container" style="outline: solid #353535">';
		  echo '<h4>' . $file . "</h4><br>";
		  echo '<a href="'.$uploaddir .$filename.'.mp3">download</a>';
		  echo '</div><br>';
	  }
	  
	}
	echo str_replace("_"," ",$key);
	echo '<a href="'.$uploaddir .$filename.'.mp3">download</a>';
}

echo "<br>";
?>
<br>
<p align="right"><img class="ts small image" src="logo.png"></p>
</body>
</html>