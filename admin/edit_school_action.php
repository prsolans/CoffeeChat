<?php                                     

include('../config/connect.php');
  
  $id = $_GET['id'];
  $name = $_GET['name'];
  $image = $_GET['image'];
  $contactname = $_GET['contactname'];
  $contactemail = $_GET['contactemail'];
  $liveurl = $_GET['formurl'];

  $query = "UPDATE `".$database."`.`School` SET name='".$name."', image='".$image."', contactname='".$contactname."', contactemail='".$contactemail."', formurl='".$liveurl."' WHERE id='".$id."';";
  //echo $query;
  //echo mysql_query($query) ? OK : FAIL;
  mysql_query($query);
    
 
  header("Location: ".$baseurl."/admin/edit_school.php?school=".$id."&alert=1");
?>
