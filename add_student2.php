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

	//debugging	

echo "<br/>";
echo $thisSchool;
echo "<br/>";
echo $selectedDate;
echo "<br/>";
echo $selectedTime;
echo "<br/>";
echo $studentName;

// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME

	// GETTING SCHOOL TABLE
	$theseRegistrants = "x_rec_" . $thisSchool . "_registrants";

	
	$addStudent = ("INSERT INTO `__global`.`".$theseRegistrants."` (date, time, registrant_name) VALUES ('".$selectedDate."', '".$selectedTime."', '".$studentName."');");
	
				//debugging
				
				echo $addStudent;		
				
				mysql_query($addStudent);
				
	
	// UPDATE SLOTS_FILLED
	$theseTimes = "x_rec_" . $thisSchool. "_times";				
				
	$updateRegistrationCount = ("UPDATE `__global`.`".$theseTimes."` SET slots_filled = slots_filled + 1 WHERE id=".$selectedTime.";");
	
	echo $updateRegistrationCount;
	
	mysql_query($updateRegistrationCount);
	
	header("Location: http://www.atkearney.com/images/test/coffeechat/coffeeChat_admin2.php?date=".$selectedDate."&school=".$thisSchool."");
	

?>
