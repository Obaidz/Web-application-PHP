<!DOCTYPE html>
<html lang="en">
<?php
	require('/home/s2961591/connection.php');
	$query = "SELECT * FROM contact_us";
	$result = @mysqli_query($db_connection, $query); 
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>manage contacts</title>

    <!-- Bootstrap core CSS --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">

</head>


<?php
include "admin_nav.php";			
?>



<body class= "manageContacts">
<div class="container">
<h2>All received Messages</h2>
 <p>All Messages were given by Gym members:</p>
<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Message</th>
</tr>
</thead>

<tbody>
<?php while($row = mysqli_fetch_array($result)){			
			
	
	?>
	<tr>
	<td> <?php echo $row['id']; ?> </td>
	<td> <?php echo $row['name']; ?> </td>
	<td> <?php echo $row['email']; ?> </td>
	<td> <?php echo $row['phone']; ?> </td>
	<td> <?php echo $row['message']; ?> </td>
	</tr>
	<?php 
}
?>
</tbody>
</table>
</div>

<?php include "footer.php"; ?>
    
</body>
</html>