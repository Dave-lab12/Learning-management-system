
			<html>
<head>
	<meta charset="utf-8">
	<title>u-learn Student-Sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link type="text/css" href="../U-learn experimental/admin/assets/student-sign-up/bannerify.css" rel="stylesheet" />
</head>
<body>
			<form id="signin_student" method="post">
	<div id="banner4_948223658">
		<div  id="b_1_banner4_948223658" class="js-bnfy">
			<img id="img_1_banner4_948223658" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="../U-learn experimental/admin/assets/student-sign-up/images/rectangle-1_980669697.svg"/>
		</div>
		<div  id="b_2_banner4_948223658" class="js-bnfy">
			<img id="img_2_banner4_948223658" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="../U-learn experimental/admin/assets/student-sign-up/images/rectangle-2_874330978.png"/>
		</div>
		<div  id="b_3_banner4_948223658" class="js-bnfy">
			<img id="img_3_banner4_948223658" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="../U-learn experimental/admin/assets/student-sign-up/images/rectangle-3_255943407.svg"/>
		</div>
		<div  id="b_4_banner4_948223658" class="js-bnfy">
		<button id="signin" style="margin-top: 20px;margin-left:20px" name="login"  class="btn" type="submit"><span>Sign
						In</span></button>	
						</div>
		<div  id="b_5_banner4_948223658" class="js-bnfy">
			<img id="img_5_banner4_948223658" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="../U-learn experimental/admin/assets/student-sign-up/images/rectangle-5_983942353.svg"/>
		</div>
	
		
		<div  id="b_12_banner4_948223658" class="js-bnfy">
			<img id="img_12_banner4_948223658" class="bnfy-enter" alt="SIGN UP" width="90" height="36" src="../U-learn experimental/admin/assets/student-sign-up/images/sign-up_099470595.svg"/>
		</div>
		<div  id="b_13_banner4_948223658" class="js-bnfy">
			<img id="img_13_banner4_948223658" class="bnfy-enter" alt="Sign in" width="58" height="28" src="../U-learn experimental/admin/assets/student-sign-up/images/sign-in_484322432.svg"/>
		</div>
		<div  id="b_14_banner4_948223658" class="js-bnfy">
			<img id="img_14_banner4_948223658" class="bnfy-enter" alt="Sign Up to Use our application" width="244" height="24" src="../U-learn experimental/admin/assets/student-sign-up/images/sign-up-to-use-our-application_287273418.svg"/>
			<br>
			<div class="page">
				<label class="field a-field a-field_a1">
				  <input class="field__input a-field__input" type="text" id="username" name="username" placeholder="e.g. Abebe001" required>
				  <span class="a-field__label-wrap">
					<span class="a-field__label">ID Number</span>
				  </span>
				</label>
				<label class="field a-field a-field_a2">
				  <input class="field__input a-field__input" type="text" id="firstname" name="firstname" placeholder="e.g. Ayele" required>
				  <span class="a-field__label-wrap">
					<span class="a-field__label">First Name</span>
				  </span>
				</label> 
				<label class="field a-field a-field_a3">
					<input class="field__input a-field__input" type="text" id="lastname" name="lastname" placeholder="e.g. Abebe001" required>
					<span class="a-field__label-wrap">
					  <span class="a-field__label">Last Name</span>
					</span>
				  </label>
				  <label class="field a-field a-field_a3">
					<input class="field__input a-field__input" type="password" id="password" name="password" placeholder=" Type your password" required>
					<span class="a-field__label-wrap">
					  <span class="a-field__label">Password</span>
					</span>
				  </label>
				  
				  <label class="field a-field a-field_a3">
					<input class="field__input a-field__input" type="password" id="cpassword" name="cpassword" placeholder="Re-Type your password" required>
					<span class="a-field__label-wrap">
					  <span class="a-field__label">Re-type Password</span>
					</span>
				  </label>
				<br>
				<br>
				<div class="custom-select" >
					<select name="class_id">
					
				<?php
				$query = mysqli_query($conn, "select * from class order by class_name ")or die(mysqli_error());
				while($row = mysqli_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
					</select>
					
				</div>  
				
			  </div>
		</div>
		
	
		
	
		<div  id="b_21_banner4_948223658" class="js-bnfy">
		<a href="index.php">	<img id="img_21_banner4_948223658" class="bnfy-enter" alt="Login" width="56" height="26" src="../U-learn experimental/admin/assets/student-sign-up/images/login_171544297.svg"/></a>
		</div>
		<div  id="b_22_banner4_948223658" class="js-bnfy">
		<a href="#">	<img id="img_22_banner4_948223658" class="bnfy-enter" alt="Teacher" width="86" height="28" src="../U-learn experimental/admin/assets/student-sign-up/images/teacher_339841965.svg"/></a>
		</div>
		<div  id="b_23_banner4_948223658" class="js-bnfy">
		<a href="#">	<img id="img_23_banner4_948223658" class="bnfy-enter" alt="Adminstrator" width="132" height="28" src="../U-learn experimental/admin/assets/student-sign-up/images/adminstrator_935578553.svg"/></a>
		</div>
		<div  id="b_24_banner4_948223658" class="js-bnfy">
		<a href="#">	<img id="img_24_banner4_948223658" class="bnfy-enter" alt="Sign Up" width="74" height="26" src="../U-learn experimental/admin/assets/student-sign-up/images/sign-up_802628407.svg"/></a>
		</div>
		<div  id="b_25_banner4_948223658" class="js-bnfy">
			<img id="img_25_banner4_948223658" class="bnfy-enter" alt="logo and name" width="186" height="64" src="../U-learn experimental/admin/assets/student-sign-up/images/logo-and-name_010679115.svg"/>
		</div>
		<div  id="b_26_banner4_948223658" class="js-bnfy">
		<a href="index.php">	<img id="img_26_banner4_948223658" class="bnfy-enter" alt="logo and name" width="186" height="64" src="../U-learn experimental/admin/assets/student-sign-up/images/logo-and-name_487776786.svg"/></a>
		</div>
		<div  id="b_27_banner4_948223658" class="js-bnfy">
			<img id="img_27_banner4_948223658" class="bnfy-enter" alt="Ellipse 1" width="524" height="514" src="../U-learn experimental/admin/assets/student-sign-up/images/ellipse-1_374268801.svg"/>
		</div>
		<div  id="b_28_banner4_948223658" class="js-bnfy">
			<img id="img_28_banner4_948223658" class="bnfy-enter" alt="undraw_welcome_cats_thqn 1" width="460" height="264" src="../U-learn experimental/admin/assets/student-sign-up/images/undraw-welcome-cats-thqn-1_995022755.svg"/>
		</div>
		
	</div>
	</form>
		

			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_student").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to U-learn", { header: 'Sign up Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
						}else if(html=='false'){
							$.jGrowl("student does not found in the database Please Sure to Check Your ID Number or Firstname, Lastname and the Section You Belong. ", { header: 'Sign Up Failed' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("student does not found in the database", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>			
			
				
			</body>
			</html>
					