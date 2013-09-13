<?php	 	 		 		 	 	 		 		 		 		 		 	
include('connect.php');
?>
<style type="text/css">
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function ajaxTime() {
  $.ajax({
	type: 'GET',
	url: 'time.php',
	data: 'school=13&date=197&date2=September 20, 2013',
	success: function(response) {
		var result = (typeof response.j) == 'string' ? eval('(' + response.j + ')') : response.j;				
		document.getElementById('chattime').innerHTML = response;
	}
  });
  
}

$(document).ready(function(){
						  

	ajaxTime();
	
	
});

</script>
<p>Thank you for your interest in A.T. Kearney. We will be hosting a Coffee Chat to give you the opportunity to learn more about Management Consulting, A.T. Kearney and the recruiting process.</p>
<p>Coffee Chat Details:<br/>
When: Friday, September 20, 2013<br/>
Where: Saxby's Coffee (4000 Locust St., Philadelphia, PA 19104<br/>
Time: 10am - 5pm (Please select your preferred time below)
</p>
<form action="penn_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Coffee Chat Date</td>
    <td>September 20, 2013</td>
  </tr>
  <tr>
    <td class="table_label">Coffee Chat Time</td>
    <td><div id="chattime"></div>
    </select></td>
  </tr>
  <tr>
    <td class="table_label">First name</td>
    <td><input class="cf_inputbox required" align="left" maxlength="150" size="30" title="" id="text_2" name="first_name" type="text" /></td>
  </tr>
<!--  <tr>
    <td class="table_label">Name you prefer</td>
    <td><input class="cf_inputbox" maxlength="150" size="30" title="" id="text_7" name="preferred_name" type="text" /></td>
  </tr>
-->  <tr>
    <td class="table_label">Last name</td>
    <td><input class="cf_inputbox required" maxlength="150" size="30" title="" id="text_8" name="last_name" type="text" /></td>
  </tr>
  <tr>
    <td class="table_label"> Email</td>
    <td><input class="cf_inputbox required validate-email" maxlength="150" size="30" title="" id="text_9" name="email" type="text" /></td>
  </tr>
  <tr>
    <td class="table_label">Class Year</td>
    <td><input class="cf_inputbox required" maxlength="150" size="30" title="" id="text_10" name="classyear" type="text" /></td>
  </tr>
    <tr>
    <td class="table_label">School</td>
 <td><label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_14" size="1" title=""  name="school">
        <option value="1st choice">Select one</option>
               
        <option value="Wharton">Wharton</option>
        <option value="College">College</option>
        <option value="Engineering">Engineering</option>
        <option value="Nursing">Nursing</option>
     
      </select>
</td>	  </tr>
  <tr>
    <td class="table_label">Office preferences </td>
    <td><label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_14" size="1" title=""  name="1st_choice">
        <option value="1st choice">1st choice</option>
               
        <option value="Atlanta">Atlanta</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Toronto">Toronto</option>
        <option value="Washington">Washington D.C.</option>
        <option value="International">International</option>
     
      </select>
      <br/>
      <label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_13" size="1" title=""  name="2nd_choice">
        <option value="2nd Choice">2nd Choice</option>
        <option value="Atlanta">Atlanta</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Toronto">Toronto</option>
        <option value="Washington">Washington D.C.</option>
        <option value="International">International</option>

      </select>
      <br/>
      <label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_15" size="1" title=""  name="3rd_choice">
        <option value="3rd Choice">3rd Choice</option>
        <option value="Atlanta">Atlanta</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Toronto">Toronto</option>
        <option value="Washington">Washington D.C.</option>
           <option value="International">International</option>

    </select></td>
  </tr>
   <tr>
    <td></td>
    <td><input value="Submit" name="button_18" type="submit" /></td>
  </tr>
</table>
<p>If you have any questions please contact Simon Smith at <a href='mailto:simon.smith@atkearney.com'>simon.smith@atkearney.com</a>.</p><p>We look forward to meeting you on September 20.</p>