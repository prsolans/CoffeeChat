<html>
<head>
</head>
<body style="font-family: Helvetica, Arial, sans-serif;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>




<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

$var = $thisSchool;

$schoolDisplay = 'SELECT schoolName, image FROM `__global`.`x_rec_schools` WHERE schoolID = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
	echo "<h1 style='margin: 15px;'>Coffee Chat Administration Panel</h1>";
	if($thisSchool['image']){
	echo "<img style='margin: 0px 15px 15px 15px;' src='images/" .$thisSchool['image']. "' align='left'/>";
	}
	echo "<h2 style='margin: 15px;'>".$thisSchool['schoolName']."</h2>";
}


?>
<div style='border-right: 2px solid black; width: 300px; float: left; margin: 15px; padding: 15px; clear: both;'>
<?php	 	 		 		 	 	 		 		 		 		 		 	 

$dateDisplay = 'SELECT slot_date FROM `__global`.`x_rec_chatdates` WHERE id = ' .$selectedDate. ';';
$dateResult = mysql_query($dateDisplay);

while($thisDate = mysql_fetch_array($dateResult)){
	echo "<h3 style='clear: both; color: blue;'>".$thisDate['slot_date']."</h3>";
	
}

include('timeslot_picker.php'); ?>

</div> 
<div style='width: 400px; margin: 15px; float: left;'>
<?php	 	 		 		 	 	 		 		 		 		 		 	 include('slots_available.php'); ?>
</div>
<div style='width: 380px; margin: 15px; float: left;'>
<?php	 	 		 		 	 	 		 		 		 		 		 	 include('current_signups.php'); ?>
<br/>
<?php	 	 		 		 	 	 		 		 		 		 		 	 include('delete_student.php'); ?>
<br/>
<?php	 	 		 		 	 	 		 		 		 		 		 	 //include('add_student.php'); ?>
</div>


<?php	 	 		 		 	 	 		 		 		 		 		 	 
echo "<h4 style='padding: 15px; clear: both;'>Administer other dates for this school: <a href='coffeeChat_admin.php?school=".$var."'>Click here</a></h4>";
?>

</body></html>
