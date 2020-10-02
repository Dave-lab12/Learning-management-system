<div class="span3" id="sidebar"style="background:linear-gradient(rgb(80,208,249),rgb(0,73,96));height :94vh;margin-top:-20px;margin-left:-20px">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" style="border-radius: 50%;">
			<ul style="list-style: none;margin:30px;font-size:19px;">
				<li style="padding:10px"class=""><a href="dasboard_teacher.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li style="padding:10px"class=""><a href="my_students.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-group"></i>&nbsp;My Students</a></li>
				<li style="padding:10px"class=""><a href="subject_overview.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-file"></i>&nbsp;Subject Overview</a></li>
				<li style="padding:10px"class=""><a href="downloadable.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;font-size:16px"><i class="icon-download"></i>&nbsp;Downloadable Materials</a></li>
				<li style="padding:10px"class=""><a href="assignment.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-book"></i>&nbsp;Assignments</a></li>
				<li style="padding:10px"class="active"><a href="announcements.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-info-sign"></i>&nbsp;Announcements</a></li>
				<li style="padding:10px"class=""><a href="class_calendar.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-calendar"></i>&nbsp;Class Calendar</a></li>
			    <li style="padding:10px"class=""><a href="class_quiz.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-list"></i>&nbsp;Quiz</a></li>
			</ul>
</div>

