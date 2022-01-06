<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/Index.css">
</head>
<?php

$filter = "";
$conn = mysqli_connect("localhost", "root", "", "project_database");
$sql_ = "SELECT * FROM product LIMIT 6";
$product_list = mysqli_query($conn, $sql_);
$sql = "SELECT * FROM partners LIMIT 6";
$partners_list = mysqli_query($conn, $sql);
$sqli = "SELECT * FROM brand ";
$brand_list = mysqli_query($conn, $sqli);



mysqli_close($conn);

?>

<body>
    

    <div class="header">
        <div id="logo">
            <a href="index.php"><img src="images/ovj-logo.png"></a>

        </div>
        <div id="search">
            <form action="search.php" method="post">
                <input type="text" placeholder="SEARCH" id="searchbar"size="15" name="search">

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
            } else {
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

    <div class="banner">
        <a href="Products.php?banner=Paint" title="home"><img src="images/banner.jpg"></a>
    </div>
    <div class="section">

        <h1 class="productHeader">New Products</h1>

        <div class="productlist">


            <?php while ($one_product = mysqli_fetch_assoc($product_list)) { ?>
                <div class="product">

                    <div class="image"><a href="ProductDetails.php?id=<?php echo $one_product['Id']; ?>"><input type=image src="Products/<?php echo $one_product['Image']; ?>"></div><br>
                    <div id="details">
                        <div class="name"><?php echo $one_product['Name']; ?></div><br>
                        <div class="price">$<?php echo $one_product['Price']; ?></a></div>
                        <form action="add_to_cart.php" method="post" id="form">
                            <button>Add to Cart</button>
                            <input type="hidden" name="name" value="<?php echo $one_product["Name"] ?>" />
                            <input type="hidden" name="price" value="<?php echo $one_product["Price"] ?>" />
                            <input type="hidden" name="img" value="<?php echo $one_product["Image"] ?>" />


                        </form>
                    </div><br>
                </div>

            <?php }  ?>
        </div>
        <h1 class="brandHeader">Featured Brands</h1>
        <div class="brandList">

            <?php while ($one_brand = mysqli_fetch_assoc($brand_list)) { ?>
                <div class="brands">

                    <a href="Products.php?id=<?php echo $one_brand['Brand']; ?>" title="home"><img src="images/<?php echo $one_brand['Image']; ?>" title="<?php echo $one_brand['Brand'] ?>"></a>

                </div>

            <?php }  ?>

        </div>
        <h1 class="partnersHeader">Affliated Partners</h1>
        <div class="partnersList">

            <?php while ($one_partner = mysqli_fetch_assoc($partners_list)) { ?>
                <div class="partners">


                    <a href="<?php echo $one_partner['Link']; ?>" title="home"><img src="images/<?php echo $one_partner['Images']; ?>" title="<?php echo $one_partner['Name'] ?>"></a>


                </div>

            <?php }  ?>
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
    <?php
    $val = isset($_GET['alert']) ? $_GET['alert'] : "";

    if ($val == 1) {
        echo "<script>alert('Success Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.')</script>";
    }
    if ($val == 2) {
        echo "<script>alert('Please register or login to access your account')</script>";
    }

    if ($val == 3) {
        echo "<script>alert('Please register or login to access your cart')</script>";
    }
    if ($val == 4) {
        echo "<script>alert('You have already logged in')</script>";
    }

    ?>


</body>

</html>