<?php	 	 		 		 	 	 		 		 		 		 		 	

include('../config/connect.php');
  
$thisSchool = $_GET['school'];
$thisDate = $_GET['date'];
$status = $_GET['status'];

if($status != 2){
		
	//insert new date into the database
	$datesQuery = "UPDATE  `".$database."`.`EventDate` SET status=".$status." WHERE id='".$thisDate."'";
	//echo $datesQuery;
	mysql_query($datesQuery);
}
else { 
	$datesQuery = "DELETE FROM `".$database."`.`EventDate` WHERE id='".$thisDate."'";
  //echo $datesQuery;
  mysql_query($datesQuery);
}

	header("Location: ".$baseurl."/school_detail.php?date=".$selectedDate."&school=".$thisSchool."");
?>
