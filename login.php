<?php
		include('admin/dbcon.php');
		session_start();
		$username =   htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
		$password =  htmlspecialchars(mysqli_real_escape_string($conn,$_POST['password']));
		/* student */
			$query = "SELECT * FROM student WHERE username='$username' ";
			$result = mysqli_query($conn, $query)or die(mysqli_error());
			 $num_row = mysqli_num_rows($result);
			/* teacher */
				$query_teacher =  "SELECT * FROM teacher WHERE username='$username' ";
				$resultT= mysqli_query($conn,$query_teacher) or die(mysqli_error());
				// $row_teahcer = mysqli_fetch_array($query_teacher);
				$num_row_teacher = mysqli_num_rows($resultT);
				
		
		if( $num_row > 0 ) {
		while ($row = mysqli_fetch_array($result)){
			if(password_verify($password,$row['password'])){
					$_SESSION['id']=$row['student_id'];
					echo 'true_student';
				}
			}
	
		}else if($num_row_teacher > 0){
		while($row_teahcer = mysqli_fetch_array($resultT)){
			if(password_verify($password,$row_teahcer['password'])){
					$_SESSION['id']=$row_teahcer['teacher_id'];
					echo 'true';
				}
		}				
			}
		 else{ 
				echo 'false';
		}	
				
		?>