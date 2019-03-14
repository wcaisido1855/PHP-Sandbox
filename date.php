<?php
	//echo date('d'); //day
	//echo date('m'); //Month
	//echo date('Y'); //Year
	//echo date('l'); // Day of the Week

	//echo date('m/d/Y'); // Month, Day, Year

	//echo date('h'); //Hour
	//echo date('i'); // Min
	//echo date('s'); // Seconds
	//echo date('a'); // AM or PM

	//Set Timezone
	//date_default_timezone_set('America/New_York');

	//GET DATE AND TIME
	//echo date('h:i:sa');

	//$timestamp = mktime(10, 14, 54, 9, 19, 1981);
	//echo $timestamp;

	//echo date('m/d/Y h:i:sa', $timestamp);

	#STRING TO TIME 
	//$timestamp2 = strtotime('7:00pm March 22 2016');
	//$timestamp3 = strtotime('tomorrow');
	//$timestamp4 = strtotime('next Sunday');
	//$timestamp5 = strtotime('+2 Months');
	$timestamp5 = strtotime('+2 Days');
	//echo $timestamp2;
	echo date('m/d/Y h:i:sa', $timestamp5);
?>