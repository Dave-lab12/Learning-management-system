<div class="box-body box-profile pull-right"  >							        	
	<form method="post" id="">
		<div class="control-group">
			<label>User Name:</label>
	          <div class="controls">
				<input type="text" name="firstname" value="<?php echo $row['username']; ?>"> 
	          </div>
        </div>

		<div class="control-group">
			<label>First Name:</label>
	          <div class="controls">
				<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"> 
	          </div>
        </div>

        <div class="control-group">
			<label>Last Name:</label>
	          <div class="controls">
				<input type="text" name="firstname" value="<?php echo $row['lastname']; ?>"> 
	          </div>
        </div>
                                        	
      	<div class="control-group">
			<label>Subject:</label>
			    <div class="controls">
				    <select name="subject_id"  class="" required>
					    <option<?php echo $row1['department_id']; ?>><?php echo $row1['department_name']; ?></option>
							<?php
								$query2 = mysqli_query($conn, "select * from department order by department_id");
								while($row2 = mysqli_fetch_array($query2)){
							?>
						<option value="<?php echo $row2['department_id']; ?>"><?php echo $row2['department_name']; ?></option>
							<?php } ?>
				    </select>
			    </div>
    	</div>

		<div class="control-group">
          <div class="controls">
				<button name="save" class="btn btn-success btn-block" onclick="comfirm('Are you sure')"><i class="icon-update"></i> Update Profile</button>
          </div>
        </div>
    </form>
</div>
										
										
										
								 