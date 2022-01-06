<?php
$name = $_POST['name'];
$password = $_POST['Password'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['Phone'];
$file = $_FILES['fileToUpload'];


$allowedType = array("image/gif", "image/jpeg", "image/jpg", "image/png");

if (!in_array($file["type"], $allowedType)) {
    echo "File Type is invalid";
    header("location:login.php?type=1");
}
$target = "profile_picture/" . $name . "_" . $file['name'];

$result = move_uploaded_file($file["tmp_name"], $target);

if ($result == true) {

    doSaveData($email, $name, $password, $address, $phone, $target);
}

function doSaveData($email, $name, $password, $address, $phone, $target)
{
    $conn = mysqli_connect("localhost", "root", "", "project_database");
    $sql = "SELECT * FROM member WHERE email='$email'  ";
    $search_result = mysqli_query($conn, $sql);
    $emailfound = mysqli_num_rows($search_result);
    if ($emailfound >= 1) {
        header("location:login.php?failreg=1");
    } else {
        $sql = "INSERT INTO member(Email,Name,Password,Delivery_Address,Phone_Number,Profile_Picture) VALUES('$email','$name','$password','$address','$phone','$target')";

        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            echo "Successfully Registered";
            header("location:Login.php?success=1");
        } else {
            echo "Data NOT Saved !!!";
        }
    }
}
