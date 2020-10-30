<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body  style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('department_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid" style="margin-left: 25px;">
					 
					 
				
					 
                        <!-- block -->
                        <div class="block" style="box-shadow: none;">
                            
                        	<div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>

                            <div class="block-content collapse in">
                                
								
                                                                                                
                                <form method="post" id="update_info">
                                    

                                    <div class="control-group" >
                                        <label>First Name:</label>
                                        <div class="controls">
                                            <input type="text" name="firstname" id="first" value="<?php echo $row['firstname']; ?>"> 
                                        </div>
                                    </div>

                                    <div class="control-group" >
                                        <label>Last Name:</label>
                                        <div class="controls">
                                            <input type="text" name="lastname" id="last" value="<?php echo $row['lastname']; ?>"> 
                                        </div>
                                    </div>
                                                                        
                                

                                    <div class="control-group">
                                    <div class="controls">
                                            <button name="save" class="btn btn-success "><i class="icon-update"></i> Update Profile</button>
                                    </div>
                                    </div>
                                </form>
	<script>
	jQuery(document).ready(function(){
			jQuery("#update_info").submit(function(e){
					e.preventDefault();
						
						var first = jQuery('#firstname').val();
						var last = jQuery('#lastname').val();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "../update_admin_profile.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("Profile is sucessfully updated", { header: 'Change profile Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						
						}
						
						
					});
			
					
				});
			});
			</script>
</div>
										
										
										
								 
						
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