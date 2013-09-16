<?php                                     

include('../config/connect.php');

?>

<?php include('../views/header.php'); ?>


<div class='topbar'><p><a href='index.php'>Home</a></p></div>
<div class='row'>
  <div class='span12'>
    <?php                                     

$thisSchool = $_GET['school'];
$schoolDisplay = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
  echo "<h2>".$thisSchool['name']." <small>(<a href='edit_school.php?school=".$thisSchool['id']."'>Edit School Details</a>)</small></h2>";
  $schoolID = $thisSchool['id'];
}
?>
</div>
</div>


<div class='row'>
  <div class='span6'>

<?php include 'create_new_chat.php'; ?>
  </div>
    <div class='span6'>

 <?php include 'active_chat_dates.php'; ?>
  </div>
</div>



