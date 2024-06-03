<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Date and Time</title>
</head>
<body>
	<?php
// Representing the different time format using the date() function
	echo "Today is " . date("Y/m/d") . "<br><br>";
	echo "Today is " . date("Y.m.d") . "<br><br>";
	echo "Today is " . date("Y-m-d") . "<br><br>";
	echo "Today is " . date("l") . "<br><br>";

	// Representing the different time
	echo "The time is " . date("h:i:sa") . "<br><br>";

	// Getting a time zone
	date_default_timezone_set("America/New_York");
	echo "The time is" . date("h:i:sa"). "<br><br>";
	// Create a Date With PHP mktime() function
	$d = mktime($hour = 11,$minutes = 14,$second = 54,$month = 8,$day = 12,$year = 2014);
	echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br><br>";

//	using strtotime() function to convert a date

	$d = strtotime("10:30pm April 17 2018");
	echo "Created date is ". date("Y-m-d h:i:sa", $d). "<br><br>";

	$d = strtotime("tomorrow");
	echo "Created date is ". date("Y-m-d h:i:sa", $d). "<br><br>";

	$d = strtotime("next Sunday");
	echo "Created date is ". date("Y-m-d h:i:sa", $d). "<br><br>";

	$d = strtotime("+3 Months");
	echo "Created date is ". date("Y-m-d h:i:sa", $d). "<br><br>";

	// The example below outputs the number of days until 9th of September

	$d1 = strtotime("September 09");
	$d2 = ceil(($d1-time())/60/60/24);
	echo "There are ". $d2 ." days until 9th of September. <br><br>"; 

	// The example below outputs the dates for the next seven Sundays

	$startdate = strtotime("sunday");
	$enddate = strtotime("+7 weeks", $startdate);

	while ($startdate < $enddate) {
		echo date("M d", $startdate),"<br><br>";
		$startdate = strtotime("+1 week", $startdate);
	}

	?>

<!-- Automatic copyright Year -->
&copy; 2010-<?php echo date("Y");?>

</body>
</html>