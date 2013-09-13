
<div style="border-top: 2px black solid; margin: 15px; padding: 15px;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// get school from URL
$thisSchool = $_GET["school"];

echo "<p><b>Create New Coffee Chats</b><p style='font-size: 10pt;'>Please enter dates in the format <B>Month XX, YEAR</b></p>";

echo "<form name='newCoffeeChat' action='slot_formats/create_new_chat_15min.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
?>
<br/>Add new date: <input type="text" name="newDate" />
<P>add select box with time slot 'types'
<input type="submit" value="Create new chat date" />
</form>
</div>



