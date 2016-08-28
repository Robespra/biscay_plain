 include('database_connection.php');

if(isset($_POST['lastmsg']) &&is_numeric($_POST['lastmsg']))//some validation to prevent sql injection
{
$lastmsg=$_POST['lastmsg']; //getting the row id of last msg displayed
$query="select * from twitter where msg_id>'$lastmsg' order by msg_id asc limit 9";
$result = mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$msg_id=$row['msg_id'];
$message=$row['message'];
?>
<li> <?php echo $message; ?> </li>
<?php
}

?>
<?php

if( mysqli_num_rows($result)==9){ //this if else statement "decides" whether end of page has reached or there's more data to load .
 ?>
<div id="facebook_style"> <a id="<?php echo $message; ?>" href="#" >Show Older Posts <img src="arrow1.png" /></a> </div>
<?php
 }else {

 echo '  <div  id="facebook_style">
 <a  id="end" href="#" >No More Posts</a>
 </div>';

 }
}