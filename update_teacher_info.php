<?php
 include('dbcon.php');
 include('session.php');
 $first  = $_POST['firstname'];
 $last  = $_POST['Lastname'];

 mysqli_query($conn, "update teacher set firstname = '$first', lastname ='$last' where teacher_id = '$session_id'")or die(mysqli_error());
 ?>