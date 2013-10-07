 <?php                                      
include('../config/connect.php');

$schoolList = 'SELECT id, name FROM `'.$database.'`.`School`';
$schoolResult = mysql_query($schoolList);

?>
<?php include('../views/header.php'); ?>


<div class='topbar'><h1>A.T. Kearney Recruiting Event Registration</h1></div>
<div class='row'>
  <div class='span8'>
<h2>Schools</h2>
<ul>
<?php 

while($item = mysql_fetch_array($schoolResult)){

echo '<li><a href="school_detail.php?school='.$item['id'].'">'.$item['name'].'</a></li>';
}
  
?>
</ul>
</div>
<div class='span4'>
  <h2>Add new school</h2>
<form action='edit_school_action.php' name='editSchool'>
<input type='hidden' name='flag' value='new' />
<table class='table table-striped'>
<tr><td>Name</td><td><input type='text' name='name' value='<?php echo $schoolName; ?>'>
</td></tr>
<tr><td>Image</td><td><input type='text' name='image' value='<?php echo $image; ?>'></td></tr>
<tr><td>Contact Name</td><td><input type='text' name='contactname' value='<?php echo $contactname; ?>'></td></tr>
<tr><td>Contact Email</td><td><input type='text' name='contactemail' value='<?php echo $contactemail; ?>'></td></tr>
<tr><td>Live URL</td><td><input type='text' name='formurl' value='<?php echo $liveurl; ?>'></td></tr>
</table>
<br/><input type="submit" class='btn btn-primary' value="Add new school"/>
</form>
  </div>
</div>