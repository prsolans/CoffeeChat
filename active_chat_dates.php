
<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>
<div style="border-top: 2px black solid; margin: 15px; padding: 15px;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// get school from URL
$thisSchool = $_GET["school"];

echo "<p><b>Manage Coffee Chat Availability to Students</b></p><p><em>Select only the dates you want to currently appear for students to register.</em></p>";

echo "<form name='newDaterSelect' action='active_chat_dates_2.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";

$datesDisplay = 'SELECT * FROM `__global`.`x_rec_chatdates` WHERE schoolID = ' .$thisSchool .' ORDER BY slot_date;';

$datesResult = mysql_query($datesDisplay);

echo "<table><tr style='font-weight: bold;'><td>Date</td><td style='padding-left: 15px;'>Action</td></tr>";

while($datesRow = mysql_fetch_array($datesResult)){
	
	if ($datesRow['active'] == 1){
		echo "<tr><td >";
		echo $datesRow['slot_date'];		
		echo "</td><td style='font-size: 11px; padding-left: 15px;'><a href='active_chat_dates_2.php?school=".$thisSchool."&date=".$datesRow['id']."&status=0'>Enable</a> | Disable";
		echo " | <a href='active_chat_dates_2.php?school=".$thisSchool."&date=".$datesRow['id']."&status=2'>Delete</a></td></tr>";
	}
	else {
		echo "<tr><td>";
		echo $datesRow['slot_date'];		
		echo "</td><td style='font-size: 11px; padding-left: 15px;'>Enable | <a href='active_chat_dates_2.php?school=".$thisSchool."&date=".$datesRow['id']."&status=1'>Disable</a>";
		echo " | <a href='active_chat_dates_2.php?school=".$thisSchool."&date=".$datesRow['id']."&status=2'>Delete</a></td></tr>";
	}
	
}
echo "</table>";
	

?>

</div>


