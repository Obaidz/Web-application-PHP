<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array();
	
	$class_Name = trim($_POST['class_name']);
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $class_Name)) {
        $errors[] = "Invalid Class name! use only numbers, alphabets and white spaces";
    }
	
	$date = trim($_POST['date']);
	$todayYear = getdate();
	$newDate = date('d/m/Y', strtotime($_POST['date']));
	$enteredDate =  substr($newDate, 0,2);
	$enteredMonth = substr($newDate, 3,2);
	$enteredYear =  substr($newDate, 6,4);
	$currentYear =  $todayYear['year'];
	$currentmonth =  $todayYear['mon'];
	$currentday =  $todayYear['mday'];
		
	if($enteredYear  > $currentYear || $enteredYear  >= $currentYear && $enteredMonth > $currentmonth ||  
	$enteredDate  > $currentday && $enteredYear  >= $currentYear && $enteredMonth >= $currentmonth  ){
		$errors[] = "Invalid date for year";
	}

	 
	$comments = trim($_POST['comment']);
    if(empty($_POST['comment'])) {
        $errors[] = 'testimonial is required.';
    }
	
	$first_name = trim($_POST['fname']); 
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $errors[] = "Invalid first name! use only letters and white space.";
    }
	
	
	if (empty($errors)) { 
		
		require('/home/s2961591/connection.php');
		$query = "INSERT INTO testimonial ( Class, first_Name, date, comment) VALUES ('$class_Name', '$first_name', '$date', '$comments')";
		$result = @mysqli_query($db_connection, $query); // run query
		if($result) { // if the query ran. successfully
			echo "<h2>Success! Testimonial is sent!</h2>";
		}
		else {
			echo "<br>Error! <h2> Testimonial was unsuccessful </h2>".mysqli_error($db_connection);
		}
		
		
        mysqli_close($db_connection);
		echo "<br>registered";
        echo "<br><a href=index.php>Home</a>";
		
       
		
	} 
	
	    else{
        include 'testimonial_add.php';
        	foreach ($errors as $msg) {
            	echo "- $msg <br/>";
        	}
    }
}
