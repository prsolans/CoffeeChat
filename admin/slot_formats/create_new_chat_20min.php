<?php	 	 		 		 	 	 		 		 		 		 		 	

$timeQuery0 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("8:00 - 8:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery0);

$timeQuery = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("8:20 - 8:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery);

$timeQuery2 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("8:40 - 9:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery2);

$timeQuery3 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("9:00 - 9:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery3);

$timeQuery4 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("9:20 - 9:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery4);

$timeQuery5 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("9:40 - 10:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery5);

$timeQuery6 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("10:00 - 10:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery6);

$timeQuery7 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("10:20 - 10:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery7);

$timeQuery8 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("10:40 - 11:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery8);

$timeQuery9 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("11:00 - 11:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery9);

$timeQuery10 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("11:20 - 11:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery10);

$timeQuery11 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("11:40 - 12:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery11);

$timeQuery12 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("1:00 - 1:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery12);

$timeQuery13 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("1:20 - 1:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery13);

$timeQuery14 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("1:40 - 2:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery14);

$timeQuery15 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("2:00 - 2:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery15);

$timeQuery16 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("2:20 - 2:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery16);

$timeQuery17 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("2:40 - 3:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery17);

$timeQuery18 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("3:00 - 3:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery18);

$timeQuery19 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("3:20 - 3:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery19);

$timeQuery20 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("3:40 - 4:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery20);

$timeQuery21 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("4:00 - 4:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery21);

$timeQuery22 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("4:20 - 4:40", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery22);

$timeQuery23 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("4:40 - 5:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery23);

header("Location: ".$baseurl."/admin/date_detail.php?date=".$thisDateID."&school=".$thisSchool."");

?>
