<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

	// build query of STUDENT NAMES scheduled for this DATE at this SCHOOL
		
$signupDisplay = 'SELECT * FROM `'.$database.'`.`Registration` WHERE eventdate = ' .$selectedDate. ' ORDER BY id ASC;';
$signupResult = mysql_query($signupDisplay);

echo "<table class='table table-striped'><tr><td><b>DELETE STUDENT FROM TIME SLOT:</b></td></tr>";

echo "<tr><td><form name='deleteStudent' action='delete_student_action.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<input type='hidden' name='date' value='" .$selectedDate. "' />";

echo "<select name='student'>";

while($signupRow = mysql_fetch_array($signupResult)){
	
	$thisTime = $signupRow['timeslot'];
	
	echo "<option name='student' value='" .$signupRow['id']. ".".$signupRow['timeslot']. "'>" .$signupRow['firstname']. " ".$signupRow['lastname']. " | ";
	
	$timeDisplay = 'SELECT slot_time FROM `'.$database.'`.`Timeslot` WHERE date = ' .$selectedDate. ' AND id = '.$signupRow['timeslot'].';';
	$timeResult = mysql_query($timeDisplay);

		while($timeRow = mysql_fetch_array($timeResult)){
			echo $timeRow['slot_time'];
				}
	
	echo "</option>";	
	
}

echo "</select>";

?>
</td></tr>
<tr><td>
<input type="submit" value="DELETE" />
</form>
</td></tr>
</table>
