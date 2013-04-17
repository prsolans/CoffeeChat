<?php	 	 		 		 	 	 		 		 		 		 		 	
require_once('connect.php');


  
  if($_GET['date']){
	
	$id=$_GET['date'];
	
	//echo "<br>ID: ".$id;
	
	$query = 'SELECT b.id, b.slot_time FROM __global.x_rec_chatdates a, __global.x_rec_1_times b WHERE b.date = a.id;';
	
	//echo $query;
	
	$result = mysql_query($query);
	echo '<select name="time" class="time">';
	//echo "\$result: " .$result."!!!";
	echo '<option selected="selected">--Select Time--</option>';
	while($row=mysql_fetch_array($result)){
		
	echo '<option value="'.$row['id'].'">'.$row['slot_time'].'</option>';
	}
	echo '</select>';
}

  ?>
