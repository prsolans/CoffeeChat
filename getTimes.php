
      <?php	 	 		 		 	 	 		 		 		 		 		 	
	  


require_once('connect.php');



$timesQuery = 'SELECT id, slot_time FROM `__global`.`x_rec_1_times` WHERE slots_total > slots_filled ORDER BY id;';
$timesResult = mysql_query($timesQuery);

$i=0;

while($timesRow = mysql_fetch_array($timesResult)){
	//echo "<br/>" .$timesRow['id'].": ";
	echo $timesRow['slot_time']. "-".$i.";";
	$i++;
}


 
      ?>
