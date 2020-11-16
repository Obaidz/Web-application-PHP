<!DOCTYPE html>
<html lang="en">
<?php
	require('/home/s2961591/connection.php');
	$query = "SELECT * FROM testimonial";
	$result = @mysqli_query($db_connection, $query); // run query
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>testimonial_add</title>

    <!-- Bootstrap core CSS --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">

</head>
<?php
include "admin_nav.php";
?>
<body class="bodyTestimonial">
<div class="container">
<h2>All received Testimonials</h2>
 <p>All testimonials were given by Gym members:</p>
<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Class</th>
<th>First Name</th>
<th>Date</th>
<th>Comment</th>
</tr>
</thead>

<tbody>
<?php while($row = mysqli_fetch_array($result)){
			
	
	?>
	<tr>
	<td> <?php echo $row['id']; ?> </td>
	<td> <?php echo $row['Class']; ?> </td>
	<td> <?php echo $row['first_Name']; ?> </td>
	<td> <?php echo $row['date']; ?> </td>
	<td> <?php echo $row['comment']; ?> </td>
	</tr>
	<?php 
}
?>
</tbody>
</table>
</div>

<br><br>
    <div class="container container-fluid">
        <div class="row col-sm-8">
            <h1>Manage Testimonials by selecting ID</h1>
			 <h3>Select the testimonials which you want to display</h3>
            <div class="container container-fluid"> 
                <form action="testimonial.php" method="POST"> 
                    <br><br>
					<div class="form-group">
                        <label for="id">Select ID: </label>
                        <input name="id" type="numeric" class="form-control" placeholder="25" required>
                    </div>
                    
					<div class="form-group">
                        <label for="id2">Select ID: </label>
                        <input name="id2" type="numeric" class="form-control" placeholder="25" required>
                    </div>
					
					<div class="form-group">
                        <label for="id3">Select ID: </label>
                        <input name="id3" type="numeric" class="form-control" placeholder="25" required>
                    </div>
					
                    <button type="submit" class="btn btn-primary" name="submit2">Submit</button>
                    <br><br><br><br><br>
                </form>
            </div>
        </div>
    </div><br><br>
   <?php include "footer.php"; ?> 
</body>
</html>