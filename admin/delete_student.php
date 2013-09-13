<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

	// build query of STUDENT NAMES scheduled for this DATE at this SCHOOL
	
	$theseRegistrants = "x_rec_" . $thisSchool . "_registrants";
	
$signupDisplay = 'SELECT * FROM `'.$database.'`.`'.$theseRegistrants.'` WHERE dateID = ' .$selectedDate. ' ORDER BY timeID ASC;';

//echo  $signupDisplay;
$signupResult = mysql_query($signupDisplay);

echo "<table border='1' cellpadding='7' style='padding: 7px; text-align: center;'><tr><td><b>DELETE STUDENT FROM TIME SLOT:</b></td></tr>";

echo "<tr><td><form name='deleteStudent' action='delete_student_action.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<input type='hidden' name='date' value='" .$selectedDate. "' />";


echo "<select name='student'>";

while($signupRow = mysql_fetch_array($signupResult)){
	
	$thisTime = $signupRow['timeID'];
	
	
	echo "<option name='student' value='" .$signupRow['id']. ".".$signupRow['timeID']. "'>" .$signupRow['firstName']. " ".$signupRow['lastName']. " | ";
	
	$theseTimes = "x_rec_" .$thisSchool . "_times";
	
	$timeDisplay = 'SELECT slot_time FROM `'.$database.'`.`'.$theseTimes.'` WHERE date = ' .$selectedDate. ' AND id = '.$signupRow['timeID'].';';
	$timeResult = mysql_query($timeDisplay);

	//echo $signupDisplay;
		
		while($timeRow = mysql_fetch_array($timeResult)){
			echo $timeRow[0];
			
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
