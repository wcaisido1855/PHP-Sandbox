<?php
	# LOOPS - EXECUTE CODE A SET NUMBER OF TIMES
	/*
	- FOR 
	- WHILE
	- DO...WHILE
	- FOREACH
	*/

	#FOR LOOP
	# @params - ususally - initializer (init), condition, increment 
	# (used if you kno there's going to be a set number of iterations)

	//for($i = 0; $i < 10; $i++){
	//	echo 'Number '. $i;
	//	echo '<br>';
	//}

	# WHILE LOOP
	# @params - condition, setting the variable is done outside the loop
	# (usually used if you do NOT know how many iterations the loop will go)

	//$i = 0;
	//
	//while ($i < 10) {
	//	echo $i; 
	//	echo '<br>';
	//	$i++;
	//}

	# DO...WHILE LOOP
	# @params - same as a WHILE LOOP, only gets a condition & increment

	//$i = 0; 
	//
	//do{
	//	echo $i;
	//	echo '<br>';
	//	$i++;
	//}
	//
	//while($i < 10);



	# FOREACH LOOP - Used for ARRAYS (INDEXED ARRAY EXAMPLE)
	
	//$people= array('Brad', 'Jose', 'William');
	//foreach($people as $person){
	//	echo $person;
	//	echo '<br>';
	//}



	# FOREACH LOOP - Used for ARRAYS (ASSOCIATIVE ARRAY EXAMPLE)
	
	$people= array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');
	foreach($people as $person => $email){
		echo $person. ': '.$email;
		echo '<br>';
	}

	
?>