<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


  
$thisSchool = $_GET['school'];
$thisDate = $_GET['date'];
$onOrOff = $_GET['status'];

		
	//insert new date into the database
	$datesQuery = "UPDATE  `__global`.`x_rec_chatdates` SET active='".$onOrOff."' WHERE id='".$thisDate."'";
	echo $datesQuery;
	mysql_query($datesQuery);

	header("Location: coffeeChat_admin.php?date=".$selectedDate."&school=".$thisSchool."");
?>
