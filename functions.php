<?php
	# FUNCITON - Block of code that can be repeatedly called
	
	# Syntaxes:
	/* 
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()

		in PHP, we usually use Camel Case or Lower Case for variable & Functions (Usually Camel Case)

		Pascal Case is usually reserved for CLASSES for objects in Object Oriented Programming
	*/

	# CREATE/DEFINE A SIMPLE FUNCTION
	//function simpleFunction(){
	//	echo 'Hello World';
	//}

	# CALL/USE/RUN THE FUNCTION
	//simpleFunction();

	# NEW FUNCTION THAT TAKE PARAMETERS/ARGUMENTS- SAY HELLO
	//function sayHello($name = 'World'){
	//	echo "Hello $name<br>";
	//}

	//sayHello('Joe');
	//sayHello('Bob');
	//sayHello('Tim');


	//RETURN VALUE
	//function addNumbers($num1, $num2){
	//	return $num1 + $num2;
	//}
	//
	//echo addNumbers(2,3);


	// PASSING ARGUMENTS BY REFERENCE

	$myNum = 10;

	function addFive($num){
		$num += 5;
	}

	function addTen(&$num){
		$num += 10;
	}

	addFive($myNum);
	echo "Value: $myNum<br>";

	addTen($myNum);
	echo "Value: $myNum<br";
?>