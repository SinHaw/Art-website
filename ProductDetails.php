<?php

$id = $_GET['id'];


require_once("connection.php");

$sql = "SELECT * FROM product WHERE Id=$id";

$selectedProduct = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($selectedProduct);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $product["Name"] ?></title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/ProductDetails.css">
</head>

<body>

    <div class="header">
        <div id="logo">
            <a href="index.php"><img src="images/ovj-logo.png"></a>

        </div>
        <div id="search">
            <form action="search.php" method="post">
                <input type="text" id="searchbar" placeholder="SEARCH" size="30" name="search">

            </form>

        </div>
        <div class="login">
            <li><a href="show_cart.php" title="cart">Cart<img src="images/Cart.png" width="50px" height="40px"></a></li>
            <?php if (isset($_SESSION['MM_Username'])) {
               echo '<li><div class="dropdown"><button class="dropbtn">Logout</button>
               <div class="dropdown-content">
                 <a href="logout.php">Logout</a>
                 <a href="account.php">Account</a>
               </div> </div></li>';
                echo '<li><a href="login.php?login=1">Login<img src="" width="0px" height="40px" id="logon"></a </li>';
            }

            ?>
        </div>

    </div>

    <div id="menu">
        <li><a href="index.php" title="home">Home</a></li>
        <li><a href="About_us.php" title="about">About</a></li>
        <li><a href="Products.php" title="Products">Product</a></li>
        <li><a href="Contact.php" title="contact">Contact Us</a></li>
    </div>
    <hr size="5px" width="1200px" color=black>
    <div class="content">
        <div class="image"><img src="Products/<?php echo $product["Image"] ?>" alt="" height="400px" width="auto"></div>
        <div class="information">
            <div class="brand"><?php echo $product["Brand"] ?></div>
            <div class="name"><?php echo $product["Name"] ?></div>
            &nbsp;<br>
            &nbsp;<br>

            <div class="price">$<?php echo number_format($product["Price"], 2) ?></div>

            <div><span id="blank"></span><span id="description"><?php echo $product["Description"] ?></span></div>

            <button onclick="myFunction()" id="myBtn">Show Details</button>




            <form action="add_to_cart.php" method="post" id="form">
                <button>Add to Cart</button>
                <input type="hidden" name="name" value="<?php echo $product["Name"] ?>" />
                <input type="hidden" name="price" value="<?php echo $product["Price"] ?>" />
                <input type="hidden" name="img" value="<?php echo $product["Image"] ?>" />


            </form>

        </div>

    </div>


    <div class="footer">
        <div id="footerlink">
            <li><a href="account.php" title="account">Your Account</a></li>
            <li><a href="About_us.php" title="about">About</a></li>
            <li><a href="login.php?reg=1" title="register">Register</a></li>
            <li><a href="Contact.php" title="contact">Contact Us</a></li>
        </div>
        <p>© 2021 OVERJOYED. ALL RIGHTS RESERVED.</p>
    </div>
    <script src="js/Productdetails.js"></script>

    </script>
</body>

</html>