<?php	 	 		 		 	 	 		 		 		 		 		 	

$timeQuery0 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("8:00 - 8:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery0);

$timeQuery = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("8:30 - 8:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery);

$timeQuery2 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("9:00 - 9:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery2);

$timeQuery3 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("9:30 - 9:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery3);

$timeQuery4 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("10:00 - 10:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery4);

$timeQuery5 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("10:30 - 10:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery5);

$timeQuery6 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("11:00 - 11:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery6);

$timeQuery7 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("11:30 - 11:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery7);

$timeQuery8 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("12:00 - 12:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery8);

$timeQuery9 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("12:30 - 12:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery9);

$timeQuery10 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("1:00 - 1:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery10);

$timeQuery11 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("1:30 - 1:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery11);

$timeQuery12 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("2:00 - 2:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery12);

$timeQuery13 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("2:30 - 2:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery13);

$timeQuery14 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("3:00 - 3:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery14);

$timeQuery15 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("3:30 - 3:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery15);

$timeQuery16 = 'INSERT INTO  `'.$database.'`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("4:00 - 4:20", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery16);


header("Location: ".$baseurl."/admin/date_detail.php?date=".$thisDateID."&school=".$thisSchool."");

?>
