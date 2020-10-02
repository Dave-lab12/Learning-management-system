	<div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner" style=" border:0;outline:0">
               <div class="container-fluid"  style="background-image: linear-gradient(to right, rgb(80,208,249), rgb(0,73,96)); ">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<?php
                        $title_query = mysqli_query($conn, "select * from content where title='title'");
                        $title = mysqli_fetch_assoc($title_query);
                    ?>
                   <a class="brand" href="#"><?php echo $title['content']; ?></a>
							<div class="nav-collapse collapse">
								<ul class="nav pull-right">
												<?php $query= mysqli_query($conn, "select * from teacher where teacher_id = '$session_id'")or die(mysqli_error());
														$row = mysqli_fetch_array($query);
												?>
												<li class="dropdown">
													<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i></a>
															<ul class="dropdown-menu">
																<li>
																	<a href="change_password_teacher.php"><i class="icon-circle"></i> Change Password</a>
																	<a tabindex="-1" href="#myModal" data-toggle="modal"><i class="icon-picture"></i> Change Avatar</a>
																	<a tabindex="-1" href="profile_teacher.php"><i class="icon-user"></i> Profile</a>
																</li>
																<li class="divider"></li>
																<li><a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a></li>
															</ul>
												</li>
								</ul>
							</div>
                   <!--/.nav-collapse -->
               </div>
           </div>
</div>
<?php include('avatar_modal.php'); ?>		