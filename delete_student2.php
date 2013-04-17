<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];
$selectedTime = $_GET['time'];
$studentName = $_GET['student'];

	// Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$selectedDate = mysql_real_escape_string($selectedDate);
$selectedTime = mysql_real_escape_string($selectedTime);
$studentName = mysql_real_escape_string($studentName);

	

echo "<br/>";
echo $thisSchool;
echo "<br/>";
echo $selectedDate;
echo "<br/>";
echo $studentName;
echo "<br/>Explode: ";

$explode = explode(".", $studentName);

echo $explode[0]."!!".$explode[1]."<br/>";

$studentName = $explode[0];
$timeSlot = $explode[1];

	// build query of STUDENT NAMES scheduled for this DATE at this SCHOOL

	$theseRegistrants = "x_rec_" . $thisSchool . "_registrants";

	$removeStudent = ("DELETE FROM `__global`.`".$theseRegistrants."` WHERE id= ".$studentName.";");
				
	echo $removeStudent;
				
	mysql_query($removeStudent);
				
				
	// UPDATE SLOTS_FILLED
	$theseTimes = "x_rec_" . $thisSchool. "_times";				
				
	$updateRegistrationCount = ("UPDATE `__global`.`".$theseTimes."` SET slots_filled = slots_filled - 1 WHERE id=".$timeSlot.";");
	
	echo $updateRegistrationCount;
	
	mysql_query($updateRegistrationCount);
	
	header("Location: coffeeChat_admin2.php?date=".$selectedDate."&school=".$thisSchool."");
	

?>
