<?php include "forms_header.php";

?>

<?php include "member_nav.php"; 

?>

<body id = "contact_body">

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
			if(isset($_POST["login2"])) {
				require('/home/s2961591/connection.php');
				$query = "INSERT INTO testimonial ( Class, first_Name, date, comment) VALUES ('$class_Name', '$first_name', '$date', '$comments')";
				$result = @mysqli_query($db_connection, $query); // run query
			}
			if($result) { // if the query ran. successfully
				echo "<h2>Success! Testimonial is sent!</h2>";
			}
			else {
				echo "<br>Error! <h2> Testimonial was unsuccessful </h2>".mysqli_error($db_connection);
			}
			
			
	        mysqli_close($db_connection);
			
	       
			
	       
			
		}
		
		    else{
	        	foreach ($errors as $msg) {
	            	echo "- $msg <br/>";
	        	}
	    }

}
?>
	

         <section id="contactSec">
           <div class="container">
           	 <h2>TESTIMONIAL</h2>
              <p>Give your reviews about us:</p>
             <div class="contact-form">

                  <!-- First grid -->
                  <div>
                    <i class="fa fa-map-marker"></i><span class="form-info"> DFC </span><br>
                    <i class="fa fa-phone" > </i><span class="form-info">  be part of the community</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info"> Dublin Fitness Club </span>
                  </div>
                  
                      <!-- second grid -->
                    <div id = "grid2">        
                      <form id = "form" action = "" method = "POST">
					  	<input name="class_name" type="text" class="form-control" placeholder="Class name (YOGA2)" required>
                         <input name="date" type="date" class="form-control" placeholder="Date" required>
						 <input name="fname" type="text" class="form-control" placeholder="First Name" required>
						 <textarea class = "form-control" name="comment" rows = "6" placeholder = "Comment"></textarea>
						 <button type="submit" class="submit" id = "mybutton" name="login2">Submit</button>
                      </form>   
                  </div>
             </div>
           </div>
         </section>
		 
		 <?php include "footer.php"; ?>
         <script src = "jquery-3.4.1.min.js"></script>

</body>
</html>