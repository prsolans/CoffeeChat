<?php	 	 		
include('../config/connect.php');


	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];	

	//display all current sign ups for the designated date

$registrantDisplay = 'SELECT * FROM `'.$database.'`.`Registration` WHERE eventdate = ' .$selectedDate. ' ORDER BY timeslot ASC;';
$registrantResult = mysql_query($registrantDisplay);


echo "<table border='1' cellpadding='7' style='padding: 7px; text-align: center;'><tr><td colspan='10'><B>CURRENT SIGN UPS</b></td></tr>";

echo "<tr><th style='text-align: left;'>Time</th><th>Name</th><th>Email</th><th>Phone</th><th>Industry</th><th>Learn</th><th>Office 1</th><th>Office 2</th><th>Office 3</th></tr>";


while ($registrantRow = mysql_fetch_array($registrantResult)){
			

		echo "<tr><td style='text-align: left;'>";

		$signupDisplay = 'SELECT slot_time FROM `'.$database.'`.`Timeslot` WHERE date = ' .$selectedDate. ' AND id = '.$registrantRow['timeslot'].';';
		$signupResult = mysql_query($signupDisplay);

		while($signupRow = mysql_fetch_array($signupResult)){
			echo $signupRow['slot_time'];
			
		}
		
			echo "</td><td>";
			// Name
				$studentName = $registrantRow['firstname']. " " .$registrantRow['lastname'];	
				echo $studentName;
			
			// Email and Phone
			echo "</td><td>".$registrantRow['email']."</td><td>".$registrantRow['phone']."</td>";

			// Additional information
			echo "<td>".$registrantRow['question1']."</td><td>".$registrantRow['question2']."</td><td>".$registrantRow['add1']."</td><td>".$registrantRow['add2']."</td><td>".$registrantRow['add3']."</td></tr>";

			

			
			
		
		
		
		
		
			

}
echo "</table>";

echo "<a href='date_detail.php?school=$thisSchool&date=$selectedDate'>Back to Date Details</a>"
?>
