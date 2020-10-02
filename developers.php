<?php include('header_dashboard.php'); ?>
<?php include('dbcon.php'); ?>
    <body id="class_div">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
								</div>
                            <div class="block-content collapse in">
							<h3>Developers</h3>
							<hr>
                                <div class="span3">
										<center>
										<img id="developers" src="admin/images/Avinash.jpg" class="img-circle">
										<hr>
										<table>
											<?php
												$avinash_query = mysqli_query($conn, "select * from developers where position = 'Programmer'");
												$avinash = mysqli_fetch_array($avinash_query);
											?>
											<tr>
											<td width="100"><b>Full Name</b></td>
											<td><?php echo $avinash['name']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Working Name</b></td>
											<td><?php echo $avinash['wname']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Mobile</b></td>
											<td><?php echo $avinash['phone']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Email</b></td>
											<td><?php echo $avinash['email']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Position</b></td>
											<td><?php echo $avinash['position']; ?></td>
											</tr>
										</table>
										</center>
								</div>
                                <div class="span3">
															<center>
								<img id="developers" src="admin/images/Avinash1.jpg" class="img-circle">
								<hr>

										<table>
											<?php
												$avinash_query = mysqli_query($conn, "select * from developers where position = 'c.e.o'");
												$avinash = mysqli_fetch_array($avinash_query);
											?>
											<tr>
											<td width="100"><b>Full Name</b></td>
											<td><?php echo $avinash['name']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Working Name</b></td>
											<td><?php echo $avinash['wname']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Mobile</b></td>
											<td><?php echo $avinash['phone']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Email</b></td>
											<td><?php echo $avinash['email']; ?></td>
											</tr>
											<tr>
											<td width="100"><b>Position</b></td>
											<td><?php echo $avinash['position']; ?></td>
											</tr>
										</table>
								</center>
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