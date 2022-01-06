<?php
session_start();
$username = $_SESSION['MM_Username'];

require_once("connection.php");

$sql = "SELECT * FROM cart WHERE username = '$username'";

$selectedproduct = mysqli_query($conn, $sql)



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/show_cart.css">
</head>

<body>
    <?php if (isset($_SESSION['MM_Username'])) {
    } else {
        header("Location:index.php?alert=3");
    }

    ?>

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

    <table style="width:100%">
        <tr>
            <th>Product Name</th>
            <th>Unit Cost</th>
            <th>Qty</th>
            <th></th>
            <th></th>
            <th>Total Cost</th>

        </tr>

        <?php
        $grandtotal = 0;
        while ($product = mysqli_fetch_assoc($selectedproduct)) {
            $totalCost = $product['price'] * $product['qty'];
            $grandtotal += $totalCost;


        ?>
            <tr>
                <td>
                    <div class="product"><img src="Products/<?php echo $product['image'] ?>">
                        <p><?php echo $product['name'] ?></p>
                    </div>
                </td>
                <td>
                    <div class="price"><?php echo "$" . $product['price'] ?></div>
                </td>
                <td>
                    <div class="qty"><?php echo $product['qty'] ?></div>
                </td>


                <td>
                    <form action="changeQty.php" method="post">
                        Update Qty:<input type="number" name="qty" min="0">
                        <input type="hidden" name="cartid" value="<?php echo $product['Id'] ?>">
                        <button id="change">Update</button>


                    </form>

                <td>
                    <form action="delete.php" method="post">

                        <input type="hidden" name="cartid" value="<?php echo $product['Id'] ?>">
                        <button id="delete">Delete</button>



                    </form>

                </td>
                <td>
                    <div class="totalcost"><?php echo "$" . $totalCost ?></div>
                </td>

            </tr>
        <?php
        }
        ?>

        <tr>
            <td colspan="5">Grand Total:</td>
            <td>
                <div class="grandtotal">$<?php echo $grandtotal ?></div>
            </td>

        </tr>
    </table>
    <div class="navbutton">
        <div class="shopping"><a href="Products.php" title="Products">Continue Shopping</a></div>
        <div class="shopping"><a href="checkout.php" title="Products">Checkout</a></div>

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

</body>

</html>