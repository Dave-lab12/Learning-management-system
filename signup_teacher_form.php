			
			<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link type="text/css" href="admin\assets\teacher-sign-up\bannerify.css" rel="stylesheet" />
	<link type="text/css" href="admin\assets\button.css" rel="stylesheet" />
</head>
<body>
	<form  id="signin_teacher"  method="post" >
	<div id="banner2_809869549">
		<div  id="b_1_banner2_809869549" class="js-bnfy">
			<img id="img_1_banner2_809869549" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="admin\assets\teacher-sign-up\images/rectangle-1_991319962.svg"/>
		</div>
		<div  id="b_2_banner2_809869549" class="js-bnfy">
			<img id="img_2_banner2_809869549" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="admin\assets\teacher-sign-up\images/rectangle-2_680475658.png"/>
		</div>
		<div  id="b_3_banner2_809869549" class="js-bnfy">
			<img id="img_3_banner2_809869549" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="admin\assets\teacher-sign-up\images/rectangle-3_640925412.svg"/>
		</div>
		<div  id="b_4_banner2_809869549" class="js-bnfy">
		<button id="signin" style="margin-top: 20px;margin-left:20px" name="login"  class="btn" type="submit"><span>Sign
						In</span></button>	
	</div>
		<div  id="b_5_banner2_809869549" class="js-bnfy">
			<img id="img_5_banner2_809869549" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="admin\assets\teacher-sign-up\images/rectangle-5_196801676.svg"/>
		</div>
		

		<div  id="b_12_banner2_809869549" class="js-bnfy">
			<img id="img_12_banner2_809869549" class="bnfy-enter" alt="SIGN UP" width="92" height="36" src="admin\assets\teacher-sign-up\images/sign-up_397469548.svg"/>
		</div>
		<div  id="b_13_banner2_809869549" class="js-bnfy">
			<img style="cursor: pointer;" id="img_13_banner2_809869549" class="bnfy-enter" alt="Sign in" width="60" height="28" src="admin\assets\teacher-sign-up\images/sign-in_470180990.svg"/>
		</div>
		<div  id="b_14_banner2_809869549" class="js-bnfy">
			<img id="img_14_banner2_809869549" class="bnfy-enter" alt="Sign Up to Use our application" width="244" height="24" src="admin\assets\teacher-sign-up\images/sign-up-to-use-our-application_691436826.svg"/>
			<br>
			
			<div class="page">
				<label class="field a-field a-field_a1">
				  <input class="field__input a-field__input" type="text" name="firstname" placeholder="e.g. Abebe" required>
				  <span class="a-field__label-wrap">
					<span class="a-field__label">First name</span>
				  </span>
				</label>
				<label class="field a-field a-field_a2">
				  <input class="field__input a-field__input" type="text" name="lastname" placeholder="e.g. Ayele" required>
				  <span class="a-field__label-wrap">
					<span class="a-field__label">Last name</span>
				  </span>
				</label> 
				<label class="field a-field a-field_a3">
					<input class="field__input a-field__input" type="text" id="username" name="username"  placeholder="e.g. Abebe001" required>
					<span class="a-field__label-wrap">
					  <span class="a-field__label">User Name</span>
					</span>
				  </label>
				  <label class="field a-field a-field_a3">
					<input class="field__input a-field__input" type="password" id="password" name="password" placeholder=" Type your password" required>
					<span class="a-field__label-wrap">
					  <span class="a-field__label">Password</span>
					</span>
				  </label>
				  <label class="field a-field a-field_a3">
					<input class="field__input a-field__input" type="password" id="cpassword" name="cpassword"  placeholder="Re-Type your password" required>
					<span class="a-field__label-wrap">
					  <span class="a-field__label">Re-type Password</span>
					</span>
				  </label>
				<br>
				<br>
				<div class="custom-select">
					<select name="department_id">
						
						<?php
						$query = mysqli_query($conn, "select * from department order by department_name ")or die(mysqli_error());
						while($row = mysqli_fetch_array($query)){
						?>
						<option value="<?php echo $row['department_id'] ?>"><?php echo $row['department_name']; ?></option>
						<?php
						}
						?>
					</select>
					
				</div>   
				
			  </div>
			  
		</div>
		<div  id="b_21_banner2_809869549" class="js-bnfy">
			<a href="teacher-sign-in.php"><img id="img_21_banner2_809869549" class="bnfy-enter" alt="Login" width="54" height="26" src="admin\assets\teacher-sign-up\images\login_369945788.svg"/></a>
		</div>
		
		<div  id="b_22_banner2_809869549" class="js-bnfy">
			<a href="index.php"><img id="img_22_banner2_809869549" class="bnfy-enter" alt="Student" width="84" height="28" src="admin\assets\teacher-sign-up\images/student_153559277.svg"/></a>
		</div>
		<div  id="b_23_banner2_809869549" class="js-bnfy">
			<a href="admin/index.php" ><img id="img_23_banner2_809869549" class="bnfy-enter" alt="Adminstrator" width="134" height="28" src="admin\assets\teacher-sign-up\images/adminstrator_191701554.svg"/> </a>
		</div>
		<div  id="b_24_banner2_809869549" class="js-bnfy">
			<a href="#"><img id="img_24_banner2_809869549" class="bnfy-enter" alt="Sign Up" width="72" height="26" src="admin\assets\teacher-sign-up\images/sign-up_563600200.svg"/></a>
		</div>
		<div  id="b_25_banner2_809869549" class="js-bnfy">
			<img id="img_25_banner2_809869549" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin\assets\teacher-sign-up\images/logo-and-name_777113573.svg"/>
		</div>
		<div  id="b_26_banner2_809869549" class="js-bnfy">
			<img id="img_26_banner2_809869549" class="bnfy-enter" alt="logo and name" width="186" height="64" src="admin\assets\teacher-sign-up\images/logo-and-name_764807570.svg"/>
		</div>
		<div  id="b_27_banner2_809869549" class="js-bnfy">
			<img id="img_27_banner2_809869549" class="bnfy-enter" alt="Ellipse 1" width="522" height="514" src="admin\assets\teacher-sign-up\images/ellipse-1_168905825.svg"/>
		</div>
		<div  id="b_28_banner2_809869549" class="js-bnfy">
			<img id="img_28_banner2_809869549" class="bnfy-enter" alt="undraw_welcome_cats_thqn 1" width="460" height="264" src="admin\assets\teacher-sign-up\images/undraw-welcome-cats-thqn-1_512767681.svg"/>
		</div>
		
	</div>
</form>

<script>
			jQuery(document).ready(function(){
			jQuery("#signin_teacher").submit(function(e){
					e.preventDefault();
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "teacher_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to Da-viruz School Management System", { header: 'Sign up Success' });
						var delay = 1000;
							setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
						}else{
							$.jGrowl("Your data is not found in the database", { header: 'Sign Up Failed' });
						}
						}
					});
			
					}else
						{
						$.jGrowl("Your data is not found in the database", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>


	</body>
</html>
			
