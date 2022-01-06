<!doctype html>
<html>
<?php session_start(); ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="Css/Css_Reset.css">
  <link rel="stylesheet" href="Css/Global.css">
  <link rel="stylesheet" href="Css/Login.css">
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

  <div class="container">

    <nav>
      <a data-id="1">Login</a>
      <a data-id="2">Register</a>
    </nav>
    <main>
      <?php if (isset($_SESSION['MM_Username'])) {
        header("Location:index.php?alert=4");
      } else {
      }

      ?>
      <div <?php
            if (isset($_GET['login']) or isset($_GET['fail'])) {
              echo 'class="active"';
            } ?>>

        <form id="form1" name="form1" method="post" action="checklogin.php">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username">
          <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
          <p>
            <input type="submit" name="submit" id="submit" value="Login">


            <?php
            $val = isset($_GET['fail']) ? $_GET['fail'] : "";

            if ($val == 1)
              echo "<b>Invalid username or password</b>";
            else if ($val == 2)
              echo "<b>You have successfully logout</b>";
            ?>


        </form>
      </div>





      <div <?php if (isset($_GET['reg']) or isset($_GET['success']) or isset($_GET['type']) or isset($_GET['failreg'])) {
              echo 'class= "active"';
            }  ?>>
        <form action="register.php" method="post" enctype="multipart/form-data">

          <label for="">Name:</label>
          <input type="text" name="name" required>

          <label for="">Password:</label>
          <input type="password" name="Password" required>

          <label for="">Email Address:</label>
          <input type="text" name="email" required>

          <label for="">Delivery Address:</label>
          <input type="text" name="address" required>

          <label for="">Phone number:</label>
          <input type="Number" name="Phone" required>

          <label>Profile Picture:</label>
          <input type="file" name="fileToUpload">
          <?php
          if (isset($_GET['type'])) {
            echo "<h3>Invalid File type</h3>";
          }
          ?>
          <?php
          $val = isset($_GET['fail']) ? $_GET['fail'] : "";

          if ($val == 1)
            echo "<b>Email Already Used</b>";
          ?>
          <?php
          $val = (isset($_GET['success']) ? $_GET['success'] : "");
          if ($val == 1) {
            echo "<b>You have successfully registered</b>";
          }
          ?>
          <input type="submit" value="Register" required>

        </form>



      </div>
    </main>

  </div>
  <script src="js/login.js"></script>
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