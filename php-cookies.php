<?php
// creating a cookie 
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
// 86400 = 1 day
  

// deleting a cookie
setcookie("user", "", time() - 3600);

// test/check if cookie are Enabled
setcookie("test_cooke", "test", time() + 3600, "/");


?>
<html>

<body>
<?php
// "retrieving a cookie"


if (!isset($_COOKIE["$cookie_name"])) {
	echo "cookie'" . $cookie_name . "'is not set";
}else {
	echo "cookie '" . $cookie_name . "' is set";
	echo "<br><br>Value is '" . $_COOKIE["$cookie_name"] ."'";
	 
	}

// to delete a cookie	
echo "cookie 'user' is deleted.<br><br>";


// test/check if cookie are Enabled by using count() function
if (count($_COOKIE) > 0) {
	echo "cookie are enabled.";
}else{
	echo "cookies are disabled ";
}

 ?>


</body>
</html>