<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="Css/Css_Reset.css">
    <link rel="stylesheet" href="Css/Global.css">
    <link rel="stylesheet" href="Css/About_us.css">
</head>

<body>


    <div class="header">
        <div id="logo">
            <a href="index.php"><img src="images/ovj-logo.png"></a>

        </div>
        <div id="search">
            <form action="search.php" method="post">
                <input type="text" id="searchbar" placeholder="SEARCH" size="15" name="search">

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
            <img src="images/AboutUs_Image_Opt1.jpg">
        </div>
        <div id="about">
            <h1>ABOUT US</h1>
            <hr size="5px" width="600px" color=black id="bar">
            <h4>Overjoyed - We Are Here For You</h4>
            <h5>Let’s Connect</h5>
            <hr width="600px" color=black id="bar">
            <p><b>Be a part of our strong community of creatives</b> - artists, Writers, sculptors, illustrators,<br>
                doodlers,makers, collaborators, Calligraphers, dreamers and all.</p>

            <p>Whatever you choose to call yourself, we’re cool with that and we’re cool with you. Cuz we <br>love
                you,you
                are worthwhile, you are special, you are unique and we want to get to know <br>you and for everyone else
                to eet you too!</p>
            <p>Check in often, get in the action of what’s happening and make sure you stay connected <br>and show us
                your
                special magic touch. We’d love to connect with you throughout the week<br> in our physical store; or if
                you
                wish online via our Instagram, leave a note, leave a<br>
                message, we will be in touch.</p>
            <p>We have opportunities to join our vibrant community through art workshops, Instagram Live<br> feeds and
                stories, coffee or (tea if you prefer) chat sessions and Art supply drop-ins at your<br> event. We want
                to
                support you. We want to walk with you.</p>
            <p>Let’s do this ! Together we can.</p>
            <hr size="5px" width="600px" color=black id="bar">

            <div class="socialmedia">
                <li><a href="https://www.facebook.com/overjoyedxyz" title="Facebook"><img src="images/734386_facebook_media_online_social_icon.png"></a></li>
                <li><a href="https://twitter.com/overjoyedxyz" title="Twitter"><img src="images/734367_media_online_social_twitter_icon.png"></a></li>
                <li><a href="https://www.instagram.com/overjoyedxyz/" title="Instagram"><img src="images/734395_instagram_media_online_photo_social_icon.png"></a></li>
                <li><a href="https://www.youtube.com/channel/UCSOJcw_irQVst3F4K67uXJg" title="Youtube"><img src="images/734362_media_online_social_tube_youtube_icon.png"></a></li>
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

</body>

</html>