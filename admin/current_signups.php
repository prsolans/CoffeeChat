<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];	

	//display all current sign ups for the designated date
$registrantDisplay = 'SELECT * FROM `'.$database.'`.`Registration` WHERE eventdate = ' .$selectedDate. ' ORDER BY id ASC;';
$registrantResult = mysql_query($registrantDisplay);

echo "<table class='table table-striped'><tr><td colspan='2'><B>CURRENT SIGN UPS</b></td></tr>";

echo "<tr><th style='text-align: left;'>Time</th><th>Name</th></tr>";


while ($registrantRow = mysql_fetch_array($registrantResult)){
			
		echo "<tr><td style='text-align: left;'>";

		$signupDisplay = 'SELECT slot_time FROM `'.$database.'`.`Timeslot` WHERE id = '.$registrantRow['timeslot'].';';
		$signupResult = mysql_query($signupDisplay);

		while($signupRow = mysql_fetch_array($signupResult)){
			echo $signupRow['slot_time'];
			
		}
		
		echo "</td><td>";
// DISPLAY REGISTRANT NAME			

			$studentName = $registrantRow['firstname']. " " .$registrantRow['lastname'];	
			echo $studentName;
			echo "</td></tr>";
}


echo "<tr><td colspan='2'><a href='registrants.php?school=".$thisSchool."&amp;date=".$thisDate."'>See full registration details</a></td></tr>";
echo "</table>";

?>
