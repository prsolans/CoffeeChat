<?php                                     

include('../config/connect.php');
$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];
$questions = array();

if(isset($_GET['learn'])){
  array_push($questions, $_GET['learn']);
}
if(isset($_GET['industry'])){
  array_push($questions, $_GET['industry']);
}
if(isset($_GET['offices'])){
  array_push($questions, $_GET['offices']);
}

$questions_string = implode(',', $questions);

$query = "UPDATE `".$database."`.`EventDate` SET questions='$questions_string' WHERE id=$selectedDate";

mysql_query($query);

  header('Location: '.$baseurl.'/admin/date_detail.php?school='.$thisSchool.'&date='.$selectedDate.'&alert=q');

?>

