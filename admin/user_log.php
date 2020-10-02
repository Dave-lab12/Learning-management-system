<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('user_log_sidebar.php'); ?>

                <div class="span9" id="content" style="margin-left: 25px;">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block" style="box-shadow: none;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Users Log List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								
										<thead>
										  <tr>
												<th>Date Login</th>
												<th>Date logout</th>
												<th>Username</th>
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn, "select * from user_log order by user_log_id ")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['user_log_id'];
													?>
									
												<tr>
											
												<td><?php echo $row['login_date']; ?></td>
												<td><?php echo $row['logout_date']; ?></td>
												<td><?php echo $row['username']; ?></td>
												</tr>
												<?php } ?>
										</tbody>
									</table>
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