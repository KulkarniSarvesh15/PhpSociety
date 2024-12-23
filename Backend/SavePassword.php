<?php
	require_once("../Connections/db_connection.php");
	if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
		session_start();
		$UserID = $_SESSION['NewUserID'];
		$Pass = $_POST['newPassword'];
		$sql = "UPDATE `usermaster` SET `Password` = '$Pass'
				WHERE `usermaster`.`UserID` = ".$UserID;
		$query = mysqli_query($conn,$sql);
		echo $sql;
		header("Location: ../Login.html");
	}
?>