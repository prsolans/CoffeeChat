 <?php // Retrieve data from Query String

$thisSchool = $_GET['school'];
$selectedDate = $_GET['date'];

$dateDisplay = 'SELECT questions FROM `'.$database.'`.`EventDate` WHERE id = ' .$selectedDate. ';';
$dateResult = mysql_query($dateDisplay);

while($thisDate = mysql_fetch_array($dateResult)){
    $questions = explode(',', $thisDate['questions']);

  if(in_array('all', $questions)){
        $industry = 'checked="checked"';
    $learn = 'checked="checked"';
    $offices = 'checked="checked"';

  }
else{
  if(in_array('industry', $questions)){
    $industry = 'checked="checked"';
  }
  if(in_array('learn', $questions)){
    $learn = 'checked="checked"';
  }
  if(in_array('offices', $questions)){
    $offices = 'checked="checked"';
  }
}
}

if(isset($_GET['alert'])){
  echo '<div class="alert alert-success">Questions updated.</div>';
}
?>

<form action='questions_action.php'>
  <input type='hidden' name='date' value='<?php echo $selectedDate; ?>'/>
  <input type='hidden' name='school' value='<?php echo $thisSchool; ?>'/>
<table class='table table-striped'><tr><td colspan='2'><B>QUESTIONS</b></td></tr>
<tr><td><label class="checkbox">
      <input type="checkbox" name="industry" <?php echo $industry; ?> value="industry"> Industry
    </label></td></tr>
<tr><td><label class="checkbox">
      <input type="checkbox" name="learn" <?php echo $learn; ?> value="learn"> Learn
    </label></td></tr>
<tr><td><label class="checkbox">
      <input type="checkbox" name="offices" <?php echo $offices; ?> value="offices"> Offices
    </label></td></tr></table>
    <input type="submit" value="Update" class='btn btn-primary' />
</form>