<?php                                     

include('../config/connect.php');
$thisSchool = $_GET['school'];
?>

<?php include('../views/header.php'); ?>


<div class='topbar'><p><a href='index.php'>Home</a></p></div>
<div class='row'>
  <div class='span12'>

    <?php                                     
$schoolDisplay = 'SELECT * FROM `'.$database.'`.`School` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
  echo "<h2>".$thisSchool['name']."</h2>";
  $schoolID = $thisSchool['id'];
  $schoolName = $thisSchool['name'];
  $image = $thisSchool['image'];
  $contactname = $thisSchool['contactname'];
  $contactemail = $thisSchool['contactemail'];
  $liveurl = $thisSchool['formurl'];
}
?>
</div>
</div>

<h3>Edit School Details</h3>
    <?php 
      if($_GET['alert']){
          echo "<div class='alert alert-success'>Update successful.</div>";
      }
    ?>
<form action='edit_school_action.php' name='editSchool'>
<input type='hidden' name='id' value='<?php echo $schoolID ; ?>' />
<table class='table table-striped'>
<tr><td>Name</td><td><input type='text' name='name' value='<?php echo $schoolName; ?>'>
</td></tr>
<tr><td>Image</td><td><input type='text' name='image' value='<?php echo $image; ?>'></td></tr>
<tr><td>Contact Name</td><td><input type='text' name='contactname' value='<?php echo $contactname; ?>'></td></tr>
<tr><td>Contact Email</td><td><input type='text' name='contactemail' value='<?php echo $contactemail; ?>'></td></tr>
<tr><td>Live URL</td><td><input type='text' name='formurl' value='<?php echo $liveurl; ?>'></td></tr>
</table>
<br/><input type="submit" class='btn btn-success' value="Update School Details"/>
</form>