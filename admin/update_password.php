<?php
 include('dbcon.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 $hash = password_hash($new_password, PASSWORD_BCRYPT);
 mysqli_query($conn, "update users set password = '$hash' where user_id = '$session_id'")or die(mysqli_error());
 ?>