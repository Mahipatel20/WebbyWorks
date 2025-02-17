<!DOCTYPE html>
<html>
<body>

<?php
// echo readfile("webdictionary.txt");

$myfile = fopen("webdictionary.txt", "r") or
die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);
echo "<br>";

$myfile = fopen("webdictionary.txt", "r") or
die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "<br>";

$myfile = fopen("webdictionary.txt", "r") or
die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo "<br>";

$myfile = fopen("webdictionary.txt", "r") or
dir("Unable to open file!");
while(!feof($myfile)){
    echo fgetc($myfile);
}
?>


</body>
</html>