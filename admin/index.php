<html>
<head>
</head>
<body style="font-family: Helvetica, Arial, sans-serif;">
<?php	 	 		 		 	 	 		 		 		 		 		 	
include('../config/connect.php');

$schoolList = 'SELECT id, name FROM `'.$database.'`.`School`';
$schoolResult = mysql_query($schoolList);

?>
<h1>Recruiting Event Registration</h1><h2>Administration Panel</h2>
<ul>
<?php 

while($item = mysql_fetch_array($schoolResult)){

echo '<li><a href="school_detail.php?school='.$item['id'].'">'.$item['name'].'</a></li>';
}
  
?>
</ul>
