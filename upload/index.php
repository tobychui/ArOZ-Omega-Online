<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../script/tocas.min.css">
     <head>
	 <meta charset="UTF-8">
        <title>ArOZ Upload</title>
        <script src="../script/jquery.min.js"></script>
			
    </head>
	<body>
    <div class="ts container">
	<br>
	<h1>IMUS Laboratory</h1><br>
	<h2>ArOZ System Upload Interface</h2>
	<div class="ts pointing secondary big menu">
    <a class="item" href="../index.php">Index</a>
    <a class="item" href="../music.php">Music</a>
	<a class="item" href="../video.php">Video</a>
	<a class="item" href="../photo.php">Photo</a>
	<a class="active item" href="../upload/">Upload</a>
	<a class="item" href="uploads/">Upload Dir</a>
</div>
    <h3>Upload</h3>
        
        <form class="ts form" action="arozupload.php" method="POST" enctype="multipart/form-data">
		<div class="ts jumbotron">
		<h4 class="ts header"> Step 1 </h4>
		<div class="sub header">Select file(s) to upload. </div><br>
            <div class="form-group">
                <div class="input-group">
					
                        <span class="ts primary basic button btn-file">
                            Browse
                            <input type="file" id="files" name="fileToUpload[]" id="fileToUpload" multiple>
                        </span>
					
                </div>
			</div>
			</div>
            <div class="ts jumbotron">
			<h4 class="ts header"> Step 2 </h4>
			<div class="sub header">Setup Directory Name(optional): </div>
			<div class="field">
			<select class="ts fluid basic dropdown" id="dirname" type="text" name='dirname'>
				<option value=''>Files Directory</option>
				<option value='music'>Music Bank</option>
				<option value='video'>Video Bank</option>
				<option value='photo'>Photo Station</option>
				
			</select>
        
				</div>
               <div class="sub header">Select Multiple Files with MOUSEDRAG, CTRL, SHIFT </div>
            </div>
            <input class="ts positive basic button" type="submit" value="Upload" name="submit">
			<a class="ts negative basic button" href=".."> Cancel </a>

        </form>
        <div class="ts section divider"></div>
		<p align="right"><img class="ts small image" src="../logo.png"></p>
    </div>
	
	</div>
</body>
<style type="text/css">
    .btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  background: red;
  cursor: inherit;
  display: block;
}
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}
</style>
<script type="text/javascript">
    $(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            //if( log ) alert(log);
        }
        
    });
});
</script>
</html>