<?php
    if(isset($_SESSION[email]))
    {
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
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta charset="UTF-8">
        <title>Lifestyle Store</title>       
    </head>
    
    <body>
        
        <?php
        require "./includes/header.php";
        ?>
        
        <div id="banner-image">
            <div class="container">
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF.</p>
                    <a href="product.php"><button class="btn btn-danger btn-lg active">Shop Now</button></a>
                </div>
            </div>
        </div>
       
        
         <?php
        require "./includes/footer.php";
        ?>
          
    </body>
</html>
