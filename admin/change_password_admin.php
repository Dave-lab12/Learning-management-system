<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('department_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid" style="margin-left: 25px;">
					   
					 
                        <!-- block -->
                        <div id="block_bg" class="block" style="box-shadow: none;">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<div class="alert alert-info"><i class="icon-info-sign"></i> Please Fill in required details</div>
								<?php
								$query = mysqli_query($conn, "select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>								
										
								    <form  method="post" id="change_password" class="form-horizontal">
									
										<div class="control-group">
											<label class="control-label" for="inputPassword">New Password</label>
											<div class="controls">
											<input type="password" id="new_password" name="new_password" placeholder="New Password">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Re-type Password</label>
											<div class="controls">
											<input type="password" id="retype_password" name="retype_password" placeholder="Re-type Password">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
											</div>
										</div>
									</form>
									
												<script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
					
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						 if  (new_password != retype_password){
						$.jGrowl("Password does not match with your new password  ", { header: 'Change Password Failed' });
						}else{
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_password.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("Your password is successfully changed", { header: 'Change Password Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						
						}
						
						
					});
			
					}
				});
			});
			</script>
										
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					

	

                </div>
	
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>
</html>