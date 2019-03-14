<?php
// http://localhost/phpsandbox/arrays.php


#Array - Variable that holds multiple variables

/*
	- Indexed Arrays
	- Associative
	- Mulit-dimensional
*/

	//INDEXED ARRAYS
	//$people = array('Kevin', 'Jeremy', 'Sara');
	//$ids = array(23, 55, 12);
	//$cars = ['Honda', 'Toyota', 'Ford'];
	//$cars[3] = 'Chevy';
	//$cars[] = 'BMW';

	//echo count($cars);
	//print_r($cars);
	//var_dump($cars);

	//echo $people[2];
	//echo $ids[2];
	//echo $cars[4];


	//ASSOCIATIVE ARRAYS
	//$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	//echo $people['Brad'];
	//$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	//echo $ids[22];

	//$people['Jill'] = 42;
	//echo $people['Jill'];
	//print_r($people);
	//var_dump($people)


	//MULTIDIMENSIONAL ARRAYS
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Ford', 23, 12),
	);

	echo $cars[1][0];

?>