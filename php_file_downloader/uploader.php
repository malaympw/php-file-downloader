<?php
$_GET['files'];
if (isset($_GET['file']) == true){
$ToDir = '_files/'; ## Where the files will be made on your server.
$fileContents = implode('', file($_GET['file']));
$fileNameP = explode('/', $_GET['file']);
$fileName = $fileNameP[count($fileNameP) - 1];
if (($fileContents != '') && (fopen($ToDir . $fileName, 'w') != 0)){
$file = fopen($ToDir . $fileName, 'w');
$Write = fwrite($file, $fileContents);
if ($Write != 0){
echo 'The file ' . $ToDir . $fileName . ' was successfully created! ';
echo '<br />';
echo "<a href='$ToDir$fileName'>Link to file</a>";
fclose($file);
}
else{
echo 'There was an error; the file could not be created.';
}
}
}

?>