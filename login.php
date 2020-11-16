<!DOCTYPE html>
<html lang="en">
<?php
session_start();
session_destroy();
?>
<head>
    <title>Login check</title>
</head>

<body>
<?php

require('/home/s2961591/connection.php'); 

if (isset($_POST["login"])) { 
    $email = $_POST["email"];
    $password = $_POST["password"];
	$status = $_POST["status"];

    $query = "SELECT * FROM admin";
    $result = @mysqli_query($db_connection, $query);
    if (!$result) {
        die("ERROR!!!".mysqli_error($db_connection));
        
    } 
    else {
        
        while ($row = mysqli_fetch_array($result)) {
            $id = $row["admin_id"];
            $name = $row["admin_name"];
            $user_type = $row["status"];
            $login_email = $row["email"];
            $login_password = $row["admin_password"];

            if ($email == $login_email && $password == $login_password) {
				
                session_start();
                $_SESSION["id"] = $id;
                $_SESSION["user_name"] = $name;
				$_SESSION["user_email"] = $login_email;
                $_SESSION["user_type"] = $user_type;
                header("location: admin.php");
            }
			else {
				echo "Invalid Email or Password";
			}
			
        }
    }
	
    $query2 = "SELECT * FROM user";
    $result2 = @mysqli_query($db_connection, $query2);
    if (!$result2) {
        die("ERROR!!!".mysqli_error($db_connection));
    } 
    else {
        while ($row = mysqli_fetch_array($result2)) {
            $Mid = $row["id"];
            $Mfname = $row["firstName"];
            $MLname = $row["lastName"];
            $Muser_type = $row["membership"];
            $Mlogin_email = $row["email"];
            $Mlogin_password = $row["password"];

            if ($email == $Mlogin_email && $password == $Mlogin_password) {
				
                session_start();
                $_SESSION["id"] = $Mid;
                $_SESSION["user_name"] = $Mfname." ".$MLname;
				$_SESSION["user_email"] = $Mlogin_email;
                $_SESSION["user_type"] = $Muser_type;

                header("location: member.php");
            }
			else {
				echo "<br>"."Invalid Email or Password";
			}
			  
        }
    }
	
	
}
?>
</body>
</html>
