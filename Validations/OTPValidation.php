<?php
	require_once("../Connections/db_connection.php");
	if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
		session_start();
		$OTP = $_POST['twoFactorSMS'];
		$Csql = "SELECT IsVerified FROM `userverification` WHERE UserID = ".$_SESSION['NewUserID'];
		$Cquery = mysqli_query($conn,$Csql);
		$Crow=mysqli_fetch_assoc($Cquery);
		if($Crow['IsVerified']==="0"){
			$sql = "SELECT OTP FROM `userverification` WHERE UserID = ".$_SESSION['NewUserID'];
			$query = mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($query);
			if($row['OTP']===$OTP){
				$Esql = "SELECT COUNT(*) AS NE FROM `userverification` 
						WHERE Expiry > CURRENT_TIMESTAMP AND UserID = ".$_SESSION['NewUserID'];
				$Equery = mysqli_query($conn,$Esql);
				$Erow=mysqli_fetch_assoc($Equery);
				if($Erow['NE']==0){
					header("Location: ../index.php");
				}
				else{
					$Usql = "UPDATE `userverification` SET `IsVerified` = '1' 
							WHERE `userverification`.`UserID` = ".$_SESSION['NewUserID'];
					$Uquery = mysqli_query($conn,$Usql);
					$_SESSION['Verified']="1";
					header("Location: ../SetPassword.php");
				}
			}
			else {
				header("Location: ../SetPassword.php");
			}
		}
		else{
			header("Location: ../index.php");
		}
	}
?>