<?php
	require_once("../Connections/db_connection.php");
	if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
		session_start();
		$UserMobileNo = $_POST['RUName'];
		$Email = $_POST['REmail'];
		$sql = "SELECT COUNT(UserID) AS Logs FROM `usermaster` 
				WHERE UserMobileNumber = '$UserMobileNo' 
				AND UserEmailId = '$Email'";
		$query = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($query);
		if($row['Logs']>0){
			$sql = "SELECT UserID, Password FROM `usermaster` 
				WHERE UserMobileNumber = '$UserMobileNo' 
				AND UserEmailId = '$Email'";
			$query = mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($query);
			$_SESSION['NewUserID']=$row['UserID'];
			require_once("../Backend/SendOTPMail.php");
			$_SESSION['Verified']="0";
			header("Location: ../SetPassword.php");
		}
		else {
			header("Location: ../Login.html");
		}
	}
?>