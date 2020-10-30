<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'dbcon.php';
if (isset($_POST["email"])) {
	$emailTo = $_POST["email"];
	$code = uniqid(true);
	$query = mysqli_query($conn, "INSERT INTO  teacher_reset_password (code,email) VALUES('$code','$emailTo')");
	if (!$query) {
		exit("error");
	}
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = '';                     // SMTP username
		$mail->Password   = '';                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('workp268@gmail.com', 'U-learn');
		$mail->addAddress("$emailTo");     // Add a recipient
		$mail->addReplyTo('no-reply@gmail.com', 'No reply');


		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$url = $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset_teacher_password.php?code=$code";
		$mail->Subject = 'U-Learn password reset link';
		$mail->Body    = "<h1>YOU REQUESTED A PASSWORD RESET</h1> 
                                click  <a href='$url'>this link</a> to do so";
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Reset password link has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	exit();
}

?>
<html>

<head>
	<meta charset="utf-8">
	<title>Forgot pasword</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link type="text/css" href="admin/assets/teacher-forgot-password/bannerify.css" rel="stylesheet" />
</head>

<body>
	<Form method="POST">
		<div id="banner6_053542753">
			<div id="b_1_banner6_053542753" class="js-bnfy">
				<img id="img_1_banner6_053542753" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="admin/assets/teacher-forgot-password/images/rectangle-1_865952887.svg" />
			</div>
			<div id="b_2_banner6_053542753" class="js-bnfy">
				<img id="img_2_banner6_053542753" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="admin/assets/teacher-forgot-password/images/rectangle-2_535567297.png" />
			</div>
			<div id="b_3_banner6_053542753" class="js-bnfy">
				<img id="img_3_banner6_053542753" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="admin/assets/teacher-forgot-password/images/rectangle-3_811904227.svg" />
			</div>
			<div id="b_4_banner6_053542753" class="js-bnfy">
				<button type="submit" name="submit" class="btn"><span>Click here to reset your password</span></button>
			</div>
			<div id="b_5_banner6_053542753" class="js-bnfy">
				<img id="img_5_banner6_053542753" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="admin/assets/teacher-forgot-password/images/rectangle-5_039944372.svg" />
			</div>
			<div id="b_6_banner6_053542753" class="js-bnfy">
				<label class="field field_v2">
					<input class="field__input" type="email" name="email" placeholder="e.g. example@example.com" autocomplete="off" required>
					<span class="field__label-wrap">
						<span class="field__label">Email</span>
					</span>

				</label>
			</div>
			<div id="b_7_banner6_053542753" class="js-bnfy">
				<img id="img_7_banner6_053542753" class="bnfy-enter" alt="Forgot password" width="194" height="36" src="admin/assets/teacher-forgot-password/images/forgot-password_169479668.svg" />
			</div>

			<div id="b_9_banner6_053542753" class="js-bnfy">
				<img id="img_9_banner6_053542753" class="bnfy-enter" alt="Enter your email to reset your password" width="320" height="24" src="admin/assets/teacher-forgot-password/images/enter-your-email-to-reset-your-password_227661165.svg" />
			</div>
			<div id="b_10_banner6_053542753" class="js-bnfy">
				<a href="Teacher-Sign-in.php"> <img id="img_10_banner6_053542753" class="bnfy-enter" alt="Login" width="56" height="28" src="admin/assets/teacher-forgot-password/images/login_150179523.svg" /></a>
			</div>
			<div id="b_11_banner6_053542753" class="js-bnfy">
				<a href="Teacher-sign-in.php"> <img id="img_11_banner6_053542753" class="bnfy-enter" alt="Teacher" width="86" height="26" src="admin/assets/teacher-forgot-password/images/teacher_053391630.svg" /></a>
			</div>
			<div id="b_12_banner6_053542753" class="js-bnfy">
				<a href="admin/index.php"> <img id="img_12_banner6_053542753" class="bnfy-enter" alt="Adminstrator" width="132" height="26" src="admin/assets/teacher-forgot-password/images/adminstrator_558460272.svg" /></a>
			</div>
			<div id="b_13_banner6_053542753" class="js-bnfy">
				<a href="signup_teacher.php"> <img id="img_13_banner6_053542753" class="bnfy-enter" alt="Sign Up" width="74" height="26" src="admin/assets/teacher-forgot-password/images/sign-up_256081685.svg" /></a>
			</div>
			<div id="b_14_banner6_053542753" class="js-bnfy">
				<img id="img_14_banner6_053542753" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin/assets/teacher-forgot-password/images/logo-and-name_459523075.svg" />
			</div>
			<div id="b_15_banner6_053542753" class="js-bnfy">
				<img id="img_15_banner6_053542753" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin/assets/teacher-forgot-password/images/logo-and-name_047096762.svg" />
			</div>
			<div id="b_16_banner6_053542753" class="js-bnfy">
				<img id="img_16_banner6_053542753" class="bnfy-enter" alt="Ellipse 1" width="524" height="514" src="admin/assets/teacher-forgot-password/images/ellipse-1_018967186.svg" />
			</div>
			<div id="b_17_banner6_053542753" class="js-bnfy">
				<img id="img_17_banner6_053542753" class="bnfy-enter" alt="undraw_forgot_password_gi2d 1" width="526" height="354" src="admin/assets/teacher-forgot-password/images/undraw-forgot-password-gi2d-1_038649998.svg" />
			</div>


		</div>
	</form>
</body>

</html>