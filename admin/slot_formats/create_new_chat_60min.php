<?php	 	 		 		 	 	 		 		 		 		 		 	

$timeQuery0 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("8:00 - 8:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery0);

$timeQuery = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("9:00 - 9:50", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery);

$timeQuery3 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("10:00 - 10:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery3);

$timeQuery5 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("11:00 - 11:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery5);

$timeQuery7 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("12:00 - 12:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery7);

$timeQuery9 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("1:00 - 1:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery9);

$timeQuery11 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("2:00 - 2:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery11);

$timeQuery13 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("3:00 - 3:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery13);

$timeQuery15 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("4:00 - 4:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery15);

$timeQuery17 = 'INSERT INTO  `eventreg`.`'.$theseTimes.'` (slot_time, slots_total, slots_filled, date, status) VALUES ("5:00 - 5:45", 0, 0, ' .$thisDateID.', 1);';
mysql_query($timeQuery17);

header("Location: ".$baseurl."/admin/date_detail.php?date=".$thisDateID."&school=".$thisSchool."");

?>
