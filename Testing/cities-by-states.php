<?php
require_once "../Connections/db_connection.php";
$state_id = $_POST["state_id"];
$result = mysqli_query($conn,"SELECT * FROM `cities` where StateId = $state_id");
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["Id"];?>"><?php echo $row["CityName"];?></option>
<?php
}
?>