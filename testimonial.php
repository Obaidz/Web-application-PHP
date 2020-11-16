<?php include "forms_header.php";

?>


<?php include "public_nav.php";

?>
<div class="bodyCSS">

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){ 
		/*
		$ID = TRIM($_POST['ID']);
		$ID2 = TRIM($_POST['ID2']);
		$ID3 = TRIM($_POST['ID3']);
		REQUIRE('/HOME/S2961591/CONNECTION.PHP');
		$QUERY = "SELECT * FROM TESTIMONIAL WHERE ID ='$ID' OR ID ='$ID2' OR ID = '$ID3'";
		$RESULT = @MYSQLI_QUERY($DB_CONNECTION, $QUERY); // RUN QUERY*/
		
		if(isset($_POST["submit2"])) { 
		$id = trim($_POST['id']);
		$id2 = trim($_POST['id2']);
		$id3 = trim($_POST['id3']);
	
		require('/home/s2961591/connection.php');
		$query = "SELECT * FROM testimonial WHERE id ='$id'";
		$result = @mysqli_query($db_connection, $query);
		
		$query2 = "SELECT * FROM testimonial WHERE id ='$id2'";
		$result2 = @mysqli_query($db_connection, $query2);
		
		$query3 = "SELECT * FROM testimonial WHERE id ='$id3'";
		$result3 = @mysqli_query($db_connection, $query3);
		
	
?>
   
	<div class="container">
	
	
         <h1 class="text-center page-title"> What our <span>Members</span> Say </h1> 
         <hr>
         
		 
		 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		       <div class="carousel-inner" role="listbox">
		            <div class="carousel-item active">
		                  <?php while($row = mysqli_fetch_array($result)){
	                             
	                     
	                       	 ?>
	                         <p class="client-desc"> <?php echo $row['comment']; ?> </p>
	                         <h3 class="client-name"> <?php echo $row['first_Name']; ?> </h3>
	                         <h3 class="client-name"> <?php echo $row['Class']; ?>  </h3>
	                         <h3 class="client-name"> <?php echo $row['date']; ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	                         <?php 
	                     
	                     	 }
	                     	 ?>
		            </div>
		                              
					<div class="carousel-item">
		                   <?php while($row = mysqli_fetch_array($result2)){
	                             
	                     
	                         ?>
	                         <p class="client-desc"> <?php echo $row['comment']; ?> </p>
	                         <h3 class="client-name"> <?php echo $row['first_Name']; ?> </h3>
	                         <h3 class="client-name"> <?php echo $row['Class']; ?>  </h3>
	                         <h3 class="client-name"> <?php echo $row['date']; ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	                         <?php 
	                     
	                         }
	                         ?>
		            </div>
		                              
					<div class="carousel-item">
		                  	<?php while($row = mysqli_fetch_array($result3)){
	                             
	                     
	                         ?>
	                         <p class="client-desc"> <?php echo $row['comment']; ?> </p>
	                         <h3 class="client-name"> <?php echo $row['first_Name']; ?> </h3>
	                         <h3 class="client-name"> <?php echo $row['Class']; ?>  </h3> 
	                         <h3 class="client-name"> <?php echo $row['date']; ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	                     	 <?php 
	                     
	                     	 }
	                     	 ?>
		            </div>
		                            
				</div>
		                       
		  </div>
		  
      </div>
		 
		<?php 
			
		}
	}
	else {
		
		require('/home/s2961591/connection.php');
		$query = "SELECT * FROM testimonial WHERE id ='1'";
		$result = @mysqli_query($db_connection, $query); // run query
		
		$query2 = "SELECT * FROM testimonial WHERE id ='2'";
		$result2 = @mysqli_query($db_connection, $query2); // run query
		
		$query3 = "SELECT * FROM testimonial WHERE id ='3'";
		$result3 = @mysqli_query($db_connection, $query3); // run query
	?>
	
	<div class="container">
	
	
         <h1 class="text-center page-title"> What our <span>Members</span> Say </h1> 
         <hr>
         
		 
		 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		       <div class="carousel-inner" role="listbox">
		            <div class="carousel-item active">
		                  <?php while($row = mysqli_fetch_array($result)){
	                             
	                     
	                       	 ?>
	                         <p class="client-desc"> <?php echo $row['comment']; ?> </p>
	                         <h3 class="client-name"> <?php echo $row['first_Name']; ?> </h3>
	                         <h3 class="client-name"> <?php echo $row['Class']; ?>  </h3>
	                         <h3 class="client-name"> <?php echo $row['date']; ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	                         <?php 
	                     
	                     	 }
	                     	 ?>
		            </div>
		                              
					<div class="carousel-item">
		                   <?php while($row = mysqli_fetch_array($result2)){
	                             
	                     
	                         ?>
	                         <p class="client-desc"> <?php echo $row['comment']; ?> </p>
	                         <h3 class="client-name"> <?php echo $row['first_Name']; ?> </h3>
	                         <h3 class="client-name"> <?php echo $row['Class']; ?>  </h3>
	                         <h3 class="client-name"> <?php echo $row['date']; ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	                         <?php 
	                     
	                         }
	                         ?>
		            </div>
		                              
					<div class="carousel-item">
		                  	<?php while($row = mysqli_fetch_array($result3)){
	                             
	                     
	                         ?>
	                         <p class="client-desc"> <?php echo $row['comment']; ?> </p>
	                         <h3 class="client-name"> <?php echo $row['first_Name']; ?> </h3>
	                         <h3 class="client-name"> <?php echo $row['Class']; ?>  </h3> 
	                         <h3 class="client-name"> <?php echo $row['date']; ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	                     	 <?php 
	                     
	                     	 }
	                     	 ?>
		            </div>
		                            
				</div>
		                       
		  </div>
		  
      </div>       
<?php 
			
 }
?>
</div>
<?php include "footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>