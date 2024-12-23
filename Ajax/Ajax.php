<?php
    require_once("../Connections/db_connection.php");
    if(!isset($conn))
	{
		die("Connection Error").mysqli_connect_error();
	}
	if(isset($conn))
	{
        $State_sql=
            "SELECT StateName 
            FROM states 
            WHERE CountryID =
                (SELECT ID 
                FROM countries 
                WHERE CountryName = 'India')";
		$State_result=mysqli_query($conn,$State_sql);
        $City_sql=
            "SELECT CityName 
            FROM cities 
            WHERE StateId =
                (SELECT ID 
                FROM states 
                WHERE StateName = 'Maharashtra')";
		$City_result=mysqli_query($conn,$City_sql);
	}
    session_start();
?>

<div id="State">
    <option value="">Select State</option>
    <?php
        while($row = mysqli_fetch_array($result)) {
    ?>
        <option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
    <?php
        }
    ?>                                              
</div>

<div id="City">
    <label class="small mb-1" for="inputCity">City</label>
    <select class="form-control" id="inputCity">
        <?php
            while($City_row=mysqli_fetch_assoc($City_result)){
        ?>
            <option value="<?php echo $City_row['CityName'] ?>"><?php echo $City_row['CityName'] ?></option>
        <?php
            }
        ?>
    </select>                                                
</div>

