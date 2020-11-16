<?php include "testimonial_header.php";
session_start();
?>

<?php include "member_nav.php";

?>

<body>
<div class="bodyCSS">


	<div class="container">
         
         
		 
		 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		       <div class="carousel-inner" role="listbox">
		            <div class="carousel-item active">
	                         <h3 class="client-name"> <?php echo $_SESSION["user_name"] ?> </h3>
	                         <h3 class="client-name"> <?php echo $_SESSION["user_type"] ?> </h3>
	                         <h3 class="client-name"> <?php echo $_SESSION["user_email"] ?> </h3>
	                         <img src="img/profile3.png" class="rounded-circle mx-auto d-block ProfileImg" width="100">
	                         <br>
							 <br>
							 <br>
							 <br>
	
		            </div>
		                            
				</div>
		                       
		  </div>
		  
      </div>
</div>


<?php include "footer.php"; ?>
<script src="javascr.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>