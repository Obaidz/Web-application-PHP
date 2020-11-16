
<?php include "forms_header.php";

?>

<?php
include "public_nav.php";
?>

   <!-- contact section -->
         <section id="contactSec">
           <div class="container">
           	 <h2>Login</h2>
              <p>Welcome Back:</p>
	             <div class="contact-form">
	                  <!-- First grid -->
	                  <div>
	                    <i class="fa fa-map-marker"></i><span class="form-info">  DFS </span><br>
	                    <i class="fa fa-phone" > </i><span class="form-info"> Be Part of the community</span><br>
	                    <i class="fa fa-envelope"></i><span class="form-info"> Dublin Fitness Club</span>
	                  </div>
	                  
	                      <!-- second grid -->
	                    <div id = "grid2">        
						  <form id = "form" action="login.php" method="POST">
		                    <div id = "grid2"> 
		                        <input class="form-control" name="email" type="email" placeholder="Enter your email" required>
		                        <input name="password" class="form-control" type="password" placeholder="Password" required>
								<button type="submit" class="submit" id = "mybutton" name="login">Login</button>
		                    </div>
	                	  </form>
	                   </div>
					   
	             </div>
           </div>
         </section>
		 <?php include "footer.php"; ?>
         <script src = "jquery-3.4.1.min.js"></script>
	 	
	 </body>
<html>
