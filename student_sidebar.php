
<div class="span3" id="sidebar" style="background:linear-gradient(rgb(80,208,249),rgb(0,73,96));height :94vh;margin-top:-19px;margin-left:-20px">
					<img id="avatar"  style="border-radius: 50%;" src="admin/<?php echo $row['location']; ?>">
					<?php include('count.php'); ?>
		<ul class="sidebar-items" style="list-style: none;margin:30px;font-size:19px;">
			<li class="" style="padding:20px"><a  style="text-decoration: none;color:white;font-family:Sans-serif;" href="dashboard_student.php"><i class="icon-group"></i>&nbsp;My Class</a></li>
			<li class=""style="padding:20px"  >
				<a style="text-decoration: none;color:white;font-family:Sans-serif;" href="student_notification.php"><i class="icon-info-sign"></i>&nbsp;Notification
				<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
				</a>
			</li>
			<?php
			$message_query = mysqli_query($conn, "select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysqli_error());
			$count_message = mysqli_num_rows($message_query);
			?>
			<li class=""style="padding:20px">
			<a  style="text-decoration: none;color:white;font-family:Sans-serif;" href="student_message.php"><i class="icon-envelope-alt"></i>&nbsp;Message
				<?php if($count_message == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
			</a>
			</li>
			 <!-- <li class=""><a href="backpack.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Backpack</a></li> -->
		</ul>
					<!-- <?php // include('search_other_class.php');  ?>	 -->
</div>

