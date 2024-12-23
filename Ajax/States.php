<?php
	require_once("../Connections/db_connection.php");
    if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
        $country_id = $_POST["country_id"];
		$result = mysqli_query($conn,"SELECT * FROM `states` WHERE CountryId =  = $country_id");
	}
    session_start();	
?>
<option value="">Select State</option>
<?php
	while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["Id"];?>"><?php echo $row["StateName"];?></option>
<?php
	}
?>