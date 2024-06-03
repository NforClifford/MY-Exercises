<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Session 2</title>
</head>
<body>
	<?php
// echo sessions that were set on the previous page

	echo "Favorite color is " . $_SESSION["favcolor"] . "<br>" ;
	echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

// using print_r()
	echo "<pre>\n";
print_r($_SESSION);
echo "<br>";

// OVERWRITE to change session variable
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
echo "\n</pre>";

// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>