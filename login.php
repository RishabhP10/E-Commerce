<?php
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
        <title>Login</title>       
    </head>
    
    <body>
        <?php
        require "./includes/header.php";
	?>
        
        <div class="container panel-margin">
            <div class="panel panel-primary">
                
                <div class="panel-heading">
                    <h3 class="panel-title">LOGIN</h3>
                </div>
                
                <div class="panel-body">
                    <div class="text-warning">Login to make a purchase</div><br>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                
                <div class="panel-footer">
                    Don't have an account? <a href="signup.html">Register</a>
                </div>
            </div>
        </div>
        
        <?php
	require "./includes/footer.php";
        ?>
        
    </body>
</html>
