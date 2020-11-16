<?php include "forms_header.php";

?>

<?php
include "admin_nav.php";
?>
   <!-- contact section -->
         <section id="contactSec">
           <div class="container">
           	 <h2>Edit Index</h2>
              <p>Edit feature boxes on index page:</p>
             <div class="contact-form">

                  <!-- First grid -->
                  <div>
                    <i class="fa fa-map-marker"></i><span class="form-info">  DFC </span><br>
                    <i class="fa fa-phone" > </i><span class="form-info">  Be part of the community</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info">  Dublin Fittness Club</span>
                  </div>
                  
                      <!-- second grid -->
                    <div id = "grid2">        					  
					  
					    <form id = "form" action="index_edit_validate.php" method="POST">
                   
                    
	                        <input name="featBTitle" type="text" class="form-control" placeholder="Enter tilte of feature box" required>
	                  
	                        
	                        <textarea class = "form-control" name="featBDetail" rows = "6" placeholder = "Enter Details"></textarea>
	                    
						
						
	                        <input name="featBImage" type="text" class="form-control" value="img/" placeholder="Image 1, img/abc.jpg" required>
	                   
						
					
	                        <input name="featBImage2" type="text" class="form-control" value="img/" placeholder="Image 2, img/xyz.png" required>
	                    
						
	                        <input name="featBImage3" type="text" class="form-control" value="img/" placeholder="Image 3, img/abc.jpeg" required>
	                  
						
							<button class="submit" type = "submit" id = "mybutton" name="login">Edit</button>
	                    	
                    
                		</form>
					 
                  </div>
             </div>
           </div>
         </section>
		 <?php include "footer.php"; ?>
         <script src = "jquery-3.4.1.min.js"></script>
	 </body>
<html>