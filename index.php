<?php include "Index_header.php";

?>

<?php include "public_nav.php";

?>
        
		<?php
			require('/home/s2961591/connection.php'); 
 
		?>
					
            <section class="view0--active">
                
                <div class="modal">
                    <div class="nav default-color">
                        <div class="next nav-icon"><svg fill="#ececec" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg></div>
                        <div class="prev nav-icon"><svg fill="#ececec" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/><path d="M0-.5h24v24H0z" fill="none"/></svg></div>
                    </div>
                    <div class="modal__body">
                        <div class="circ">
                            <div class="circ3 default-color"></div>		
                            <div class="circ2"></div>
                            <div class="circ1 default-color"></div>
                        </div>
                        <div class="content">
                            <div class="tt">
                                <h1 class="content__title"></h1>
                                <p class="content__desc"></p>
                        </div>
                    </div>
                </div>
                </div>
                  
            </section>
            <h1 class="bcm"> BECOME A MEMBER</h1>													

            <section class="section2"> 
                <div class="featBox">
                    <div class="featureBox">
					
						  <?php 																	
						  $query = "SELECT * FROM page ORDER BY id DESC LIMIT 1";					
						  $result = @mysqli_query($db_connection, $query); // run query
						  while($row = mysqli_fetch_array($result)){
			
	
							?>
							
		                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">			
		                            <div class="carousel-inner" role="listbox">
		                              <div class="carousel-item active">
		                                <img class="d-block img-fluid" src= <?php echo $row['image1']; ?> /*"img/pool.jpeg"*/ alt="First slide" width="100%" >
		                              </div>
		                              <div class="carousel-item">
		                                <img class="d-block img-fluid" src= <?php echo $row['image2']; ?> /*"img/s.jpg"*/ alt="Second slide" width="100%" >
		                              </div>
		                              <div class="carousel-item">
		                                <img class="d-block img-fluid" src= <?php echo $row['image3']; ?> /*"img/tt.jpg"*/ alt="Third slide" width="100%" >
		                              </div>
		                            </div>
		                          </div>
		                    </div>
                            
							
							<div class="featureBox2">
	                        	<div class="d4">
	                            	<h1> <?php echo $row['title']; ?> </h1>							
	                            	<p> <?php echo $row['details']; ?> </p>
	                        	</div>
                    		</div>
						
							
						
                    </div>
                    
				<?php 
					}
				?>
                </div> 
            </section>
			
			
			
			<h1 class="bcm">Discounts And Offers</h1>
																									// 2nd feature box section
			<section class="section3"> 
                <div class="featBox">
                    <div class="featureBox2">
					
						  <?php
						  $query2 = "select * from page order by id desc limit 1,1"; 				// getting 2nd last value from the table, which will be the 2nd latest updated value.
						  $result2 = @mysqli_query($db_connection, $query2); // run query
						  while($row = mysqli_fetch_array($result2)){
			
	
							?>
							
	                        	<div class="d4">
	                            	<h1> <?php echo $row['title']; ?> </h1>
	                            	<p> <?php echo $row['details']; ?> </p>
									<div class='ab'><button id='followD' type='button'><a href='registration.php'> Join </a></button></div>
	                        	</div>
                    		</div>
							
							<div class="featureBox">
			                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			                            <div class="carousel-inner" role="listbox">
			                              <div class="carousel-item active">
			                                <img class="d-block img-fluid" src= <?php echo $row['image1']; ?> /*"img/sss.jpg"*/ alt="First slide" width="100%" >
			                              </div>
			                              <div class="carousel-item">
			                                <img class="d-block img-fluid" src= <?php echo $row['image2']; ?> /*"img/j.jpg"*/ alt="Second slide" width="100%" >
			                              </div>
			                              <div class="carousel-item">
			                                <img class="d-block img-fluid" src= <?php echo $row['image3']; ?> /*"img/sss.jpg"*/ alt="Third slide" width="100%" >
			                              </div>
			                            </div>
			                          </div>
			                    </div>
							</div>
                    </div>
                    
				<?php 
					}
				?>
                </div> 
            </section>
			
			
			<h1 class="bcm">Fee and Memberships</h1>
			
			<section class="section4">  
			            
					
						  <?php
						  $query3 = "select * from fee where membership='STUDENT'"; 					// Getting student fee info
						  $result3 = @mysqli_query($db_connection, $query3); // run query
						  while($row = mysqli_fetch_array($result3)){
						
	
							?>
							<div class="priceBox">
								<div class="members" > 
									<h1>ADULT </h1>
									<p> State of the art equipment / Large range of cardio equipment / Plate loaded and fixed strength ranges / Functional training zone / Range of studio classes / Personal training sessions / Speedflex studio </p>
									<br>
									<br>
									<h1>PREMIUM</h1>
									<p>In some of our clubs we offer a single gym membership giving you access to one gym only. These are only available in a limited number of clubs to please check with your local club to see if they offer this membership option </p>
									<br>
									<br>
									<h1>Student</h1>
									<p> The Gym Group offers students an exclusive nine-month membership (ideal if you go home for the summer) for £109. What's more, the £20 entry fee is included in the cost! </p>
									<br>
									<br>
						
								</div>
						
								<div class="price">
	                            	<h1> Fee:  <?php echo $row['fee']; ?> </h1>							// displaying 
	                            	<h1> Type: <?php echo $row['membership']; ?> </h1><br>
									
								</div>
							<?php 
							}
							?>
							
							
							
							<?php
							  $query4 = "select * from fee where membership='ADULT'"; 
							  $result4 = @mysqli_query($db_connection, $query4); // run query
							  while($row = mysqli_fetch_array($result4)){
			
	
							?>
								<div class="price">
	                            	<h1> Fee:  <?php echo $row['fee']; ?> </h1>
	                            	<h1> Type: <?php echo $row['membership']; ?> </h1><br>
								</div>	

							<?php 
							}
							?>
							
							<?php
							  $query5 = "select * from fee where membership='PREMIUM'"; 
							  $result5 = @mysqli_query($db_connection, $query5); // run query
							  while($row = mysqli_fetch_array($result5)){
			
	
							?>
								<div class="price">
	                            	<h1> Fee:  <?php echo $row['fee']; ?> </h1>
	                            	<h1> Type: <?php echo $row['membership']; ?> </h1><br>
								</div>	

							<?php 
							}
							?>
							</div>
                 
            </section>
		
		

?>
        
		<?php include "footer.php"; ?>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
        <script src="javascr.js"></script>
    </body>

</html>