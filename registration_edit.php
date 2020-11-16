<?php include "forms_header.php";

?>

<?php
include "admin_nav.php";
?>
   <!-- contact section -->
         <section id="contactSec">
           <div class="container">
           	 <h2>Registration Index</h2>
              <p>Edit fee information on index page:</p>
             <div class="contact-form"> 

                  <!-- First grid -->
                  <div>
                    <i class="fa fa-map-marker"></i><span class="form-info">  DFC </span><br>
                    <i class="fa fa-phone" > </i><span class="form-info">  Be part of the community</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info">  Dublin Fittness Club</span>
                  </div>
                  
                      <!-- second grid -->
                    <div id = "grid2">        					  
					  
					    <form id = "form" action="fee_validate.php" method="POST">
                   
                    
	                        <input name="feeEdit" type="text"  placeholder="Enter amount of fee want to change" required>
	                  
	                        <input name="membership" type="text" placeholder="MEMBERSHIP TYPE: e.g STUDENT" required>
	                  
						
							<input type="submit" name="submit" value="Register" class="submit" id="mybutton">
	                    	
                    
                		</form>
					 
                  </div>
             </div>
           </div>
         </section>
		 <?php include "footer.php"; ?>
         <script src = "jquery-3.4.1.min.js"></script>
	 </body>
<html>