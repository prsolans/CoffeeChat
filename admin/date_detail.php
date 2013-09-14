<html>
<head>
</head>
<body style="font-family: Helvetica, Arial, sans-serif;">
<?php                                     

include('../config/connect.php');

?>
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

$var = $thisSchool;

$schoolDisplay = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
	echo "<h1 style='margin: 15px;'>Coffee Chat Administration Panel</h1>";
	if($thisSchool['image']){
	echo "<img style='margin: 0px 15px 15px 15px;' src='images/" .$thisSchool['image']. "' align='left'/>";
	}
	echo "<h2 style='margin: 15px;'>".$thisSchool['name']."</h2>";
  echo "<p><a href='../reg_form.php?school=".$thisSchool['id']."'>Go to public form</a> | <a href='school_detail.php?school=".$var."'>Administer dates</a>";
}


?>
<div style='border-right: 2px solid black; width: 300px; float: left; margin: 15px; padding: 15px; clear: both;'>
<?php	 	 		 		 	 	 		 		 		 		 		 	 

$dateDisplay = 'SELECT eventdate FROM `'.$database.'`.`EventDate` WHERE id = ' .$selectedDate. ';';
$dateResult = mysql_query($dateDisplay);

while($thisDate = mysql_fetch_array($dateResult)){
	echo "<h3 style='clear: both; color: blue;'>".$thisDate['eventdate']."</h3>";
	
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


</body></html>
