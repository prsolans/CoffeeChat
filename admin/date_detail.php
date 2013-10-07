<?php include('../config/connect.php');?>

<?php include('../views/header.php'); ?>
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

$var = $thisSchool;

$schoolDisplay = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
    echo "<div class='topbar'><p>";
  echo "<p><a target='_blank' href='".$baseurl."/reg_form.php?school=".$thisSchool['id']."'>Go to public form</a> | <a href='school_detail.php?school=".$var."'>Administer dates</a></p></div>";
	echo "<h2>".$thisSchool['name']."</h2>";
}


?>
<div>
<?php	 	 		 		 	 	 		 		 		 		 		 	 

$dateDisplay = 'SELECT eventdate FROM `'.$database.'`.`EventDate` WHERE id = ' .$selectedDate. ';';
$dateResult = mysql_query($dateDisplay);

while($thisDate = mysql_fetch_array($dateResult)){
	echo "<h3>".$thisDate['eventdate']."</h3>";
	
}
?>
<div class='row'>
  <div class='span3'>
    <?php include('timeslot_picker.php'); ?>
  </div> 
  <div class='span6'>
    <?php include('slots_available.php'); ?>
  </div>
 <div class='span3'>
    <?php include('questions.php'); ?>
    <?php	include('current_signups.php'); ?>
    <?php	include('delete_student.php'); ?>
 </div>
</div>

</body></html>
