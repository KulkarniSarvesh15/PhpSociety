<?php
require_once "../Connections/db_connection.php";
$country_id = $_POST["country_id"];
$result = mysqli_query($conn,"SELECT * FROM `states` where CountryId = $country_id");
?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["Id"];?>"><?php echo $row["StateName"];?></option>
<?php
}
?>