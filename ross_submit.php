<?php	 	 		 		 	 	 		 		 		 		 		 	
include('connect.php');

$school = "9";

$dateID = $_GET["date"];
$timeID = $_GET["time"];

$firstName = $_GET["first_name"];
//$preferredName = $_GET["preferred_name"];
$lastName = $_GET["last_name"];

$email = $_GET["email"];
$phone = $_GET["phone"];

$choice1 = $_GET["1st_choice"];
$choice2 = $_GET["2nd_choice"];
$choice3 = $_GET["3rd_choice"];

$industry = $_GET["industry"];
$learn = $_GET["learn"];

//$mailingList = $_GET["radio0"];

// Escape User Input to help prevent SQL Injection

	//$school = mysql_real_escape_string($school);
	$dateID = mysql_real_escape_string($dateID);
	$timeID = mysql_real_escape_string($timeID);
	
	$firstName = mysql_real_escape_string($firstName);
	//$preferredName = mysql_real_escape_string($preferredName);
	$lastName = mysql_real_escape_string($lastName);
	
	$email = mysql_real_escape_string($email);
	$phone = mysql_real_escape_string($phone);
	
/*	$choice1 = mysql_real_escape_string($choice1);
	$choice2 = mysql_real_escape_string($choice2);
	$choice3 = mysql_real_escape_string($choice3);
	*/
	$industry = mysql_real_escape_string($industry);
	$learn = mysql_real_escape_string($learn);


// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME	

	$theseRegistrants = "x_rec_" . $school . "_registrants";	
	$addStudent = "INSERT INTO `__global`.`".$theseRegistrants."` (dateID, timeID, firstName, lastName, email, phone, industry, learn, choice1, choice2, choice3) VALUES ('".$dateID."', '".$timeID."', '".$firstName."', '".$lastName."', '".$email."', '".$phone."', '".$industry."', '".$learn."', '".$choice1."', '".$choice2."', '".$choice3."');";		
	//echo $addStudent;		
	mysql_query($addStudent);
				

// UPDATE SLOTS_FILLED
	$theseTimes = "x_rec_" . $school. "_times";						
	$updateRegistrationCount = "UPDATE `__global`.`".$theseTimes."` SET slots_filled = slots_filled + 1 WHERE id=".$timeID.";";
	//echo $updateRegistrationCount;
	mysql_query($updateRegistrationCount);

// GET READABLE DATE FORMAT
$datesQuery = 'SELECT slot_date FROM `__global`.`x_rec_chatdates` WHERE id='.$dateID.';';
$datesResult = mysql_query($datesQuery);
	
while($datesRow = mysql_fetch_array($datesResult)){
  
	$confirmedDate = $datesRow['slot_date'];
	}

// GET READABLE TIME FORMAT
$timesQuery = "SELECT slot_time FROM `__global`.`x_rec_".$school."_times` WHERE id=".$timeID.";";
$timesResult = mysql_query($timesQuery);

//echo $timesQuery;

while($timesRow = mysql_fetch_array($timesResult)){
	$confirmedTime = $timesRow['slot_time'];
}

// SENDS EMAIL TO SCHOOL CONTACT
// EDIT TO, SUBJECT, MESSAGE 
$to      = 'steve.solano@atkearney.com';
$subject = 'Ross School of Business Coffee Chat Registration';
$message = '<html><h2>Registration Form: Ross Business School First Year MBA Coffee Chats for 2013</h2><br/>';

$message .= '<strong>Registrant details</strong><br/>';
$message .= $firstName;

if ($preferredName != '') {
	$message .= ' ('.$preferredName. ') ';
}

$message .= " " .$lastName. "<br/>";

$message .= $confirmedDate." ".$confirmedTime;
$message .= '<br/><a href="mailto:'.$email.'">'.$email.'</a> | '.$phone.'<br/>';
$message .= '<br/><strong>Office Preferences</strong><br/>';
$message .= $choice1.', '.$choice2.', '.$choice3.'<br/>';
$message .= '<br/><strong>What industry did you work in prior to MBA?</strong><br/>';
$message .= $industry;
$message .= '<br/><strong>What would you like to learn about A.T. Kearney?</strong><br/>';
$message .= $learn;




$headers = 'From: RossMBA1Recruting@atkearney.com' . "\r\n" .
    'Reply-To: RossMBA1Recruting@atkearney.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= "\r\nBcc: ssolan01@atkearney.com\r\n\r\n";

$status = mail($to, $subject, $message, $headers);

echo "status: ".$status;


?>


<style type="text/css">
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p><?php //echo $status; ?>
Thank you for submitting your coffee chat request.  You are currently scheduled to meet at <?php	 	 		 		 	 	 		 		 		 		 		 	 echo $confirmedTime;?> on <?php	 	 		 		 	 	 		 		 		 		 		 	 echo $confirmedDate;?>.  We look forward to meeting with you.</p><p>If you need to change your time slot or have any other questions or concerns, please contact <a href="mailto:Danielle.Limbal@atkearney.com?subject=Columbia Coffee Chats">Danielle Limbal</a></b>.</p></div>
