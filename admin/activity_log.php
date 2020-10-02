<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('activity_log_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid" style="margin-left: 25px;">
                        <!-- block -->
                        <div id="block_bg" class="block" style="box-shadow:none">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Assignment File Uploaded List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>

												<th>Date</th>
												<th>User</th>
												<th>Action</th>
									
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysqli_query($conn, "select * from  activity_log")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
									?>
							

					
                              
										<tr>

                                         <td><?php  echo $row['date']; ?></td>
                                         <td><?php echo $row['username']; ?></td>
                                         <td><?php echo $row['action']; ?></td>
                                  
                               
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