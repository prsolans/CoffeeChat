<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

	// Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$selectedDate = mysql_real_escape_string($selectedDate);


echo "<table border='1' cellpadding='7' style='padding: 7px; text-align: center;'><tr><td><b>ADD STUDENT TO TIME SLOT:</b></td></tr>";

echo "<tr><td><form name='deleteStudent' action='add_student2.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<input type='hidden' name='date' value='" .$selectedDate. "' />";




			

// SELECTABLE LIST OF AVAILABLE TIME SLOTS FOR THIS DAY
$theseTimes = "x_rec_" . $thisSchool . "_times";

$timeDisplay = 'SELECT * FROM `__global`.`'.$theseTimes.'` WHERE active = 1 AND date = ' .$selectedDate. ' ORDER BY date, id ASC;';
$timeResult = mysql_query($timeDisplay);

	
echo "<select name='time'>";
while($timeRow = mysql_fetch_array($timeResult)){
	
		$registrantDisplay = 'SELECT COUNT(*) as TOTAL FROM `__global`.`'.$theseRegistrants.'` WHERE date = ' .$selectedDate. ' AND id= '.$timeRow['id'].';';
		$registrantResult = mysql_query($registrantDisplay);
		
		
		$registrantRow = mysql_fetch_array($registrantResult);
			$currentlyRegistered = $registrantRow[0];
			echo $currentlyRegistered;
		
		
	
	if ($timeRow['slots_filled'] < $timeRow['slots_total']){
		echo "<option value='" .$timeRow['id']. "'>".$timeRow['slot_time']. "</option>";	
	}
	else {echo "BLAHBLAH";}
}

echo "</select>";

echo "<input name='student' type='textbox' />";

?>
</td></tr>
<tr><td>
<input type="submit" value="ADD STUDENT" />
</form>
</td></tr>
</table>
