<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$newDate = $_GET['newDate'];

	// Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$newDate = mysql_real_escape_string($newDate);

	// display main school info
$schoolQuery = 'SELECT * FROM `__global`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<h2>" .$schoolRow['schoolName']. "</h2>";	
}

		//insert new date into the database
$datesQuery = 'INSERT INTO  `__global`.`x_rec_chatdates` (slot_date, schoolID, active) VALUES ("' .$newDate. '", ' .$thisSchool. ', "0");';
mysql_query($datesQuery);

$findDateID = 'SELECT id FROM `__global`.`x_rec_chatdates` WHERE slot_date = "'.$newDate.'";';
$IDResult = mysql_query($findDateID);

while($IDRow = mysql_fetch_array($IDResult)){
	$thisDateID = $IDRow['id'];
	echo $thisDateID;
}


	//create time slots for new date
$theseTimes = "x_rec_" . $thisSchool . "_times";

$timeQuery0 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("8:00 - 8:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery0);

$timeQuery = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:00 - 9:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery);

$timeQuery3 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:00 - 10:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery3);

$timeQuery5 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("11:00 - 11:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery5);

$timeQuery7 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("12:00 - 12:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery7);

$timeQuery9 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("1:00 - 1:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery9);

$timeQuery11 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("2:00 - 2:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery11);

$timeQuery13 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("3:00 - 3:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery13);

$timeQuery15 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("4:00 - 4:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery15);

$timeQuery17 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("5:00 - 5:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery17);


echo $thisDateID;

$url = "Location: coffeeChat_admin2.php?school=".$thisSchool."&date=".$thisDateID;

echo $url;

header($url);

?>
