<?php	 	 		 		 	 	 		 		 		 		 		 	
  
$thisSchool = $_GET['school'];
$thisDate = $_GET['date'];


	// Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$thisDate = mysql_real_escape_string($thisDate);


echo "<p>For each time, please input the number of slots that should be made available to students.</p>";
	// GET the chosen times from the URL
$chosenTime = "timeChosen";


// SELECTABLE LIST OF AVAILABLE TIME SLOTS FOR THIS DAY


$timeQuery = 'SELECT * FROM `'.$database.'`.`Timeslot` WHERE date = ' .$thisDate;
$timeResult = mysql_query($timeQuery);
	
echo "<form name='updateNoAvailable' action='timeslot_picker_action.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<input type='hidden' name='date' value='" .$selectedDate. "' />";

echo "<table>";

while($timeRow = mysql_fetch_array($timeResult)){
	echo "<tr><td>" .$timeRow['slot_time']. "</td><td>";
	echo "<input style='margin-left: 9px;' type='textarea' name='no".$timeRow['id']."' value='".$timeRow['slots_total']."' size='1'/>";
	echo "</td></tr>";	

}
echo "</table>";

?>
<br/><input type="submit" value="Update Slots Available"/>
</form>
