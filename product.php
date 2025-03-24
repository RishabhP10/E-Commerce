<?php
	require './includes/common.php';
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
        <title>Lifestyle Store</title>       
    </head>
    
    <body>
        
        <?php
        require './includes/header.php';
        require './includes/check-if-added.php';
	?>
        
        <div class="container panel-margin">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt 
                    around, we have all in one place.</p>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/c1.jpg" alt="camera">
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(1))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/c2.jpg" alt="camera">
                        <div class="caption">
                            <h3>Nikon DSLR</h3>
                            <p>Price: Rs. 40000.00 </p>
                            
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(2))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/c3.jpg" alt="camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 45000.00 </p>
                            
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(3))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/c4.jpg" alt="camera">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00 </p>
                           
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(4))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/w1.jpg" alt="watch">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13000.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(5))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/w2.jpg" alt="watch">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(6))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/w3.jpg" alt="watch">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(7))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/w4.jpg" alt="watch">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price: Rs. 18000.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(8))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/s1.jpg" alt="shirt">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(9))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/s2.jpg" alt="shirt">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(10))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/s3.jpg" alt="shirt">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(11))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/s4.jpg" alt="shirt">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs. 1300.00 </p>
                            <?php if(!isset($_SESSION["email"]))
                            { ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php }
                            else{ ?>
                            <?php if(check_if_added_to_cart(12))
                            { ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php }
                            else
                            { ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class"btn btn-primary">Add to cart</a>
                            <?php }					
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require './includes/footer.php';
        ?>
        
    </body>
</html>
