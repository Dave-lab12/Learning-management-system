<?php
		include('dbcon.php');
		session_start();
		$username = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['username']));
		$password = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['password']));

		$query =  "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($conn,$query)or die(mysqli_error());
		$count = mysqli_num_rows($result);
		


		if ($count > 0){
		while($row = mysqli_fetch_array($result)){
			if(password_verify($password,$row['password'])){
				$_SESSION['id']=$row['user_id'];
				echo 'true';
			}
		}
	}
		else{ 
		echo 'false';
		}	
				
		?>