<link rel="stylesheet" href="//cdn.rawgit.com/TeaMeow/TocasUI/master/dist/tocas.min.css">
<html>
	<div class="ts container">
	<h1>IMUS Laboratory</h1>
	<h2>ArOZ 系統管理之自動備份音樂庫</h2>
    <h3>音樂上傳系統</h3>
	</div>
</html>
<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 


if (!file_exists("uploads")){
    mkdir("uploads");
}
if ($_POST['dirname']) {
    $target_dir = "uploads/" . $_POST['dirname'] . '/';
    if(!file_exists($target_dir)) {
        mkdir("uploads/" . $_POST['dirname']);
    }
} else {
    $target_dir = "uploads/";
}
for ($i = 0; $i < count($_FILES['fileToUpload']['name']); $i++) {
	echo '<div class="ts container">';
	echo '<div class="ts horizontal divider">' . $_FILES["fileToUpload"]["name"][$i] . '</div>';
	echo '<div class="ts message">';
	echo '<div class="header">Upload Name:<b> ' . $_FILES["fileToUpload"]["name"][$i] . '</b><br></div>';
	$ext = end((explode(".", $_FILES["fileToUpload"]["name"][$i])));
	$encodedname = bin2hex(str_replace('.' . $ext,"",$_FILES["fileToUpload"]["name"][$i]));
	$rawfilename = hex2bin($encodedname) . $ext . '<br>';
    $target_file = $target_dir . 'inith' . $encodedname . '.' .  $ext;
	echo 'Storage Filename:<br>';
	if (strlen ( $encodedname ) > 140){
		echo substr($encodedname,0,100). '......' . substr($encodedname,-5) . '.' .  $ext . '<br>';
	}else{
		echo $encodedname . '.' .  $ext . '<br>';
	}
	
	echo '</div>';
    $uploadOk = 1;
    if (file_exists($target_file)) {
		echo '<div class="ts warning message">';
        echo '<div class="header">' .$_FILES["fileToUpload"]["name"][$i] . " ALREADY EXISTS.<br> " . '</div>';
		echo '</div>';
        echo '<a class="ts primary button" href=' . "'" . $target_dir . "'" .  ">Upload Directory</a>";
		echo '<a class="ts inverted button" href="../">Back to ArOZ</a><br>';
		
        $uploadOk = 0;
    } 
    if ($uploadOk == 0) {
		echo '<div class="ts inverted negative message"><div class="header">';
        echo $_FILES["fileToUpload"]["name"][$i] . " is not uploaded.<br>";
		echo '</div></div><br>';
    } else {
        if (move_uploaded_file(iconv("utf-8","big5//TRANSLIT//IGNORE", $_FILES["fileToUpload"]["tmp_name"][$i]), iconv("utf-8","big5//TRANSLIT//IGNORE",$target_file))) {
			echo '<div class="ts positive message">';
			echo '<div class="header">';
            echo "The file ".  $_FILES["fileToUpload"]["name"][$i]. ' has been uploaded.<br></div></div>
            <a class="ts primary button"href=' . "'" . $target_dir . "'" .  ">Upload Directory</a>";
			echo '<a class="ts inverted button" href="../">Back to ArOZ</a><br>';
			//echo hex2bin($encodedname) . "<br>";
        } else {
			echo '<div class="ts negative message">';
            echo '<div class="header">Sorry, there was an error when uploading your file' . $_FILES["fileToUpload"]["name"][$i] . '<br></div>';
			echo '</div>';
        }
    }
	echo '</div>';
}
    echo "<br>";
	echo '</div>';
	echo '<div class="ts horizontal divider">File Info</div>';
	echo '<div class="ts container">';
	var_dump($_FILES);
	echo '</div>';

?>
<html>
<div class="ts container">
<p align="right"><img class="ts small image" src="http://123.203.74.171:8080/aroz/logo.png"></p>
</div>
</html>