<?php include('header2.php'); ?>
  <body id="login">
   
      <form id="login_form" class="form-signinn" method="post">
	  <div id="banner1_320059260">
		<div  id="b_1_banner1_320059260" class="js-bnfy">
			<img id="img_1_banner1_320059260" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="./assets/admin-sign-in/images/rectangle-1_467332688.svg"/>
		</div>
		<div  id="b_2_banner1_320059260" class="js-bnfy">
			<img id="img_2_banner1_320059260" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="./assets/admin-sign-in/images/rectangle-2_996737584.png"/>
		</div>
		<div  id="b_3_banner1_320059260" class="js-bnfy">
			<img id="img_3_banner1_320059260" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="./assets/admin-sign-in/images/rectangle-3_762834571.svg"/>
		</div>
		<div  id="b_4_banner1_320059260" class="js-bnfy">
		<button name="login" id="signin" data-placement="right" class="btn" type="submit"><span>Sign
						In</span></button>	
						</div>
		<div  id="b_5_banner1_320059260" class="js-bnfy">
		<a href="#">	<img id="img_5_banner1_320059260" class="bnfy-enter" alt="Forgot Password?" width="134" height="24" src="./assets/admin-sign-in/images/forgot-password_557641254.svg"/></a>
		</div>
		<div  id="b_6_banner1_320059260" class="js-bnfy">
			<img id="img_6_banner1_320059260" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="./assets/admin-sign-in/images/rectangle-5_974363979.svg"/>
		</div>
		
		
		<div  id="b_9_banner1_320059260" class="js-bnfy">
			<img id="img_9_banner1_320059260" class="bnfy-enter" alt="SIGN IN" width="84" height="36" src="./assets/admin-sign-in/images/sign-in_243406016.svg"/>
		</div>
		<div  id="b_10_banner1_320059260" class="js-bnfy">
			<img id="img_10_banner1_320059260" class="bnfy-enter" alt="Sign in" width="60" height="28" src="./assets/admin-sign-in/images/sign-in_483355203.svg"/>
		</div>
		<div  id="b_11_banner1_320059260" class="js-bnfy">
			<img id="img_11_banner1_320059260" class="bnfy-enter" alt="Sign in to continue to our application" width="298" height="26" src="./assets/admin-sign-in/images/sign-in-to-continue-to-our-application_150678100.svg"/>
			<br><br>
			<label class="field a-field a-field_a3">
				<input class="field__input a-field__input" type="text" id="usernmae"  name="username" placeholder="Eg. Abebe001" required>
				<span class="a-field__label-wrap">
				  <span class="a-field__label">User Name</span>
				</span>
			  </label>
			<label class="field a-field a-field_a3">
				<input class="field__input a-field__input" id="password" type="password" name="password" placeholder="Type your password" required>
				<span class="a-field__label-wrap">
				  <span class="a-field__label">Password</span>
				</span>
			  </label>
		</div>
		
		
		<div  id="b_15_banner1_320059260" class="js-bnfy">
		<a href="../index.php">	<img id="img_15_banner1_320059260" class="bnfy-enter" alt="Student" width="86" height="26" src="./assets/admin-sign-in/images/student_556852329.svg"/></a>
		</div>
		<div  id="b_16_banner1_320059260" class="js-bnfy">
		<a href="../Teacher-sign-in.php">	<img id="img_16_banner1_320059260" class="bnfy-enter" alt="Teacher" width="132" height="26" src="./assets/admin-sign-in/images/teacher_206026203.svg"/></a>
		</div>
		<div  id="b_18_banner1_320059260" class="js-bnfy">
			<img id="img_18_banner1_320059260" class="bnfy-enter" alt="logo and name" width="186" height="64" src="./assets/admin-sign-in/images/logo-and-name_989518895.svg"/>
		</div>
		<div  id="b_19_banner1_320059260" class="js-bnfy">
		<a href="#">	<img id="img_19_banner1_320059260" class="bnfy-enter" alt="logo and name" width="186" height="64" src="./assets/admin-sign-in/images/logo-and-name_813489418.svg"/></a>
		</div>
		<div  id="b_20_banner1_320059260" class="js-bnfy">
			<img id="img_20_banner1_320059260" class="bnfy-enter" alt="Ellipse 1" width="524" height="514" src="./assets/admin-sign-in/images/ellipse-1_645693260.svg"/>
		</div>
		<div  id="b_21_banner1_320059260" class="js-bnfy">
			<img id="img_21_banner1_320059260" class="bnfy-enter" alt="undraw_product_iteration_kjok 1" width="508" height="366" src="./assets/admin-sign-in/images/undraw-product-iteration-kjok-1_723292791.svg"/>
		</div>
		
	</div>
	

		
		      </form>
			  <script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to U-learn", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>

		


    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>