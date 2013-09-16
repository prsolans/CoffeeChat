<div>
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// get school from URL
$thisSchool = $_GET["school"];


echo "<p><b>Manage Coffee Chat Availability to Students</b></p><p><em>Select only the dates you want to currently appear for students to register.</em></p>";

echo "<form name='newDaterSelect' action='active_chat_dates_action.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";

$datesQuery = 'SELECT * FROM `'.$database.'`.`EventDate` WHERE school = '.$thisSchool .' ORDER BY eventdate;';

$datesResult = mysql_query($datesQuery);

echo "<table class='table table-striped'><tr style='font-weight: bold;'><td>Date</td><td>Action</td><td>Status</td></tr>";

while($datesRow = mysql_fetch_array($datesResult)){
	
	if ($datesRow['status'] == 1){
		echo "<tr><td >";
		echo $datesRow['eventdate'];		
		echo "</td><td><a target='_blank' href='".$baseurl."/reg_form.php?school=".$thisSchool."'>View Form</a> | <a href='date_detail.php?school=".$thisSchool."&date=".$datesRow['id']."'>Edit</a>";
		echo " | <a href='active_chat_dates_action.php?school=".$thisSchool."&date=".$datesRow['id']."&status=2'>Delete</a></td><td><a href='active_chat_dates_action.php?school=".$thisSchool."&date=".$datesRow['id']."&status=0'>Enable</a></td></tr>";
	}
	else {
		echo "<tr><td>";
		echo $datesRow['eventdate'];		
		echo "</td><td><a target='_blank' href='".$baseurl."/reg_form.php?school=".$thisSchool."'>View Form</a> | <a href='date_detail.php?school=".$thisSchool."&date=".$datesRow['id']."'>Edit</a>";
		echo " | <a href='active_chat_dates_action.php?school=".$thisSchool."&date=".$datesRow['id']."&status=2'>Delete</a></td><td><a href='active_chat_dates_action.php?school=".$thisSchool."&date=".$datesRow['id']."&status=1'>Disable</a></td></tr>";
	}
	
}
echo "</table>";
	

?>

</div>



