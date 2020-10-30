<div class="span3" id="sidebar" style="background:linear-gradient(rgb(80,208,249),rgb(0,73,96));height :94vh;margin-top:-20px;margin-left:-20px">
		<img id="avatar" style="border-radius: 50%;" src="admin/<?php echo $row['location']; ?>">
		<?php include('count.php'); ?>
		<ul style="list-style: none;margin:30px;font-size:19px;">
			<li style="padding:10px"class=""><a href="dashboard_student.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-group"></i>&nbsp;My Class</a></li>
			<li style="padding:10px"class="">
				<a href="student_notification.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-info-sign"></i>&nbsp;Notification
				<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
				</a>
			</li>
			 <li style="padding:10px"class=""><a href="student_message.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-envelope-alt"></i>&nbsp;Message</a></li>
			 
		</ul>
		
</div>

