<?php
	require_once("../../Connections/db_connection.php");
	if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
		session_start();
		$ID = $_POST['inputMembershipID'];
		$FName = $_POST['inputMemberFirstName'];
		$LName = $_POST['inputMemberLastName'];
		$DOB = $_POST['inputDOB'];
		$Email = $_POST['inputMemberEmail'];
		$PH = $_POST['inputPhoneNumber'];
		$Gender = $_POST['MemberGender'];
		$Aadhar = $_POST['inputAadharCardNumber'];
		$PAN = $_POST['inputPANCardNumber'];
		$FullName = $FName . " " . $LName;

		$sql = "SELECT SocietyID FROM `adminmaster` where UserID = ".$_SESSION['User'];
		$query = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($query);
		$Society = $row['SocietyID'];
		
		$sql1 = "INSERT INTO `membermaster` 
				(`SocietyId`, `MembershipCode`, `MemberName`, 
				`MemberFirstName`, `MemberLastName`, `RowModifiedByUser`) 
				VALUES ('$Society', '$ID', '$FullName', '$FName', '$LName', '".$_SESSION['User']."')";
		$query1 = mysqli_query($conn,$sql1);
		
		$sql2 = "SELECT MemberID FROM `membermaster`
				where SocietyId = '$Society' AND MembershipCode = '$ID' AND MemberName = '$FullName'
				AND MemberFirstName = '$FName' AND MemberLastName = '$LName'";
		$query2 = mysqli_query($conn,$sql2);
		$row2 = mysqli_fetch_assoc($query2);
		$MemberID = $row2['MemberID'];

		if($Gender===""){
			$sql3 = "INSERT INTO `memberdetails` 
				(`MemberID`, `MemberEmailID`, `MemberMobileNo`, `DateOfBirth`) 
				VALUES ('$MemberID', '$Email', '$PH', '$DOB')";
			$query3 = mysqli_query($conn,$sql3);
		}
		else{
			$sql4 = "SELECT GenderId FROM Gender WHERE Gender = '$Gender'";
			$query4 = mysqli_query($conn,$sql4);
			$row4 = mysqli_fetch_assoc($query4);
			$GenID = $row4;
			$sql5 = "INSERT INTO `memberdetails` 
				(`MemberID`, `MemberEmailID`, `MemberMobileNo`, `DateOfBirth`, `GenderId`) 
				VALUES ('$MemberID', '$Email', '$PH', '$DOB', '$GenID')";
			$query5 = mysqli_query($conn,$sql5);
		}
		
		$sql6 = "INSERT INTO `memberkycdetails` 
				(`MemberID`, `AadharCard`, `PANCard`) 
				VALUES ('$MemberID', '$Aadhar', '$PAN')";
		$query6 = mysqli_query($conn,$sql6);
		
		if($Email!="" AND $PH!=""){
			$sql7 = "INSERT INTO `usermaster` 
				(`UserFirstName`, `UserLastName`, `UserMobileNumber`, `UserEmailID`, 
				`IsActive`, `LoginStatus`, `LoginCount`, `IsFirstLogin`, `ModifiedByUserID`) 
				VALUES ('$FName', '$LName', '$PH', '$Email', '1', '0', '0', '1', '".$_SESSION['User']."')";
			$query7 = mysqli_query($conn,$sql7);
		}
		header("Location: ../../Members.php");
	}
?>