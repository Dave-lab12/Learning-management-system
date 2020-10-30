<?php
include('dbcon.php');
        
               $un = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['un']));
               $fn = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['fn']));
               $ln = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['ln']));
               $class_id = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['class_id']));
               
$user= mysqli_query($conn,"select username from student where username='$un' ");
$result = mysqli_num_rows($user);
if($result > 0) {?>
    <script>
    alert('Data Already Exist');
    </script>
    <?php 
}else{  mysqli_query($conn, "insert into student (username,firstname,lastname,location,class_id,status)
    values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')                                    
    ") or die(mysqli_error());

}
               
         ?>
