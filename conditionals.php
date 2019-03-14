<?php
	# CONDITIONALS
	



	#COMPARISON OPERATORS
	/*

	==
	===
	<
	>
	<=
	>=
	!=
	!===

	*/ 




	#USING CONDITIONALS IN IF STATEMENTS:
	/* 
	$num = 52;

	if($num == 5){
		echo '5 Passed';

	} elseif($num ==6){
		echo '6 Passed';

	} else {
		echo 'Did Not PASS';
	}
	*/




	#NESTING IF STATEMENTS:
	/*
	$num = 7;

	if($num > 4){
		if($num <10){
			echo "$num Passed";
		}
	}
	*/




	#LOGICAL OPERATORS
	/*

	# and &&
	# or ||
	# xor

	$num = 2;
	if($num >4 xor $num <10){
		echo "$num Passed";
	}
	
	*/




	#SWITCHES

	$favcolor = 'blue';
	switch($favcolor){
		case 'red':
			echo 'Your favorite color is red';
			break;
		case 'blue':
			echo 'Your favorite color is blue';
			break;
		case 'green':
			echo 'Your favorite color is green';
			break;	
		default:
			echo 'Your favorite color is something else';
	}




?>