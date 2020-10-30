<div class="span3" id="sidebar"style="background:linear-gradient(rgb(80,208,249),rgb(0,73,96));height :94vh;margin-top:-20px;margin-left:-20px">
	<img id="avatar" style="border-radius: 50%;" src="admin/<?php echo $row['location']; ?>">
	<?php include('teacher_count.php'); ?>
	<ul style="list-style: none;margin:30px;font-size:19px;">
		<li style="padding:10px"class=""><a href="dasboard_teacher.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-group"></i>&nbsp;My Class</a></li>
		<li style="padding:10px"class="active"><a href="notification_teacher.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-info-sign"></i>&nbsp;Notification
			<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
		</a></li>
		<li style="padding:10px"class=""><a href="teacher_message.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-envelope-alt"></i>&nbsp;Message</a></li> 
		<li style="padding:10px"class=""><a href="add_downloadable.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-plus-sign"></i>&nbsp;Add Downloadables</a></li> 
		<li style="padding:10px"class=""><a href="add_announcement.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-plus-sign"></i>&nbsp;Add Announcement</a></li> 
		<li style="padding:10px"class=""><a href="add_assignment.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-plus-sign"></i>&nbsp;Add Assignment</a></li>

</div>

