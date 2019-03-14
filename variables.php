<?php
	//http://localhost/phpsandbox/variables.php
	// Single Line Comment
	# Single Line Comment

/* Multi
	Line
		Comment */

	# Variable Rules
	/*
		- Prefix with '$'
		- Start with ONLY a letter -or- an underscore
		- ONLY contain letters, numbers, underscores
		- Case Sensitive
	*/

	# DATA TYPES
	/*
		- String
		- Intergers 
		- Floats -> same as Decimals
		- Booleans -> True / False
		- Arrays 
		- Objects
		- NULL
		- Resource
	*/

	$output = 'Hello World';
	$num1 = 4;	
	$num2 = 10;
	$sum = $num1 + $num2;

	$string1 = 'Hello';
	$string2 = 'World';
	$greeting = $string1 .' '. $string2.'!'; 
	$greeting2 = "$string1 $string2";

	$string3 = "They\"re Here";


	$float1 = 4.4;
	$bool1 = True;

	define('GREETING', 'Hello Everyone', true);

	echo greeting;
?>