<?php 
	$u = $_POST['username'] ;   // name of the input field is ’username’
	$p = $_POST['password'] ;
	
	$conn = mysqli_connect("localhost", "root", "","project_database" );	
	

$sql = "SELECT * FROM member WHERE Name = '$u' and Password='$p'  " ; 
$search_result = mysqli_query($conn , $sql);   
$m = mysqli_fetch_assoc($search_result);

$userfound = mysqli_num_rows($search_result);

if($userfound >= 1)    
	{

		session_start();
		$_SESSION['MM_Username']=$u;
		$_SESSION['id']=$m['Id'];
		$_SESSION['picture']=$m['Profile_Picture'];

		header("Location:index.php");  	
	}
	else     
	{
		header("Location:login.php?fail=1");  	
	}
	
	
?>
