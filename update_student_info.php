<?php
 include('dbcon.php');
 include('session.php');
 $first  = $_POST['firstname'];
 $last  = $_POST['lastname'];

 mysqli_query($conn, "update student set firstname = '$first', lastname ='$last' where student_id = '$session_id'")or die(mysqli_error());
 ?>