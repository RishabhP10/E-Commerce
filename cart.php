<?php
    require './includes/common.php';
    if(!isset($_SESSION["email_id"]))
    {
        header("location: login.php");
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
        <title>My Cart</title>       
    </head>
    
    <body>
        <?php
            require './includes/header.php';

            $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
        ?>
        
        <div class="container panel-margin">
            <table class="table table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: Rs. <?php echo $total; ?></td>
                    <td><a href="success.html" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>

         <?php
            }
            require './includes/footer.php';
        ?>
        
    </body>
</html>
