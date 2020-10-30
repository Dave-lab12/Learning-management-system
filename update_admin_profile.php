<?php
 include('dbcon.php');
 include('session.php');
 $first  = $_POST['firstname'];
 $last  = $_POST['lastname'];

 mysqli_query($conn, "update users set firstname = '$first', lastname ='$last' where user_id = '$session_id'")or die(mysqli_error());
 ?>