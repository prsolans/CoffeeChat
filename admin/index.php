 <?php                                      
include('../config/connect.php');

$schoolList = 'SELECT id, name FROM `'.$database.'`.`School`';
$schoolResult = mysql_query($schoolList);

?>
<?php include('../views/header.php'); ?>

<!-- Obtain latest version of jquery automatically -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Obtain Bootstrap javascript from CDN (online service) so it doesn't have to be on my machine -->
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>

<div class='topbar'><h1>A.T. Kearney Recruiting Event Registration</h1></div>
<div class='row'>
  <span class='span12'>
<h2>Schools</h2>
<ul>
<?php 

while($item = mysql_fetch_array($schoolResult)){

echo '<li><a href="school_detail.php?school='.$item['id'].'">'.$item['name'].'</a></li>';
}
  
?>
</ul>
</div>
</div>