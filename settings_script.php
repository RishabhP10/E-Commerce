<?php
	require './includes/common.php';
	if(!isset($_SESSION["email_id"]))
        {
		header("location: index.php");
        }
       else
        {

        $user_id = $_SESSION["id"];
        $email = $_SESSION["email"];

        $new_password = md5(mysqli_real_escape_string($conn, $_POST["newpassword"]));
        $retype_pass = md5(mysqli_real_escape_string($conn, $_POST["retypepassword"]));

        if($new_password != $retype_pass)
        {
            echo "The passwords do not match. Try again.";
        }
        else
        {
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            header("location: settings.php");
        }  
        }
?>

