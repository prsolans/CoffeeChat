<?php	 	 		 		 	 	 		 		 		 		 		 	

include('config/connect.php');

$choice1 = $choice2 = $choice3 = $question1 = $question2 = '';

$school = $_GET['school'];
$dateID = $_GET['date'];
$timeID = $_GET["time"];

$firstName = $_GET["first_name"];
$lastName = $_GET["last_name"];

$email = $_GET["email"];
$phone = $_GET["phone"];

if(isset($_GET["1st_choice"])){
$choice1 = $_GET["1st_choice"];
$choice1 = mysql_real_escape_string($choice1);
}
if(isset($_GET["2nd_choice"])){
$choice2 = $_GET["2nd_choice"];
$choice2 = mysql_real_escape_string($choice2);
}
if(isset($_GET["3rd_choice"])){
$choice3 = $_GET["3rd_choice"];
$choice3 = mysql_real_escape_string($choice3);
}
if(isset($_GET["question1"])){
$question1 = $_GET["question1"];
$question1 = mysql_real_escape_string($question1);
}
if(isset($_GET["question2"])){
$question2 = $_GET["question2"];
$question2 = mysql_real_escape_string($question2);
}

// Escape User Input to help prevent SQL Injection

	$school = mysql_real_escape_string($school);
	$dateID = mysql_real_escape_string($dateID);
	$timeID = mysql_real_escape_string($timeID);
	
	$firstName = mysql_real_escape_string($firstName);
	$lastName = mysql_real_escape_string($lastName);
	
	$email = mysql_real_escape_string($email);
	$phone = mysql_real_escape_string($phone);
	
	

// GET SCHOOL DETAILS
	$schoolquery = "SELECT * FROM `".$database."`.`School` WHERE id=$school";
	$schoolResults = mysql_query($schoolquery);

	while($schooldate = mysql_fetch_array($schoolResults)){
		$schoolName = $schooldate['name'];
		$contactname = $schooldate['contactname'];
		$contactemail = $schooldate['contactemail'];
		$formurl = $schooldate['formurl'];
	}
		
// CONFIRM SLOT AVAILABILITY
	$openSlots = "SELECT slots_filled, slots_total FROM `".$database."`.`Timeslot` WHERE id=$timeID";
	//echo $openSlots;
	$slotsResults = mysql_query($openSlots);
	while($slotQuery = mysql_fetch_array($slotsResults)){
		$filled = $slotQuery['slots_filled'];
		$open = $slotQuery['slots_total'];		
	}

	// IF TIME SLOTS ARE AVAILABLE	
	if($open>$filled){
// UPDATE SLOTS_FILLED
	$updateRegistrationCount = "UPDATE `".$database."`.`Timeslot` SET slots_filled = slots_filled + 1 WHERE id=".$timeID.";";
	//echo $updateRegistrationCount;
	mysql_query($updateRegistrationCount);


// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME	

	$addStudent = "INSERT INTO `".$database."`.`Registration` (eventdate, timeslot, firstname, lastname, email, phone, add1, add2, add3, question1, question2) VALUES ('".$dateID."', '".$timeID."', '".$firstName."', '".$lastName."', '".$email."', '".$phone."', '".$choice1."', '".$choice2."', '".$choice3."', '".$question1."', '".$question2."');";		
	//echo $addStudent;		
	mysql_query($addStudent);
				



// GET READABLE DATE FORMAT
$datesQuery = "SELECT eventdate FROM `".$database."`.`EventDate` WHERE id=".$dateID.";";
$datesResult = mysql_query($datesQuery);
	
while($datesRow = mysql_fetch_array($datesResult)){
  
	$confirmedDate = $datesRow['eventdate'];
	}

// GET READABLE TIME FORMAT
$timesQuery = "SELECT slot_time FROM `".$database."`.`Timeslot` WHERE id=".$timeID.";";
$timesResult = mysql_query($timesQuery);

//echo $timesQuery;

while($timesRow = mysql_fetch_array($timesResult)){
	$confirmedTime = $timesRow['slot_time'];
}


$to      = $contactemail;
$subject = $schoolName." Event Registration";
$message = '<html><h2>A student has registered for a session.</h2><br/>';

$message .= '<strong>Registrant details</strong><br/>';
$message .= $firstName.''.$lastName.'<br/>';

$message .= $confirmedDate." ".$confirmedTime;
$message .= '<br/><a href="mailto:'.$email.'">'.$email.'</a>';
$message .= '<br/><strong>Office Preferences</strong><br/>';
$message .= $choice1.', '.$choice2.', '.$choice3.'<br/>';

$headers = 'From: '.$contactemail.'' . "\r\n" .
    'Reply-To: '.$contactemail.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion(). "\r\n";

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'Cc: prsolans@gmail.com' . "\r\n";
//$headers .= 'Bcc: ' . "\r\n";

$status = mail($to, $subject, $message, $headers);

echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>
Thank you for submitting your coffee chat request.  You are currently scheduled to meet on ".$confirmedDate." at ".$confirmedTime.". We look forward to meeting with you.</p><p>If you need to change your time slot or have any other questions or concerns, please contact 
<a style='color: #e88a24' href='mailto:".$contactemail."'>".$contactname."</a>.</p>";
}
else {
echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>
The time slot you selected has been filled. <a href='$formurl' target='_parent'>Click here</a> to select an available time slot.</p>";
}
?>
