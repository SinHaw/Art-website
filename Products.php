<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/Product.css">
</head>
<?php
session_start();
$filter = "";
if (isset($_SESSION['category'])) {
    $cont_selected = $_SESSION['category'];
    $filter = " WHERE category ='$cont_selected'";
}
if (isset($_SESSION['brand'])) {
    $brand_selected = $_SESSION['brand'];
    $filter = " WHERE Brand ='$brand_selected'";
}

if (isset($_GET['id'])) {
    $brand_selected = $_GET['id'];
    $filter = " WHERE Brand ='$brand_selected'";
}
if (isset($_GET['banner'])) {
    $cont_selected = $_GET['banner'];
    $filter = " WHERE category ='$cont_selected'";
}
if (isset($_SESSION['SEARCH'])) {
    $search = $_SESSION['SEARCH'];
}
if (isset($_GET['search'])) {
    if ($filter == "") {
        $sql_ = "SELECT * FROM product WHERE Name OR Brand LIKE '%$search%'";
    } else {
        $sql_ = "SELECT * FROM product" . $filter;
    }
} else {

    $sql_ = "SELECT * FROM product" . $filter;
}

$conn = mysqli_connect("localhost", "root", "", "project_database");












$product_list = mysqli_query($conn, $sql_);

$sql_category = "SELECT DISTINCT category FROM product";
$category_list = mysqli_query($conn, $sql_category);

$sql_brand = "SELECT DISTINCT Brand FROM product";
$brand_list = mysqli_query($conn, $sql_brand);
mysqli_close($conn);

?>

<body>

    <div class="header">
        <div id="logo">
            <a href="index.php"><img src="images/ovj-logo.png"></a>

        </div>
        <div id="search">
            <form action="search.php" method="post">
                <input type="text" placeholder="SEARCH" size="30" name="search" id="searchbar">

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

    <div class="selectBar">
        <form id="form1" name="form1" method="post" action="Proceed_Product">
            <label>Select category:</label>
            <select name="Cont" id="Cont">

                <?php while ($one_category = mysqli_fetch_assoc($category_list)) { ?>

                    <option value="<?php echo $one_category['category']; ?>">
                        <?php echo $one_category['category']; ?>
                    </option>

                <?php } ?>

                <input type="submit" name="submit" id="submit" value="Show Category">
            </select>
        </form>
        <form id="form1" name="form1" method="post" action="Proceed_Product">
            <label>Select Brand:</label>
            <select name="brand" id="brand">



                <?php while ($one_brand = mysqli_fetch_assoc($brand_list)) { ?>

                    <option value="<?php echo $one_brand['Brand']; ?>">
                        <?php echo $one_brand['Brand']; ?>
                    </option>

                <?php } ?>
                <input type="submit" name="submit" id="submit" value="Show Brand">
            </select>

        </form>
    </div>
    <br>
    <?php
    if (isset($_SESSION['category']) or isset($_GET['banner'])) {
        echo "<h1>" . $cont_selected . "</h1>";
        $_SESSION['category'] = NULL;
    } ?>
    <?php
    if (isset($_SESSION['brand']) or isset($_GET['id'])) {
        echo "<h1>" . $brand_selected . "</h1>";
        $_SESSION['brand'] = NULL;
    } ?>
    <div class="productlist">


        <?php while ($one_product = mysqli_fetch_assoc($product_list)) { ?>
            <div class="product">

                <div class="image"><a href="ProductDetails.php?id=<?php echo $one_product['Id']; ?>"><input type=image width="auto" height="250" src="Products/<?php echo $one_product['Image']; ?>"></div><br>
                <div id="details">
                    <div class="name"><?php echo $one_product['Name']; ?></div><br>
                    <div class="price">$<?php echo $one_product['Price']; ?></div>
                </div><br>
            </div>

        <?php }  ?>
    </div>
    </table>

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