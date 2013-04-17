<?php	 	 		 		 	 	 		 		 		 		 		 	

	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "__global";
	
    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}

$school = "13";

$dateID = 182;
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

$mailingList = $_GET["radio0"];

// Escape User Input to help prevent SQL Injection

	//$school = mysql_real_escape_string($school);
	$dateID = mysql_real_escape_string($dateID);
	$timeID = mysql_real_escape_string($timeID);
	
	$firstName = mysql_real_escape_string($firstName);
	//$preferredName = mysql_real_escape_string($preferredName);
	$lastName = mysql_real_escape_string($lastName);
	
	$email = mysql_real_escape_string($email);
	$phone = mysql_real_escape_string($phone);
	
	$choice1 = mysql_real_escape_string($choice1);
	$choice2 = mysql_real_escape_string($choice2);
	$choice3 = mysql_real_escape_string($choice3);
	
	$industry = mysql_real_escape_string($industry);
	$learn = mysql_real_escape_string($learn);
	
	$theseTimes = "x_rec_" . $school. "_times";			

	
	
// CONFIRM SLOT AVAILABILITY
	$openSlots = "SELECT slots_filled, slots_total FROM `".$database."`.`".$theseTimes."` WHERE id=$timeID";
	//echo $openSlots;
	$slotsResults = mysql_query($openSlots);
	while($slotQuery = mysql_fetch_array($slotsResults)){
		$filled = $slotQuery['slots_filled'];
		$open = $slotQuery['slots_total'];		
	}

	// IF TIME SLOTS ARE AVAILABLE	
	if($open>$filled){
// UPDATE SLOTS_FILLED
	$updateRegistrationCount = "UPDATE `".$database."`.`".$theseTimes."` SET slots_filled = slots_filled + 1 WHERE id=".$timeID.";";
	//echo $updateRegistrationCount;
	mysql_query($updateRegistrationCount);


// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME	

	$theseRegistrants = "x_rec_" . $school . "_registrants";	
	$addStudent = "INSERT INTO `".$database."`.`".$theseRegistrants."` (dateID, timeID, firstName, lastName, email, phone, choice1, choice2, choice3, industry, learn) VALUES ('".$dateID."', '".$timeID."', '".$firstName."', '".$lastName."', '".$email."', '".$phone."', '".$choice1."', '".$choice2."', '".$choice3."', '".$industry."', '".$learn."');";		
	//echo $addStudent;		
	mysql_query($addStudent);
				



// GET READABLE DATE FORMAT
$datesQuery = "SELECT slot_date FROM `".$database."`.`x_rec_chatdates` WHERE id=".$dateID.";";
$datesResult = mysql_query($datesQuery);
	
while($datesRow = mysql_fetch_array($datesResult)){
  
	$confirmedDate = $datesRow['slot_date'];
	}

// GET READABLE TIME FORMAT
$timesQuery = "SELECT slot_time FROM `".$database."`.`x_rec_".$school."_times` WHERE id=".$timeID.";";
$timesResult = mysql_query($timesQuery);

//echo $timesQuery;

while($timesRow = mysql_fetch_array($timesResult)){
	$confirmedTime = $timesRow['slot_time'];
}


$to      = 'Jayanth.Raghavan@atkearney.com';
$subject = 'University of Pennsylvania Coffee Chat Registration';
$message = '<html><h2>Registration Form: A.T. Kearney Full-Time Business Analyst Coffee Chat Sign-up</h2><br/>';

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
$message .= '<br/><strong>What would you like to learn about A.T. Kearney?</strong><br/>';
$message .= $learn;
$message .= '<p>Join mailing list: '.$mailingList;



$headers = 'From: recruiting@atkearney.com' . "\r\n" .
    'Reply-To: recruiting@atkearney.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "\r\nCc: Joseph.Blount@atkearney.com, paul.solans@atkearney.com\r\n\r\n";

$status = mail($to, $subject, $message, $headers);

//echo "status: ".$status;





echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>
Thank you for submitting your coffee chat request.  You are currently scheduled to meet at $confirmedTime on 
September 21, 2012.  
We look forward to meeting with you.</p><p>If you need to change your time slot or have any other questions or concerns, please contact 
<a href='mailto:Jayanth.Raghavan@atkearney.com'>Jay Raghavan</a> or <a href='mailto:Joseph.Blount@atkearney.com'>Joseph Blount</a></b>.</p>";
}
else {
echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>
The time slot you selected has been filled. <a href='http://www.atkearney.com/penn-coffee-chats' target='_parent'>Click here</a> to select an available time slot.</p>";
}
?>
