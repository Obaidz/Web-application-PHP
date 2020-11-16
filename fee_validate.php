s<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array();
	
	$fee = trim($_POST['feeEdit']);
    if (!preg_match("/^[0-9. ]*$/",$fee)) {
        $errors[] = "Invalid fee! use only numbers, dot and white space.";				
    }
	
	$membership = trim($_POST['membership']);
    if (!preg_match("/^[A-Z ]*$/",$membership)) {
        $errors[] = "Invalid fee! use only CAPITAL LETTERS, OPTIONS: STUDENT, ADULT, PREMIUM";	
    }
	
		

	if (empty($errors)) { 
		
		require('/home/s2961591/connection.php');
		$query = "UPDATE fee SET fee = '$fee' WHERE membership = '$membership'";				
		$result = @mysqli_query($db_connection, $query); // run query
		if($result) { // if the query ran. successfully
			echo "<h2>Success! Feature Box Registered!</h2>";
		}
			
		else {
			echo "<br>Error! <h2>Register unsuccessful</h2>".mysqli_error($db_connection);		
		}
		
		
        mysqli_close($db_connection);
		echo "<br>registered";
        echo "<br><a href=index.php>Home</a>";													
		
	}
	
	    else{
        include 'registration_edit.php';
        	foreach ($errors as $msg) {
            	echo "- $msg <br/>";
        	}
    }
}