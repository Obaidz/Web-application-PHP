<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array();
	
	$name = trim($_POST['name']);
    $email = trim($_POST['email']);
	$phone = trim($_POST['number']);
	$message = trim($_POST['message']);		
	
	if (empty($errors)) { 
		
		require('/home/s2961591/connection.php');
		$query = "INSERT INTO contact_us ( name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";			
		$result = @mysqli_query($db_connection, $query); // run query
		if($result) { // if the query ran. successfully
			echo "<h2>Success! message is sent!</h2>";
		}
		else {
			echo "<br>Error! <h2> Message was unsuccessful </h2>".mysqli_error($db_connection);										
		}
		
		
        mysqli_close($db_connection);
		echo "<br>registered";
        echo "<br><a href=index.php>Home</a>";
		
       
		
	} 

}