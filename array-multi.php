<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array multi</title>
</head>
<body> 
<?php 
$cars = array
(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold:".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold:".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold:".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold:".$cars[3][2].".<br><br><br><br>";

// using a For loop for the array above.
echo "<b>Result of a For loop.</b>";
for ($row=0; $row < 4; $row++) { 
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col=0; $col < 3; $col++) { 
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}

?>

</body>
</html>