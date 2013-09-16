<?php                                     

include('../config/connect.php');

?>
<html>
<head>
  <?php include('../views/header.php'); ?>
</head>
<body>

<div class='topbar'><p><a href='index.php'>Home</a></p></div>
<div class='row'>
  <div class='span12'>
</div>
</div>
<?php	 	 		 		 	 	 		 		 		 		 		 	

$thisSchool = $_GET['school'];
$schoolDisplay = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
  echo "<h2>".$thisSchool['name']."</h2>";
  $schoolID = $thisSchool['id'];
}
?>

<div class='row'>
  <div class='span6'>
<?php include 'create_new_chat.php'; ?>
  </div>
    <div class='span6'>

 <?php include 'active_chat_dates.php'; ?>


  </div>
</div>


