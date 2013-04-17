

<?php	 	 		 		 	 	 		 		 		 		 		 	
require_once('connect.php');

  ?>
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
<script type="text/javascript">
$(document).ready(function()
{
$(".date").change(function()
{
var id=$(this).val();
var dataString = 'date='+ id;

$.ajax
({
type: "POST",
url: "time_date3.php",
data: dataString,
cache: false,
success: function(html)
{
$(".time").html(html);
}
});

});

});
</script>
Session Date:
<select name="date" class="date">
<option selected="selected">--Select Date--</option>
<?php	 	 		 		 	 	 		 		 		 		 		 	

  
$sql=mysql_query("SELECT id, slot_date FROM `__global`.`x_rec_chatdates` WHERE schoolID = 1 AND active = 0 ORDER BY slot_date;");
while($row=mysql_fetch_array($sql))
{
	$id=$row['id'];
	$data=$row['slot_date'];
	echo '<option value="'.$id.'">'.$data.'</option>';
} 

?>
</select> <br/><br/>

Time :
<select name="time" class="time">
<option selected="selected">--Select Time--</option>
</select>
