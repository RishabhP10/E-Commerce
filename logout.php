<?php
	require './includes/common.php';
	
	if(!isset($_SESSION["email_id"]))
        {
		header("location: index.php");
	}
        else
        {
		session_unset();
		session_destroy();
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta charset="UTF-8">
        <title>Lifestyle Store</title>       
    </head>
    
	<body>
	<?php
	require './includes/header.php';
	?>
            
        <div class="container panel-margin">
            <div class="alert alert-success">
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
        </div>
            
	<?php
	require './includes/footer.php';
	?>
            
	</body>
</html>
