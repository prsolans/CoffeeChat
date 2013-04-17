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

$school = "15";

$dateID = $_GET["date"];
$timeID = $_GET["time"];

$firstName = $_GET["first_name"];
$preferredName = $_GET["preferred_name"];
$lastName = $_GET["last_name"];
$first_choice = $_GET["1st_choice"];
$second_choice = $_GET["2nd_choice"];
$third_choice = $_GET["3rd_choice"];
$industry = $_GET["industry"];
$learn = $_GET["learn"];


$email = $_GET["email"];
$phone = $_GET["phone"];

	$theseTimes = "x_rec_" . $school. "_times";			

// Escape User Input to help prevent SQL Injection

	//$school = mysql_real_escape_string($school);
	$dateID = mysql_real_escape_string($dateID);
	$timeID = mysql_real_escape_string($timeID);
	
	$firstName = mysql_real_escape_string($firstName);
	$preferredName = mysql_real_escape_string($preferredName);
	$lastName = mysql_real_escape_string($lastName);
	
	$email = mysql_real_escape_string($email);
	$phone = mysql_real_escape_string($phone);
	
	$industry = mysql_real_escape_string($industry);
	$learn = mysql_real_escape_string($learn);
	
// CONFIRM SLOT AVAILABILITY
	$openSlots = "SELECT slots_filled, slots_total FROM `".$database."`.`".$theseTimes."` WHERE id=19";
	//echo $openSlots;
	$slotsResults = mysql_query($openSlots);
	while($slotQuery = mysql_fetch_array($slotsResults)){
		$filled = $slotQuery['slots_filled'];
		
		$open = $slotQuery['slots_total'];		
			
//	echo "F: ".$filled;
	//echo " |O: ".$open;
	}


// IF TIME SLOTS ARE AVAILABLE	
	if($open<$filled){
// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME	

	$theseRegistrants = "x_rec_" . $school . "_registrants";	
	$addStudent = "INSERT INTO `__global`.`".$theseRegistrants."` (dateID, timeID, firstName, preferredName, lastName, email, phone, choice1, choice2, choice3, industry, learn) VALUES (193, 19, '".$firstName."', '".$preferredName."', '".$lastName."', '".$email."', '".$phone."', '".$first_choice."', '".$second_choice."', '".$third_choice."', '".$industry."', '".$learn."');";		
	//echo $addStudent;		
	mysql_query($addStudent);
				

// UPDATE SLOTS_FILLED
	$theseTimes = "x_rec_" . $school. "_times";						
	$updateRegistrationCount = "UPDATE `__global`.`".$theseTimes."` SET slots_filled = slots_filled + 1 WHERE id=193";
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

// EMAIL MESSAGE TO THE ADMINS
$to      = 'paul.solans@atkearney.com';
$subject = 'Women&apos;s Networking & Wine Tasting Event';
$message = '<html><h2>Registration Form: Booth 2012</h2><br/>';

$message .= '<strong>Registrant details</strong><br/>';
$message .= $firstName;

if ($preferredName != '') {
	$message .= ' ('.$preferredName. ') ';
}

$message .= " ".$lastName. "<br/>";

$message .= $confirmedDate." ".$confirmedTime;
$message .= '<br/><a href="mailto:'.$email.'">'.$email.'</a> | '.$phone.'<br/>';

$headers = 'From: BoothMBA1Recruting@atkearney.com' . "\r\n" .
    'Reply-To: BoothMBA1Recruting@atkearney.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "\r\nBcc: paul.solans@atkearney.com\r\n\r\n";

//$status = mail($to, $subject, $message, $headers);

// EMAIL MESSAGE TO THE REGISTRANTS
$to      = $email;
$subject = 'Women&apos;s Networking & Wine Tasting Event';
$message = '<html><h2>Registration Confirmation: Booth 2012</h2><br/>';

$message .= 'Dear ';
$message .= $firstName;

$message .= ", <p>Thank you for submitting your coffee chat request.  You are currently scheduled to meet at $confirmedTime on  $confirmedDate.  We look forward to meeting with you.</p><p>If you need to change your time slot or have any other questions or concerns, please contact <a href='mailto:abe.thomas@atkearney.com?subject=Booth Coffee Chats'>Abe Thomas</a></b>.</p></div>";


$headers = 'From: BoothMBA1Recruting@atkearney.com' . "\r\n" .
    'Reply-To: BoothMBA1Recruting@atkearney.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "\r\nBcc: paul.solans@atkearney.com\r\n\r\n";

$status = mail($to, $subject, $message, $headers);


echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>
Thank you for submitting your coffee chat request.  You are currently scheduled to meet at $confirmedTime on  $confirmedDate.  We look forward to meeting with you.</p><p>If you need to change your time slot or have any other questions or concerns, please contact <a href='mailto:abe.thomas@atkearney.com?subject=Booth Coffee Chats'>Abe Thomas</a></b>.</p></div>";
}
else {


echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>Thank you for your interest in the Women’s Networking and Wine Tasting Event. Unfortunately, we are at capacity for this event. Please reach out to <a href='mailto:abe.thomas@atkearney.com?subject=Booth Coffee Chats'>Abe Thomas</a>, <a href='mailto:avani.sunder@atkearney.com?subject=Booth Coffee Chats'>Avani Sunder</a> or <a href='mailto:alissa.bernardi@atkearney.com?subject=Booth Coffee Chats'>Alissa Bernardi</a> for any questions you may have about the recruiting process or A.T. Kearney.</p>";
}
?>

