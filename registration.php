<?php include "forms_header.php";

?>


<?php include "public_nav.php"; 

?>
     
   <!-- contact section -->
         <section id="contactSec">
           <div class="container">
           	 <h2>Register</h2>
              <p>BECOME A MEMBER:</p>
             <div class="contact-form">

                  <!-- First grid -->
                  <div>
                    <i class="fa fa-map-marker"></i><span class="form-info">  DFC</span><br>
                    <i class="fa fa-phone" > </i><span class="form-info">  be part of the community</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info">  Dublin Fitness Club </span>
                  </div>
                  
                      <!-- second grid -->
                    <div id = "grid2">        
                      <form id = "form" action = "registration_validate.php" method = "POST">
                            <input type="numeric" name="ID_number" value ='<?php echo $ID_number; ?>' maxlength="25" placeholder="Enter ID"  required/>
							<input type="password" name="password" maxlength="25" placeholder="Enter Password"  required/>
							<input type="text" name="first_name" value ='<?php echo $first_name; ?>' class="form-control mb-4" placeholder="Enter First Name" maxlength="25" required/>
							<input type="text" name="last_name" value='<?php echo $last_name; ?>' class="form-control mb-4" placeholder="Enter Last Name" maxlength=25 required/>
							<input type="tel" name="mobile_no" class="form-control mb-4" value ='<?php echo $mobile_no; ?>' placeholder="home: +353860040400" required/>
							<input type="tel" name="home_no" value='<?php echo $home_no; ?>' class="form-control mb-4" placeholder="other: +353860040400"/>
							<input type="date" name="date_of_birth" class="form-control mb-4" value='<?php echo $date_of_birth ; ?>' placeholder="Enter Date of Birth" required/>
							<input type="text" name="address" value ='<?php echo $address1; ?>' placeholder=" Line 1, Apt, street" placeholder="Enter Address Line 1" required/> 
							<input type="text" name="address2" value='<?php echo $address2; ?>' placeholder="Enter Address Line 2">
							<input type="email" value='<?php echo $email; ?>' name="email" required/ placeholder="Enter Email">
							<input type="text" name="eircode" value='<?php echo $eircode; ?>' placeholder="Eircode: D02F2F9" maxlength=8 />
							<input type="text" name="membership" value='<?php echo $membership; ?>' placeholder="MEMBERSHIP: ADULT" maxlength=15 required>
						
							
                            <button class="submit" type = "submit" id = "mybutton">Send Message</button> 
                      </form>   
                  </div>
             </div>
           </div>
         </section>
		 <?php include "footer.php"; ?>
         <script src = "jquery-3.4.1.min.js"></script>
	 </body>
</html>