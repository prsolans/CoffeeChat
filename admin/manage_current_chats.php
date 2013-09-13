
<div style="border-top: 2px black solid; margin: 15px; padding: 15px;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// get school from URL
$thisSchool = $_GET["school"];

	// build query of selected schools currently scheduled dates
$datesQuery = 'SELECT * FROM `'.$database.'`.`EventDate` WHERE school = '.$thisSchool .' ORDER BY eventdate;';
$datesResult = mysql_query($datesQuery);

echo "<p><b>Manage Current Coffee Chats</b><br/>";
echo "<p style='font-weight: bold; color: red;'>UPDATE: Dates marked as disabled are now available from this dropdown menu. Details can be configured before the date is made live on the website.</p>";
echo "<form name='manageCurrent' action='date_detail.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<select name='date'>";
while($datesRow = mysql_fetch_array($datesResult)){
	echo "<option value='" .$datesRow['id']. "'>" .$datesRow['eventdate']. "</option>";	
}

echo "</select>";

?><br/>
<input type="submit" value="Edit Times and Slots" />
</form>
</div>



