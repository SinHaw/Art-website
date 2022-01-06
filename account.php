<?php
session_start();
$username = $_SESSION['MM_Username'];

require_once("connection.php");

$sql = "SELECT * FROM transact WHERE username = '$username'";

$orders = mysqli_query($conn, $sql)



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/Account.css">

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

            <li><div class="cart"><a href="show_cart.php" title="cart">Cart<img src="images/Cart.png" width="50px" height="40px"></a></div></li>
            <?php if (isset($_SESSION['MM_Username'])) {
                echo '<li><div class="dropdown"><button class="dropbtn">Logout</button>
                <div class="dropdown-content">
                  <a href="logout.php">Logout</a>
                  <a href="account.php">Account</a>
                </div> </div></li>';
            } else {
                echo '<li><a href="login.php?login=1">Login<img src="" width="0px" height="40px" id="logon"></a> </li>';
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
    <?php if (isset($_SESSION['MM_Username'])) {
    } else {
        header("Location:index.php?alert=2");
    }

    ?>
    <div class="container">

        <nav>
            <a data-id="1">My Account</a>
            <a data-id="3">Order History</a>
        </nav>
        <main>
            <div class="active">

                <img src="<?php echo ($_SESSION['picture']) ?>" id="profile">
                <form method="POST" action="changeAccountDetails.php" enctype="multipart/form-data" id="form">

                    <label>Username:</label>

                    <input type="text" id="username" name="username" /><br>

                    <label>Password:</label>

                    <input type="password" id="txtPassword" name="txtpassword" /><br>

                    <label>Confirm Password:</label>

                    <input type="password" id="txtConfirmPassword" /><br>

                    <div id="message"></div>
                    <label>Change Profile Picture:</label>
                    <input type="file" name="fileToUpload"><br>
                    <input type="submit" id="btnSubmit" value="Change" onclick="return Validate()" />

                </form>
            </div>
            <div>
                <table style="width:100%">
                    <tr>
                        <th>Product Name</th>
                        <th>Unit Cost</th>
                        <th>Qty</th>
                        <th>Total Cost</th>
                        <th>Date</th>

                    </tr>

                    <?php
                    $grandtotal = 0;
                    while ($product = mysqli_fetch_assoc($orders)) {
                        $totalCost = $product['price'] * $product['qty'];
                        $grandtotal += $totalCost;


                    ?>
                        <tr>
                            <td>
                                <section class="product"><img src="Products/<?php echo $product['images'] ?>">
                                    <p><?php echo $product['name'] ?></p>
                                </section>
                            </td>
                            <td>
                                <section class="price"><?php echo "$" . $product['price'] ?></section>
                            </td>
                            <td>
                                <section class="qty"><?php echo $product['qty'] ?></section>
                            </td>


                            <td>
                                <section class="totalcost"><?php echo "$" . $totalCost ?></section>
                            </td>
                            <td>
                                <section class="totalcost"><?php echo $product['Date'] ?></section>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>

                    <tr>
                        <td colspan="3 " id="Total">Grand Total:</td>
                        <td>
                            <section class="grandtotal">$<?php echo $grandtotal ?></section>
                        </td>

                    </tr>
                </table>
            </div>
    </div>
    </main>

    </div>
    <script src="js/account.js"></script>






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