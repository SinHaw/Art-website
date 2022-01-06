<?php
if (isset($_SESSION['MM_Username'])) {
    header("Location:index.php");
} 
else {
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>New-User Register</h2>
    <form action="register" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" >
        </div>
        <div>
            <label for="">Password:</label>
            <input type="password" name="Password" >
        </div>
        <div>
            <label for="">Email Address:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Delivery Address:</label>
            <input type="text" name="address">
        </div>
        <div>
        <label for="">Phone number:</label>
            <input type="Number" name="Phone">
        </div>
        <div>
            <label for="">
                <picture></picture>
            </label>
            <input type="file" name="fileToUpload">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>

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
    

</body>

</html>