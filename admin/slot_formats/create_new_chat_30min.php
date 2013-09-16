<?php	 	 		 		 	 	 		 		 		 		 		 	

include('create_timeslots.php');

$timeQuery0 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("8:30 - 9:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery0);

$timeQuery = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:00 - 9:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery);

$timeQuery2 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("9:30 - 10:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery2);

$timeQuery3 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:00 - 10:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery3);

$timeQuery4 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("10:30 - 11:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery4);

$timeQuery5 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("11:00 - 11:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery5);

$timeQuery6 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("11:30 - 12:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery6);

$timeQuery7 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("12:00 - 12:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery7);

$timeQuery8 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("12:30 - 1:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery8);

$timeQuery9 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("1:00 - 1:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery9);

$timeQuery10 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("1:30 - 2:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery10);

$timeQuery11 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("2:00 - 2:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery11);

$timeQuery12 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("2:30 - 3:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery12);

$timeQuery13 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("3:00 - 3:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery13);

$timeQuery14 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("3:30 - 4:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery14);

$timeQuery15 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("4:00 - 4:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery15);

$timeQuery16 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("4:30 - 5:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery16);

$timeQuery17 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("5:00 - 5:30", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery17);

$timeQuery18 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, active) VALUES ("5:30 - 6:00", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery18);

header("Location: ".$baseurl."/admin/date_detail.php?date=".$thisDateID."&school=".$thisSchool."");
?>
