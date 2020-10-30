<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid" >
				<?php include('student_sidebar.php'); ?>
				<div class="span3" id="adduser"style="margin-left: 25px;">
				<?php include('add_students.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block" style="box-shadow: none;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('student_table_unreg.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>