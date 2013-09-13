<?php	 	 		 		 	 	 		 		 		 		 		 	

include('../config/connect.php');
  
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];


	// Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$selectedDate = mysql_real_escape_string($selectedDate);


    $url1 = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
  //print_r(parse_url($url));

$queryString = parse_url($url1, PHP_URL_QUERY);

parse_str($queryString);

$theseTimes = "x_rec_" . $thisSchool. "_times";		

//echo $school;
//echo "<br/>".$date;

$activeDates = count($_GET) - 2;

$timeQuery = 'SELECT id FROM `'.$database.'`.`'.$theseTimes.'` WHERE date = ' .$selectedDate;
$timeResult = mysql_query($timeQuery);

while ($timeRow = mysql_fetch_array($timeResult)){

$starter = $timeRow['id'];

//echo "<br/>Starter: ".$starter;
break;
}

$activeDates = $activeDates+$starter;

//echo "<br/>ActiveDates: ".$activeDates;
//echo "<br/>Starter: ".$starter;



while($starter<$activeDates){
	
$item = "no".$starter;
	
$thisVar = $_GET[$item];


//echo "<br/>no".$starter.": ".$thisVar;

	

$updateAvailableSlots = ("UPDATE `".$database."`.`".$theseTimes."` SET slots_total = ".$thisVar." WHERE id=".$starter.";");
	
	//echo $updateAvailableSlots;
	
	mysql_query($updateAvailableSlots);
	
$starter++;

}
	

	header('Location: '.$baseurl.'/date_detail.php?school='.$thisSchool.'&date='.$selectedDate.'');

?>