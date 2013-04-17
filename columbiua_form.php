<?php	 	 		 		 	 	 		 		 		 		 		 	
	$host = "localhost";
	$user = "root";
	$pass = "Joomla";
	$database = "joomla";
	
    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}
?>

<script type="text/javascript" src="http://www.atkearney.com/images/test/coffeechat/jquery.js"></script>
<script type="text/javascript">
function ajaxTime() {
  $.ajax({
	type: 'GET',
	url: 'http://www.atkearney.com/images/test/coffeechat/time.php',
	data: 'date='+document.getElementById("thisDate").value,
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
</head>
 
<body>
 

<h1>Columbia Business School First Year MBA Coffee Chats for 2011 Summer Associate Position</h1>

<p> A.T. Kearney consultants will be at Café Bagutta (121st & Amsterdam) on October 29th to answer your questions and share their consulting experiences in a less formal and more personal manner.  </p>
<P>To sign up for a Coffee Chat, please answer the questions below. Note that the following eligibility requirements must apply to sign up for the Coffee Chat or be considered for a full time position at A.T. Kearney: 
<ul>
<li>Currently enrolled in the Full Time MBA program 
</li><li>Graduating from the Full Time MBA program in May 2012 
</li><li>Able to start work at A.T. Kearney in June 2011
</li></ul>
Dress code for this event is business casual.  
<form>
<table>
<tr><td>Coffee Chat Date:</td><td>
<?php	 	 		 		 	 	 		 		 		 		 		 	 
$datesQuery = 'SELECT id, slot_date FROM `joomla`.`x_rec_chatdates` WHERE schoolID = 2 AND active = 0 ORDER BY slot_date;';
$datesResult = mysql_query($datesQuery);

echo "<select name='date' id='date' onchange='ajaxTime()'>";
while($datesRow = mysql_fetch_array($datesResult)){
	echo "<option value='".$datesRow['slot_date']."'>" .$datesRow['slot_date']. "</option>";	
	$thisDate = $datesRow['id'];
}

echo "</select>";
?>
</td></tr>
<tr><td>Coffee Chat Time:</td><td>
<div id="chattime"></div>
</td></tr>
<tr><td>First Name:</td><td><input type="text" name="first_name" size="30"/></td></tr>
<tr><td>Preferred Name:</td><td><input type="text" name="preferred_name" size="30"/></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="last_name" size="30"/></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" size="30"/></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" size="30"/></td></tr>
<tr><td>Office Preference:</td><td><select size="1" title=""  name="1st_choice">
      <option value="1st choice">1st choice</option>
<option value="Chicago">Chicago</option>
<option value="Dallas">Dallas</option>
<option value="New York">New York</option>
<option value="San Francisco">San Francisco</option>
<option value="Southfield">Southfield (Detroit)</option>
<option value="Washington">Washington D.C.</option>
<option value="Canada">Canada</option>
<option value="Dubai">Dubai</option>
<option value="Iberia">Iberia (Spain and Portugal)</option>
<option value="Benelux">Benelux (Belgium and the Netherlands)</option>
<option value="Eastern_Europe">Eastern Europe</option>
<option value="Brazil">Brazil</option>
<option value="Mexico">Mexico</option>
<option value="Korea">Korea</option>
<option value="Japan">Japan</option>
   </select><br/>
   <select size="1" title=""  name="2nd_choice">
      <option value="2nd choice">2nd choice</option>
<option value="Chicago">Chicago</option>
<option value="Dallas">Dallas</option>
<option value="New York">New York</option>
<option value="San Francisco">San Francisco</option>
<option value="Southfield">Southfield (Detroit)</option>
<option value="Washington">Washington D.C.</option>
<option value="Canada">Canada</option>
<option value="Dubai">Dubai</option>
<option value="Iberia">Iberia (Spain and Portugal)</option>
<option value="Benelux">Benelux (Belgium and the Netherlands)</option>
<option value="Eastern_Europe">Eastern Europe</option>
<option value="Brazil">Brazil</option>
<option value="Mexico">Mexico</option>
<option value="Korea">Korea</option>
<option value="Japan">Japan</option>
   </select><br/>
   <select size="1" title=""  name="3rd_choice">
      <option value="3rd choice">3rd choice</option>
<option value="Chicago">Chicago</option>
<option value="Dallas">Dallas</option>
<option value="New York">New York</option>
<option value="San Francisco">San Francisco</option>
<option value="Southfield">Southfield (Detroit)</option>
<option value="Washington">Washington D.C.</option>
<option value="Canada">Canada</option>
<option value="Dubai">Dubai</option>
<option value="Iberia">Iberia (Spain and Portugal)</option>
<option value="Benelux">Benelux (Belgium and the Netherlands)</option>
<option value="Eastern_Europe">Eastern Europe</option>
<option value="Brazil">Brazil</option>
<option value="Mexico">Mexico</option>
<option value="Korea">Korea</option>
<option value="Japan">Japan</option>
   </select></td></tr>
<tr><td>What industry did you work in prior to MBA?</td><td><input type="text" name="industry" size="30"/></td></tr>
<tr><td>What would you like to learn about A.T. Kearney?</td><td><input type="text" name="what_to_learn" size="30"/></td></tr>          	 
<tr><td>Would You Like to be on our Mailing List?</td><td><input type="checkbox" name="mailing"/></td></tr>
<tr><td>Do you meet all of the eligibility requirements as stated above?</td><td><input type="checkbox" name="eligible"/></td></tr>
</table>
<input type="submit" value="Register"/>
</form>



