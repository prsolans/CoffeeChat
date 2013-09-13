<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

$theseTimes = "x_rec_" .$thisSchool . "_times";

$signupDisplay = 'SELECT * FROM `'.$database.'`.`'.$theseTimes.'` WHERE date = ' .$selectedDate. ';';
$signupResult = mysql_query($signupDisplay);

echo "<table border='1' cellpadding='7' style='padding: 7px; text-align: center;'><tr><td colspan='4'><b># SLOTS AVAILABLE</b></td></tr>";
echo "<tr><th style='text-align: left;'>Time</th><th># Total</th><th># Taken</th><th># Empty</th></tr>";
while($signupRow = mysql_fetch_array($signupResult)){

		echo "<tr><td style='text-align: left;'>";
			// SLOT TIME
		echo $signupRow['slot_time'];
		echo "</td><td>";
			// TOTAL NUMBER OF CONSULTANTS AVAILABLE AT THIS TIME
		echo $signupRow['slots_total'];
		echo "</td><td>";
			// SPOTS AT THIS TIME THAT ARE CURRENTLY REGISTERED FOR
			
			echo $signupRow['slots_filled'];
	
	
		echo "</td><td>";
			// REMAINING SPOTS AVAILABLE
		$empty = $signupRow['slots_total'];
		$empty = $empty - $signupRow['slots_filled'];
		echo $empty;
				echo "</td></tr>";

}
echo "</table>";




?>
