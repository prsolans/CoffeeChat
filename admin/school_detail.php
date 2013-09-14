<html>
<head>
</head>
<body style="font-family: Helvetica, Arial, sans-serif;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

include('../config/connect.php');

?>

<h1 style='margin:15px;'>Recruiting Coffee Chat Administration Panel</h1>
<p><a href='index.php'>Home</a></p>
<?php	 	 		 		 	 	 		 		 		 		 		 	

$thisSchool = $_GET['school'];
$schoolDisplay = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
  echo "<h2 style='margin: 15px;'>".$thisSchool['name']."</h2>";
  $schoolID = $thisSchool['id'];
}

echo "<div style='clear: both;'>";
include 'create_new_chat.php';

include 'active_chat_dates.php';
//include 'manage_current_chats.php';

echo "</div>";

?>
