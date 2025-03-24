<?php
	require './includes/common.php';
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Change Password</title>       
    </head>
    
    <body>
        <?php
	require './includes/header.php';
	?>
        
        <div class="container panel-margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Change Password</h2>
                </div>
                <div class="panel-body">
                    <form action="settings_script.php" method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="retypepassword" placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
        require './includes/footer.php';
        ?>
        
    </body>
</html>
