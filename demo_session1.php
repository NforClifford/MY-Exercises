<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP session 1</title>
</head>
<body>
	<?php 
// set session variable using $_SESSION;
	$_SESSION["favcolor"] = "green";
	$_SESSION["favanimal"] = "cat";
	echo "Session variable are set.";
	header("demo_session.php");
	exit();

?>

</body>
</html>