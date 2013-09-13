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

$timeQuery0 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("8:00 - 8:15", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery0);

$timeQuery = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("8:15 - 8:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery);

$timeQuery2 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("8:30 - 8:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery2);

$timeQuery3 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("8:45 - 9:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery3);

$timeQuery4 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:00 - 9:15", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery4);

$timeQuery5 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:15 - 9:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery5);

$timeQuery6 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:30 - 9:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery6);

$timeQuery7 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:45 - 10:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery7);

$timeQuery8 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:00 - 10:15", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery8);

$timeQuery9 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:15 - 10:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery9);

$timeQuery10 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:30 - 10:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery10);

$timeQuery11 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:45 - 11:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery11);

$timeQuery12 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("11:00 - 11:15", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery12);

$timeQuery13 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("11:15 - 11:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery13);

$timeQuery14 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("12:30 - 12:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery14);

$timeQuery15 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("12:50 - 1:10", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery15);

$timeQuery16 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("1:10 - 1:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery16);

$timeQuery17 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("1:30 - 1:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery17);

$timeQuery18 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("1:50 - 2:10", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery18);

$timeQuery19 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("2:10 - 2:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery19);

$timeQuery20 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("2:30 - 2:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery20);

$timeQuery21 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("2:50 - 3:10", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery21);

$timeQuery22 = 'INSERT INTO  `__global`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("3:10 - 3:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery22);

echo $thisDateID;

$url = "Location: coffeeChat_admin2.php?school=".$thisSchool."&date=".$thisDateID;

echo $url;

header($url);

?>
