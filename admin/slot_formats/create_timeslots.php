<?php
//error_reporting(E_ALL); ini_set('display_errors', 'On'); 

include('../../config/connect.php');

  // Retrieve data from Query String
$thisSchool = $_GET['school'];
$newDate = $_GET['newDate'];

  // Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$newDate = mysql_real_escape_string($newDate);

  // display main school info
$schoolQuery = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

//echo "<p>School:";
//echo mysql_query($schoolQuery) ? OK : FAIL;


while($schoolRow = mysql_fetch_array($schoolResult)){
//  echo "<h2>" .$schoolRow['schoolName']. "</h2>"; 
}

    //insert new date into the database
$datesQuery = 'INSERT INTO  `'.$database.'`.`EventDate` (eventdate, school, status) VALUES ("' .$newDate. '", ' .$thisSchool. ', "0");';
mysql_query($datesQuery);

//echo "<p>Dates:" . $datesQuery;
//echo mysql_query($datesQuery) ? OK : FAIL;

$findDateID = 'SELECT id FROM `'.$database.'`.`EventDate` WHERE eventdate = "'.$newDate.'";';
$IDResult = mysql_query($findDateID);

//echo "<p>ID:";
//echo mysql_query($findDateID) ? OK : FAIL;

while($IDRow = mysql_fetch_array($IDResult)){
  $thisDateID = $IDRow['id'];
//  echo $thisDateID;
}

  //create time slots for new date
$theseTimes = "Timeslot";
?>