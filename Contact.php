<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/Contact.css">
    
    
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
    <div class="content">
        <div id="portrait">
            <img src="images/ContactUs_Image_Opt1.jpg">
        </div>
        <div id="Contact">
            <h1>CONTACT US</h1>
            <hr size="5px" width="600px" color=black id="bar">
            <p>For any enquires or feedback related to our product, service, marketing promotion or <BR>general support
                matters, contact us at <b>+65 6466 4366</b> (10am - 6pm, Monday to Friday) or<br> fill up the contact form below.
            </p>
            <form id="feedback"  method="post" action="feedback.php">
                <input type="text" placeholder="Name*" required size="60" id="username"><br>
                <div class="feedbackname"></div>
                <input type="email" placeholder="Email Address*" required size="60" id="email"><br>
                <div class="feedbackemail"></div>
                <input type="tel" placeholder="Telephone"  size="60" id="tel"><br>
                <input type="text" placeholder="Comment*" required size="60" ><br>
                <input type="submit" value="Submit >" onclick="isFormDataValid()">
            </form>
            <h2>For any workshop enquires or feedback, contact us at <a href="mailto: workshop@overjoyed.com.sg">workshop@overjoyed.com.sg</a></h2>
                

            <hr size="5px" width="600px" color=black id="bar">

            <div class="socialmedia">
                <li><a href="https://www.facebook.com/overjoyedxyz" title="Facebook"><img
                            src="images/734386_facebook_media_online_social_icon.png"></a></li>
                <li><a href="https://twitter.com/overjoyedxyz" title="Twitter"><img
                            src="images/734367_media_online_social_twitter_icon.png"></a></li>
                <li><a href="https://www.instagram.com/overjoyedxyz/" title="Instagram"><img
                            src="images/734395_instagram_media_online_photo_social_icon.png"></a></li>
                <li><a href="https://www.youtube.com/channel/UCSOJcw_irQVst3F4K67uXJg" title="Youtube"><img
                            src="images/734362_media_online_social_tube_youtube_icon.png"></a></li>
            </div>



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
    <script src="Js/contact.js"></script>
</body>

</html>