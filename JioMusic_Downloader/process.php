<?php include "header.php"; ?>

<?php
if($_POST['submit']){
	$url = $_POST['src'];
	$rename = $_POST['rename'];
	$ffmpeg = "/usr/bin/ffmpeg";
	
	shell_exec("$ffmpeg -i $url -c copy copied_music/$rename.ts && $ffmpeg -i copied_music/$rename.ts -codec:a libmp3lame -b:a 320k copied_music/$rename.mp3 && rm -rf copied_music/$rename.ts");
    echo '<div class="form-style-6">';
	echo "<h1>Files Downloaded & Converted.</h1>";
	echo "<br/>";
	echo '<a href="http://itunesrip.in/jiomusic/copied_music/">Goto Folder</a>';
	echo "<br/>";
	echo '<h3>Download: <a href="http://itunesrip.in/jiomusic/copied_music/'.$rename.'.mp3">'.$rename.'.mp3</a></h3>';
			
   } 
?>

<?php include "footer.php"; ?>