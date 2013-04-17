<?php	 	 		 		 	 	 		 		 		 		 		 	

$host = "localhost";
	$user = "root";
	$pass = "Joomla";
	$database = "joomla";
	
    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}

$school = "10";

$dateID = $_GET["date"];
$timeID = $_GET["time"];

$firstName = $_GET["first_name"];
$preferredName = $_GET["preferred_name"];
$lastName = $_GET["last_name"];

$email = $_GET["email"];
$phone = $_GET["phone"];

/*$choice1 = $_GET["1st_choice"];
$choice2 = $_GET["2nd_choice"];
$choice3 = $_GET["3rd_choice"];

$industry = $_GET["industry"];
$learn = $_GET["learn"];

$mailingList = $_GET["radio0"];
*/
// Escape User Input to help prevent SQL Injection

	//$school = mysql_real_escape_string($school);
	$dateID = mysql_real_escape_string($dateID);
	$timeID = mysql_real_escape_string($timeID);
	
	$firstName = mysql_real_escape_string($firstName);
	$preferredName = mysql_real_escape_string($preferredName);
	$lastName = mysql_real_escape_string($lastName);
	
	$email = mysql_real_escape_string($email);
	$phone = mysql_real_escape_string($phone);
	
/*	$choice1 = mysql_real_escape_string($choice1);
	$choice2 = mysql_real_escape_string($choice2);
	$choice3 = mysql_real_escape_string($choice3);
	
	$industry = mysql_real_escape_string($industry);
	$learn = mysql_real_escape_string($learn);
*/

// ADD NEW STUDENT TO SCHOOL AT SPECIFIC DATE/TIME	

	$theseRegistrants = "x_rec_" . $school . "_registrants";	
	$addStudent = "INSERT INTO `joomla`.`".$theseRegistrants."` (dateID, timeID, firstName, preferredName, lastName, email, phone) VALUES ('".$dateID."', '".$timeID."', '".$firstName."', '".$preferredName."', '".$lastName."', '".$email."', '".$phone."');";		
	//echo $addStudent;		
	mysql_query($addStudent);
				

// UPDATE SLOTS_FILLED
	$theseTimes = "x_rec_" . $school. "_times";						
	$updateRegistrationCount = "UPDATE `joomla`.`".$theseTimes."` SET slots_filled = slots_filled + 1 WHERE id=".$timeID.";";
	//echo $updateRegistrationCount;
	mysql_query($updateRegistrationCount);

// GET READABLE DATE FORMAT
$datesQuery = 'SELECT slot_date FROM `joomla`.`x_rec_chatdates` WHERE id='.$dateID.';';
$datesResult = mysql_query($datesQuery);
	
while($datesRow = mysql_fetch_array($datesResult)){
  
	$confirmedDate = $datesRow['slot_date'];
	}

// GET READABLE TIME FORMAT
$timesQuery = "SELECT slot_time FROM `joomla`.`x_rec_".$school."_times` WHERE id=".$timeID.";";
$timesResult = mysql_query($timesQuery);

//echo $timesQuery;

while($timesRow = mysql_fetch_array($timesResult)){
	$confirmedTime = $timesRow['slot_time'];
}


$to      = 'RotmanMBA1Recruting@atkearney.com';
$subject = 'Rotman School of Business Coffee Chat Registration';
$message = '<html><h2>Registration Form: Rotman MBA1 Summer Internship Coffee Chats</h2><br/>';

$message .= '<strong>Registrant details</strong><br/>';
$message .= $firstName;

if ($preferredName != '') {
	$message .= ' ('.$preferredName. ') ';
}

$message .= " ".$lastName. "<br/>";

$message .= $confirmedDate." ".$confirmedTime;
$message .= '<br/><a href="mailto:'.$email.'">'.$email.'</a> | '.$phone.'<br/>';
/*$message .= '<br/><strong>Office Preferences</strong><br/>';
$message .= $choice1.', '.$choice2.', '.$choice3.'<br/>';
$message .= '<br/><strong>What industry did you work in prior to MBA?</strong><br/>';
$message .= $industry;
$message .= '<br/><strong>What would you like to learn about A.T. Kearney?</strong><br/>';
$message .= $learn;
$message .= '<p>Join mailing list: '.$mailingList;
*/


$headers = 'From: RotmanMBA1Recruting@atkearney.com' . "\r\n" .
    'Reply-To: RotmanMBA1Recruting@atkearney.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "\r\nBcc: paul.solans@atkearney.com\r\n\r\n";

$status = mail($to, $subject, $message, $headers);

//echo "status: ".$status;


?>



<body style="background-color:#333;">
<div style="border: solid #A29789 36px; background: white; padding: 35px 22px 50px 22px; font-family: Arial, Helvetica, sans-serif;">
  <p>
Thank you for submitting your coffee chat request.  You are currently scheduled to meet at <?php	 	 		 		 	 	 		 		 		 		 		 	 echo $confirmedTime;?> on <?php	 	 		 		 	 	 		 		 		 		 		 	 echo $confirmedDate;?>.  We look forward to meeting with you.  </p><p>If you need to change your time slot or have any other questions or concerns, please contact <A href="mailto:RotmanMBA1Recruiting.com?subject=Coffee Chat Signup">RotmanMBA1Recruiting</a> at <A href="mailto:RotmanMBA1Recruiting@atkearney.com?subject=Coffee Chat Signup">RotmanMBA1Recruiting@atkearney.com</a>.</b></p><p>Learn more about Careers at A.T. Kearney: <a href="http://www.atkearney.com/index.php/Careers/career-path.html">Career Path</a> | <a href="http://www.atkearney.com/index.php/Careers/global-mobility-program.html">Global Mobility Program</a> | <a href="http://www.atkearney.com/index.php/Careers/mentoring.html">Mentoring</a> | <a href="http://www.atkearney.com/index.php/Careers/training.html">Training</a></div>
