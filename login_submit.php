<?php
    require "./includes/common.php";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_password = md5($password);
    
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query_result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($query_result)== 0)
    {
        echo "User Account Does Not Exists.";
    }
    else
    {
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row["id"];
        
        header("location: product.php");
    }
?>
