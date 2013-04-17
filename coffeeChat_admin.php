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

<h1 style='margin:15px;'>Recruiting Coffee Chat Administration Panel</h1>
<?php	 	 		 		 	 	 		 		 		 		 		 	

	// get school from URL
$thisSchool = $_GET["school"];

	// build query of general school information
$schoolQuery = 'SELECT * FROM `__global`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

	// display school info
while($schoolRow = mysql_fetch_array($schoolResult)){
	if($schoolRow['image']){echo "<img style='margin: 0px 15px 15px 15px;' src='images/" .$schoolRow['image']. "' align='left'/>";}
	echo "<h2 style='margin: 15px;'>" .$schoolRow['schoolName']. "</h2>";
	
}

echo "<div style='clear: both;'>";
include 'manage_current_chats.php';
include 'create_new_chat.php';
include 'active_chat_dates.php';
echo "</div>";

?>
