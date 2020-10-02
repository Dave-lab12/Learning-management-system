<!-- Profile Image -->
<?php 
		$query1= mysqli_query($conn, "select * from department where department_id = '$department_id'")or die(mysqli_error());
		$row1 = mysqli_fetch_array($query1);
?>
<div class="box box-primary" >
	<div class="row">
		<div class="span12" style="margin: 5px;">
        <div class="box-body box-profile">
              <center><img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>"></center>

              <h3 class="profile-username text-center"><?php echo $row['firstname'] ." ". $row['lastname']; ?></h3>


              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Dapartment</b> <a class="pull-right" style="text-decoration: none;"><?php echo $row1['department_name']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Status</b> <a class="pull-right" style="text-decoration: none;"><?php echo $row['teacher_status']; ?></a>
                </li>
              </ul>

              
           
            <a tabindex="-1" href="#myModal" data-toggle="modal" class="btn btn-primary btn-block"><i class="icon-picture "></i> Change Avatar</a>
              
        </div>
	</div>
</div>
</div>
