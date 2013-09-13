
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

echo "<p><b>Create New Coffee Chats</b><p style='font-size: 10pt;'>Please enter dates in the format <B>Month XX, YEAR</b></p>";

echo "<form name='newCoffeeChat' action='create_new_chat_15min.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
?>
<br/>Add new date: <input type="text" name="newDate" />
<input type="submit" value="Create new chat date" />
</form>
</div>



