<?php
	require_once("../Connections/db_connection.php");
	if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
		session_start();
		$UserName = $_POST['UName'];
		$Password = $_POST['UPass'];
		$sql = "SELECT COUNT(UserID) AS Logs FROM `usermaster` 
				WHERE UserEmailID = '$UserName' 
				AND Password = '$Password'";
		$query = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($query);
		if($row['Logs']>0){
			$sql = "SELECT * FROM `usermaster` 
				WHERE UserEmailID = '$UserName' 
				AND Password = '$Password'";
			$query = mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($query);
			if($row['IsActive'] == "1"){
				$LC = $row['LoginCount']+1;
				$sql1 = "UPDATE `usermaster` 
						SET `LoginStatus` = '1',`LoginCount` = '$LC' 
						WHERE `usermaster`.`UserID` = " .$row['UserID'];
				$query1 = mysqli_query($conn,$sql1);
				//setcookie("UserId", $row['UserID']);
				$_SESSION['User']=$row['UserID'];
				$sql2 = "SELECT COUNT(UserID) AS Status 
						FROM `usermaster` 
						WHERE IsFirstLogin = 1 
						AND `usermaster`.`UserID` = " .$row['UserID'];
				$query2 = mysqli_query($conn,$sql2);
				$row2=mysqli_fetch_assoc($query2);
				if($row2['Status'] == "1"){
					$sql3 = "UPDATE `usermaster` 
						SET `IsFirstLogin` = '0' 
						WHERE `usermaster`.`UserID` = " .$row['UserID'];
					$query3 = mysqli_query($conn,$sql3);
					header("Location: ../AccountProfile.php");
				}
				else {
					header("Location: ../dashboard.php");
				}
			}
			else{
				echo "InActive Account";
				header("Location: ../Login.html");
			}
		}
		else {
			echo "Invalid UserName Or Password";
			header("Location: ../Login.html");
		}	
	}
?>