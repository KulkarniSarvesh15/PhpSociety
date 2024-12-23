<?php
	require_once("../Connections/db_connection.php");
    if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
        $state_id = $_POST["state_id"];
		$result = mysqli_query($conn,"SELECT * FROM `cities` WHERE StateId = $state_id");
	}
    session_start();	
?>
<option value="">Select City</option>
<?php
	while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
	}
?>