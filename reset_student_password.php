<?php
require 'dbcon.php';
if(!isset($_GET["code"])){
    exit("Page Not found");
}

 $code = $_GET["code"];

 $getEmailQuery  = mysqli_query($conn,  "SELECT email FROM student_reset_password WHERE code='$code' ");//studentlogin table
 if(mysqli_num_rows($getEmailQuery) == 0) {
     exit("Page Not Found");
 }

if(isset($_POST["password"])) {
    $pw = $_POST["password"];
	$hash = password_hash($pw, PASSWORD_BCRYPT);
    $row = mysqli_fetch_array($getEmailQuery);
    $email = $row["email"];
    $query = mysqli_query($conn,"UPDATE student SET password = '$hash' WHERE username = '$email'");

    if($query){
    $query = mysqli_query($conn, "DELETE FROM student_reset_password WHERE code='$code'");//another table
    exit("password Updated click <a href='index.php'>here to go back</a>");
}else{
    exit("sorry something went wrong");
}
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title> Student-new-password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link type="text/css" href="admin/assets/student-new-password/bannerify.css" rel="stylesheet" />
</head>
<body>
<form method="POST">
	<div id="banner5_707400309">
		<div  id="b_1_banner5_707400309" class="js-bnfy">
			<img id="img_1_banner5_707400309" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="admin/assets/student-new-password/images/rectangle-1_361558568.svg"/>
		</div>
		<div  id="b_2_banner5_707400309" class="js-bnfy">
			<img id="img_2_banner5_707400309" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="admin/assets/student-new-password/images/rectangle-2_256293957.png"/>
		</div>
		<div  id="b_3_banner5_707400309" class="js-bnfy">
			<img id="img_3_banner5_707400309" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="admin/assets/student-new-password/images/rectangle-3_478767990.svg"/>
    
		</div>
		<div  id="b_4_banner5_707400309" class="js-bnfy">
			<button type="submit" name="submit" class="btn"><span>Update password</span></button>
		</div>
		<div  id="b_5_banner5_707400309" class="js-bnfy">
			<img id="img_5_banner5_707400309" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="admin/assets/student-new-password/images/rectangle-5_787432889.svg"/>
		</div>
		<div  id="b_6_banner5_707400309" class="js-bnfy">
			<label class="field field_v2">
				<input class="field__input" type="password" name="password" placeholder="New Password" autocomplete="off" required>
				<span class="field__label-wrap">
				  <span class="field__label">New Password</span>
				</span>
                
			  </label> 
		</div>
		<div  id="b_7_banner5_707400309" class="js-bnfy">
			<img id="img_7_banner5_707400309" class="bnfy-enter" alt="Enter your new password" width="292" height="36" src="admin/assets/student-new-password/images/enter-your-new-password_522643438.svg"/>
		</div>
		
		<div  id="b_9_banner5_707400309" class="js-bnfy">
			<img id="img_9_banner5_707400309" class="bnfy-enter" alt="Login" width="54" height="28" src="admin/assets/student-new-password/images/login_074449609.svg"/>
		</div>
		<div  id="b_10_banner5_707400309" class="js-bnfy">
			<img id="img_10_banner5_707400309" class="bnfy-enter" alt="Student" width="84" height="26" src="admin/assets/student-new-password/images/student_248427459.svg"/>
		</div>
		<div  id="b_11_banner5_707400309" class="js-bnfy">
			<img id="img_11_banner5_707400309" class="bnfy-enter" alt="Adminstrator" width="134" height="26" src="admin/assets/student-new-password/images/adminstrator_104623997.svg"/>
		</div>
		<div  id="b_12_banner5_707400309" class="js-bnfy">
			<img id="img_12_banner5_707400309" class="bnfy-enter" alt="Sign Up" width="72" height="26" src="admin/assets/student-new-password/images/sign-up_813114265.svg"/>
		</div>
		<div  id="b_13_banner5_707400309" class="js-bnfy">
			<img id="img_13_banner5_707400309" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin/assets/student-new-password/images/logo-and-name_700667781.svg"/>
		</div>
		<div  id="b_14_banner5_707400309" class="js-bnfy">
			<img id="img_14_banner5_707400309" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin/assets/student-new-password/images/logo-and-name_834096523.svg"/>
		</div>
		<div  id="b_15_banner5_707400309" class="js-bnfy">
			<img id="img_15_banner5_707400309" class="bnfy-enter" alt="Ellipse 1" width="522" height="514" src="admin/assets/student-new-password/images/ellipse-1_462011793.svg"/>
		</div>
		
		<div  id="b_17_banner5_707400309" class="js-bnfy">
			<img id="img_17_banner5_707400309" class="bnfy-enter" alt="undraw_new_message_2gfk 1" width="534" height="410" src="admin/assets/student-new-password/images/undraw-new-message-2gfk-1_562971730.svg"/>
		</div>
		
	</div>

	</form>
</body>
</html>

    


