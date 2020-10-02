<div class="navbar navbar-fixed-top navbar-inverse" style="border:none;">
        <div class="navbar-inner"style="border:none;">
            <div class="container-fluid"  style="background-image: linear-gradient(to right, rgb(80,208,249), rgb(0,73,96)); border:20px;outline:0">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
					<span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
                <?php
                    $title_query = mysqli_query($conn, "select * from content where title='title'");
                    $title = mysqli_fetch_assoc($title_query);
                ?>
                <a class="brand" href="#"><?php echo $title['content']; ?></a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
						
							<?php $query= mysqli_query($conn, "select * from student where student_id = '$session_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
							?>
							<li class="dropdown">
								<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="change_password_student.php"><i class="icon-circle"></i> Change Password</a></li>
										<li><a tabindex="-1" href="#myModal_student" data-toggle="modal"><i class="icon-picture"></i> Change Avatar</a></li>
										<li><a tabindex="-1" href="profile_student.php"><i class="icon-user"></i> Profile</a></li>
										<li class="divider"></li>
										<li>
											<a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
										</li>
									</ul>
							</li>
						</ul>
					</div>
            </div>
        </div>
</div>
<?php include('avatar_modal_student.php'); ?>	