<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body  style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid" style="margin-left: 25px;">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysqli_query($conn, "select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <div class="block" style="box-shadow: none;">
                            
                        	<div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
								
								<div class="alert alert-info"><i class="icon-info-sign"></i> About Me</div>

								<?php $query= mysqli_query($conn, "select * from student where student_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								$class_id = $row['class_id'];
						?>
  										<!--Teacher Profile-->
  									<div class="span6">

  										<?php include 'display_student_profile.php'; ?>
  										
  									</div>

  									<!--Teacher Profile Edit-->
									<div class="span5">

  										<?php include 'edit_student_profile.php'; ?>
  										
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