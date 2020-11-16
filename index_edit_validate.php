<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array();
	
	$title = trim($_POST['featBTitle']);
    if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
        $errors[] = "Invalid title! use only letters and white space.";
    }
	
	$details = trim($_POST['featBDetail']);
    if(empty($_POST['featBDetail'])) {
        $errors[] = 'details are required required.';
    }
	
	$image = trim($_POST['featBImage']);
	$image2 = trim($_POST['featBImage2']);
	$image3 = trim($_POST['featBImage3']);
	
		

	if (empty($errors)) { 
		
		require('/home/s2961591/connection.php');
		$query = "INSERT INTO page(title, details, image1, image2, image3) VALUES ('$title', '$details', '$image', '$image2', '$image3')";
		$result = @mysqli_query($db_connection, $query); // run query
		if($result) { // if the query ran. successfully
			echo "<h2>Success! Feature Box Registered!</h2>";
		}
			
		else {
			echo "<br>Error! <h2>Register unsuccessful, Feature Box ID already present in database</h2>".mysqli_error($db_connection);
		}
		
		
        mysqli_close($db_connection);
		echo "<br>registered";
        echo "<br><a href=index.php>Home</a>";
		
       
		
	}
	
	    else{
        include 'index_edit.php';
        	foreach ($errors as $msg) {
            	echo "- $msg <br/>";
        	}
    }
}