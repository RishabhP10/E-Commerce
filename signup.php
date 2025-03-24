<?php
	if(isset($_SESSION["id"])){
		header("location: product.php");
	}
	require "./includes/common.php";
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
        <title>Sign Up</title>       
    </head>
    
    <body>
        <?php
        require "./includes/header.php";
        ?>
        
        <div class="container panel-margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>SIGN UP</h2>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="contact" placeholder="Contact" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="panel-footer">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </div>
        </div>
        
        <?php
        require "./includes/footer.php";
	?>
        
    </body>
</html>
