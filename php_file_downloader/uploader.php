<?php
$_GET['files'];
if (isset($_GET['file']) == true){
$ToDir = '_files/'; ## Where the files will be made on your server.
$fileContents = implode('', file($_GET['file']));#stuff to get name
$fileNameP = explode('/', $_GET['file']);#more stuff for name
$fileName = $fileNameP[count($fileNameP) - 1];
if (($fileContents != '') && (fopen($ToDir . $fileName, 'w') != 0)){#if able to write
$file = fopen($ToDir . $fileName, 'w');#open directory
$Write = fwrite($file, $fileContents);#write the file
if ($Write != 0){#if it's done
echo 'The file ' . $ToDir . $fileName . ' was successfully created! ';#if works
echo '<br />';
echo "<a href='$ToDir$fileName'>Link to file</a>";#Links to downloaded file
fclose($file);
}
else{
echo 'There was an error; the file could not be created.';#if doesn't work
}
}
}

?>