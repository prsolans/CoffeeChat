
<div>
<h3>Create New Coffee Chats</h3>
<p>Please enter dates in the FORMAT Month XX, YEAR</p>

<form name='newCoffeeChat' id='next' action='slot_formats/create_timeslots.php'>

<input type='hidden' name='school' value='<?php echo $schoolID; ?>' />
<br/>Add new date: <input type="text" name="newDate" /><br/>
Questions:   <label class="checkbox">
      <input type="checkbox" name="industry" checked="checked" value="industry"> Industry
    </label>
      <label class="checkbox">
      <input type="checkbox" name="learn" checked="checked" value="learn"> Learn
    </label>
      <label class="checkbox">
      <input type="checkbox" name="offices" checked="checked" value="offices"> Offices
    </label>
<br/>
Time increments: <select name='increment'>
<option value='15'>15 minutes</option>
<option value='20'>20 minutes</option>
<option value='20wbreak'>20 minutes w/ 10-minute breaks</option>
<option value='30'>30 minutes</option>
<option value='60'>60 minutes</option>
</select><br/><input type="submit" class='btn' value="Create new chat date" />
</form>
</div>



