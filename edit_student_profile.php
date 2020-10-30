<div class="box-body box-profile pull-right"  >							        	
	<form method="post" id="update_info">
		

		<div class="control-group">
			<label>First Name:</label>
	          <div class="controls">
				<input type="text" name="firstname" id="first" value="<?php echo $row['firstname']; ?>"> 
	          </div>
        </div>

        <div class="control-group">
			<label>Last Name:</label>
	          <div class="controls">
				<input type="text" name="lastname" id="last" value="<?php echo $row['lastname']; ?>"> 
	          </div>
        </div>
                                        	
     

		<div class="control-group">
          <div class="controls">
				<button name="save" class="btn btn-success btn-block" onclick="comfirm('Are you sure')"><i class="icon-update"></i> Update Profile</button>
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
						url: "update_student_info.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("Profile is sucessfully updated", { header: 'Change profile Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'profile_student.php'  }, delay);  
						
						}
						
						
					});
			
					
				});
			});
			</script>
</div>
										
										
										
								 