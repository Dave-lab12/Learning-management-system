<?php
require 'dbcon.php';
if(!isset($_GET["code"])){
    exit("Page Not found");
}

 $code = $_GET["code"];

 $getEmailQuery  = mysqli_query($conn,  "SELECT email FROM teacher_reset_password WHERE code='$code' ");//studentlogin table
 if(mysqli_num_rows($getEmailQuery) == 0) {
     exit("Page Not Found");
 }

if(isset($_POST["password"])) {
    $pw = $_POST["password"];
	$hash = password_hash($pw, PASSWORD_BCRYPT);
    $row = mysqli_fetch_array($getEmailQuery);
    $email = $row["email"];
    $query = mysqli_query($conn,"UPDATE teacher SET password = '$hash' WHERE username = '$email'");

    if($query){
    $query = mysqli_query($conn, "DELETE FROM teacher_reset_password WHERE code='$code'");//another table
    exit("password Updated click <a href='admin/index.php'>here to go back</a>");
}else{
    exit("sorry something went wrong");
}
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>forgot password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link type="text/css" href="admin/assets/teacher-new-password/bannerify.css" rel="stylesheet" />
</head>
<body>
    <form method="POST">
	<div id="banner7_425323282">
		<div  id="b_1_banner7_425323282" class="js-bnfy">
			<img id="img_1_banner7_425323282" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="admin/assets/teacher-new-password/images/rectangle-1_414608249.svg"/>
		</div>
		<div  id="b_2_banner7_425323282" class="js-bnfy">
			<img id="img_2_banner7_425323282" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="admin/assets/teacher-new-password/images/rectangle-2_153166209.png"/>
		</div>
		<div  id="b_3_banner7_425323282" class="js-bnfy">
			<img id="img_3_banner7_425323282" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="admin/assets/teacher-new-password/images/rectangle-3_438407350.svg"/>
		</div>
		<div  id="b_4_banner7_425323282" class="js-bnfy">
			<button type="submit" name="submit" class="btn"><span>Update password</span></button>
		</div>
		<div  id="b_5_banner7_425323282" class="js-bnfy">
			<img id="img_5_banner7_425323282" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="admin/assets/teacher-new-password/images/rectangle-5_556086869.svg"/>
		</div>
		<div  id="b_6_banner7_425323282" class="js-bnfy">
			<label class="field field_v2">
				<input class="field__input" type="password" name="password" placeholder="New Password" autocomplete="off" required>
				<span class="field__label-wrap">
				  <span class="field__label">New Password</span>
				</span>
                
			  </label> 
					</div>
		
		<div  id="b_8_banner7_425323282" class="js-bnfy">
			<img id="img_8_banner7_425323282" class="bnfy-enter" alt="Login" width="56" height="28" src="admin/assets/teacher-new-password/images/login_255331199.svg"/>
		</div>
		<div  id="b_9_banner7_425323282" class="js-bnfy">
			<img id="img_9_banner7_425323282" class="bnfy-enter" alt="Student" width="86" height="26" src="admin/assets/teacher-new-password/images/student_101881462.svg"/>
		</div>
		<div  id="b_10_banner7_425323282" class="js-bnfy">
			<img id="img_10_banner7_425323282" class="bnfy-enter" alt="Adminstrator" width="132" height="26" src="admin/assets/teacher-new-password/images/adminstrator_751891616.svg"/>
		</div>
		<div  id="b_11_banner7_425323282" class="js-bnfy">
			<img id="img_11_banner7_425323282" class="bnfy-enter" alt="Sign Up" width="74" height="26" src="admin/assets/teacher-new-password/images/sign-up_796297902.svg"/>
		</div>
		<div  id="b_12_banner7_425323282" class="js-bnfy">
			<img id="img_12_banner7_425323282" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin/assets/teacher-new-password/images/logo-and-name_114223527.svg"/>
		</div>
		<div  id="b_13_banner7_425323282" class="js-bnfy">
			<img id="img_13_banner7_425323282" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin/assets/teacher-new-password/images/logo-and-name_760557613.svg"/>
		</div>
		<div  id="b_14_banner7_425323282" class="js-bnfy">
			<img id="img_14_banner7_425323282" class="bnfy-enter" alt="Ellipse 1" width="524" height="514" src="admin/assets/teacher-new-password/images/ellipse-1_191424418.svg"/>
		</div>
		
		<div  id="b_16_banner7_425323282" class="js-bnfy">
			<img id="img_16_banner7_425323282" class="bnfy-enter" alt="Enter your new password" width="292" height="36" src="admin/assets/teacher-new-password/images/enter-your-new-password_714401583.svg"/>
		</div>
		<div  id="b_17_banner7_425323282" class="js-bnfy">
			<img id="img_17_banner7_425323282" class="bnfy-enter" alt="undraw_new_message_2gfk 1" width="536" height="410" src="admin/assets/teacher-new-password/images/undraw-new-message-2gfk-1_651636692.svg"/>
		</div>
		
	</div>
    </form>
</body>
</html>