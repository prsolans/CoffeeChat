<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];	

	//display all current sign ups for the designated date
	
$theseRegistrants = "x_rec_" . $thisSchool . "_registrants";


$registrantDisplay = 'SELECT * FROM `'.$database.'`.`'.$theseRegistrants.'` WHERE dateID = ' .$selectedDate. ' ORDER BY timeID ASC;';
//echo $registrantDisplay;
$registrantResult = mysql_query($registrantDisplay);

echo "<table border='1' cellpadding='7' style='padding: 7px; text-align: center;'><tr><td colspan='2'><B>CURRENT SIGN UPS</b></td></tr>";

echo "<tr><th style='text-align: left;'>Time</th><th>Name</th></tr>";


while ($registrantRow = mysql_fetch_array($registrantResult)){
			

		echo "<tr><td style='text-align: left;'>";

		
		$theseTimes = "x_rec_" .$thisSchool . "_times";

		$signupDisplay = 'SELECT slot_time FROM `'.$database.'`.`'.$theseTimes.'` WHERE date = ' .$selectedDate. ' AND id = '.$registrantRow['timeID'].';';
		$signupResult = mysql_query($signupDisplay);

		//echo $signupDisplay;
		
	
		
		while($signupRow = mysql_fetch_array($signupResult)){
			echo $signupRow['slot_time'];
			
		}
		
			echo "</td><td>";
			// DISPLAY REGISTRANT NAME
			
			if($registrantRow['preferredName'] != ''){
			$studentName = $registrantRow['preferredName']. " " .$registrantRow['lastName'];	
			echo $studentName;
			echo "</td></tr>";

			}
			
		else{
			$studentName = $registrantRow['firstName']. " " .$registrantRow['lastName'];	
			echo $studentName;
			echo "</td></tr>";

		}
		
			

}


echo "<tr><td colspan='2'><a href='registrants.php?school=".$thisSchool."&amp;date=".$thisDate."'>See full registration details</a></td></tr>";
echo "</table>";

?>
