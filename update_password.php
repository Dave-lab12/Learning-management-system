 <?php
 include('dbcon.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 $hash = password_hash($new_password, PASSWORD_BCRYPT);
 mysqli_query($conn, "update teacher set password = '$hash' where teacher_id = '$session_id'")or die(mysqli_error());
 ?>