<?php
	#SUBSTR()
	#RETURNS A PORTION OF A STRING

//$output = substr('Hello', 1, 3);
//$output = substr('Hello', -2);
//echo $output;

	#STRLEN()
	#RETURNS THE LENGTH OF A STRING

//$output = strlen('Hello World');
//echo $output

	#strpos()
	#RETURNS POSITION OF THE FIRST OCCURRENCE OF A SUB STRING

//$output = strpos('Hello World', 'o');
//echo $output

	#strrpos()
	#RETURNS POSITION OF THE FIRST OCCURRENCE OF A SUB STRING

//$output = strrpos('Hello World', 'o');
//echo $output

	#trim()
	#STRIPS WHITESPACE

//$text = 'Hello World           ';
//var_dump($text);

//$trimmed = trim($text);
//var_dump($trimmed);

	#strtoupper
	#MAKES EVERYHTING UPPERCASE

//$output = strtoupper('Hello World');
//echo $output;

	#strtolower
	#MAKES EVERYHTING LOWERCASE

//$output = strtolower('Hello World');
//echo $output;

	#ucwords()
	#CAPITALIZES EVERY WORD

//$output = ucwords('hello world');
//echo $output;

	#str_replace
	#REPLACE ALL OCCURRENCES OF A SEARCH STRING WITH A REPLACEMENT
	#TAKES 3 @params/ARGUMENTS

//$text = 'Hello World';
//$output = str_replace('World', 'Everyone', $text);
//echo $output;

	#is_string()
	#Check if string

//$val = '22';
//$output = is_string($val);
//echo $output;

/*
$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

foreach($values as $value){
	if(is_string($value)){
		echo "{$value} is a string<br>";
	}
}
*/



	#gzcompress()
	#COMPRESS A STRING

$string = 
'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$compressed = gzcompress($string);
//echo $compressed;

	#gzuncompress()
	#UN-COMPRESS A COMPRESSED STRING

$original = gzuncompress($compressed);
echo $original;




?>