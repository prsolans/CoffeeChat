<?php	 	 		 		 	 	 		 		 		 		 		 	
require_once('connect.php');

$date = $_GET["date"];
$school = $_GET["school"];
$timesQuery = "SELECT id, slot_time FROM `__global`.`x_rec_".$school."_times` WHERE date = '".$date."' AND slots_total > slots_filled ORDER BY id;";
$timesResult = mysql_query($timesQuery);

//echo "HELLO";

//echo $timesQuery;


$num_rows = mysql_num_rows($timesResult);

if ($num_rows > 0){
echo "<select name='time' id='time'>";

while($timesRow = mysql_fetch_array($timesResult)){
	echo "<option value='" .$timesRow['id']. "'>" .$timesRow['slot_time']. "</option>";	
}
echo "</select>";
}

else {echo "<strong style='color: red;'>All time slots for this date have been filled. Please check for additional slots on different dates.</strong>";}
?>
