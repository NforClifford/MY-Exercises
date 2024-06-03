<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Handling</title>
</head>
<body>
	<?php
	// code to read the file and write it to the output buffer is as follows

	echo readfile("webdictionary.txt"). "<br><br>";

	// File Open/Read/Close

	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	echo fread($myfile, filesize("webdictionary.txt"));	
	echo "<br><br>";

	// read single line

	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	echo fgets($myfile);
	fclose($myfile);
	echo "<br><br>";

	// Check End-Of-File
	$myfile = fopen("webdictionary. txt", "r") or die("Unable to open file!");
	//outut one line until end of file
	while (!feof($myfile)) {
		echo fgets($myfile) . "<br><br>";
	}
	fclose($myfile);

	// Read Single Character

	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	// Output one character until end of file
	while (!feof($myfile)) {
		echo fgetc($myfile);

	}
	fclose($myfile);

	?>

</body>
</html>