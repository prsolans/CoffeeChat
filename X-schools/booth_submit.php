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

$school = "1";

$dateID = $_GET["date"];
$timeID = $_GET["time"];

$firstName = $_GET["first_name"];
$preferredName = $_GET["preferred_name"];
$lastName = $_GET["last_name"];
$first_choice = $_GET["1st_choice"];
$second_choice = $_GET["2nd_choice"];
$third_choice = $_GET["3rd_choice"];


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
	
// CONFIRM SLOT AVAILABILITY
	$openSlots = "SELECT slots_filled, slots_total FROM `".$database."`.`".$theseTimes."` WHERE id=$timeID";
	//echo $openSlots;
	$slotsResults = mysql_query($openSlots);
	while($slotQuery = mysql_fetch_array($slotsResults)){
		$filled = $slotQuery['slots_filled'];
		
		$open = $slotQuery['slots_total'];		
			
//	echo "F: ".$filled;
	//echo " |O: ".$open;
	}


// IF TIME SLOTS ARE AVAILABLE	
	if($open>$filled){
// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME	

	$theseRegistrants = "x_rec_" . $school . "_registrants";	
	$addStudent = "INSERT INTO `__global`.`".$theseRegistrants."` (dateID, timeID, firstName, preferredName, lastName, email, phone) VALUES ('".$dateID."', '".$timeID."', '".$firstName."', '".$preferredName."', '".$lastName."', '".$email."', '".$phone."');";		
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


$to      = 'avani.sunder@atkearney.com';
$subject = 'A.T. Kearney/Chicago Booth 1st Year Case Prep Workshop';
$message = '<html><h2>A.T. Kearney/Chicago Booth 1st Year Case Prep Workshop</h2><br/>';

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

$status = mail($to, $subject, $message, $headers);

$message2 = "<html><h2>A.T. Kearney/Chicago Booth 1st Year Case Prep Workshop</h2><p>Thank you for submitting your coffee chat request.  You are currently scheduled to meet at $confirmedTime on  $confirmedDate.  We look forward to meeting with you.</p>.<P>Location: <a href='https://maps.google.com/maps?q=222+west+adams+chicago+il&ie=UTF-8&hq=&hnear=0x880e2cbec103f27b:0x13df44a5e61123bd,222+W+Adams+St,+Chicago,+IL+60606&gl=us&ei=eXv4UM-dIcaP2gWsuYDgAw&ved=0CDsQ8gEwAQ' target='_blank'>222 West Adams Street, Chicago, Illinois 60606</a><p>Please bring a form of ID for building security to get a temporary access card to get to our office on the 26th floor. Please check in when you get to the 26th floor lobby.
<p>Please contact <a href='mailto:Avani.Sunder@atkearney.com?subject=Chicago Booth Case Prep'>Avani Sunder</a>, <a href='mailto:abe.thomas@atkearney.com?subject=Chicago Booth Case Prep'>Abe Thomas</a> or <a href='mailto:alissa.bernardi@atkearney.com?subject=Chicago Booth Case Prep'>Alissa Bernardi</a> for any questions.";
mail($email, $subject, $message2, $headers);

echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p><h2>A.T. Kearney/Chicago Booth 1st Year Case Prep Workshop</h2><p>Thank you for submitting your case prep session request.  You are currently scheduled to meet at $confirmedTime on  $confirmedDate.  We look forward to meeting with you.</p>.<P>Location: <a href='https://maps.google.com/maps?q=222+west+adams+chicago+il&ie=UTF-8&hq=&hnear=0x880e2cbec103f27b:0x13df44a5e61123bd,222+W+Adams+St,+Chicago,+IL+60606&gl=us&ei=eXv4UM-dIcaP2gWsuYDgAw&ved=0CDsQ8gEwAQ' target='_blank'>222 West Adams Street, Chicago, Illinois 60606</a><p>Please bring a form of ID for building security to get a temporary access card to get to our office on the 26th floor. Please check in when you get to the 26th floor lobby.
<p>Please contact <a href='mailto:Avani.Sunder@atkearney.com?subject=Chicago Booth Case Prep'>Avani Sunder</a>, <a href='mailto:abe.thomas@atkearney.com?subject=Chicago Booth Case Prep'>Abe Thomas</a> or <a href='mailto:alissa.bernardi@atkearney.com?subject=Chicago Booth Case Prep'>Alissa Bernardi</a> for any questions.</p></div>";
}
else {


echo "<style type='text/css'>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>
<p>
The time slot you selected has been filled. <a href='http://www.atkearney.com/careers/apply/united-states/booth-school-of-business/coffee-chats' target='_parent'>Click here</a> to select an available time slot.</p>";
}
?>

