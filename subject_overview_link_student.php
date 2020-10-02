<div class="span3" id="sidebar"style="background:linear-gradient(rgb(80,208,249),rgb(0,73,96));height :94vh;margin-top:-20px;margin-left:-20px">
	<img id="avatar" style="border-radius: 50%;"src="admin/<?php echo $row['location']; ?>" >
		<ul class="" style="list-style: none;margin:30px;font-size:19px;">
				<li style="padding:10px"class=""><a href="dashboard_student.php"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li style="padding:10px"class=""><a href="my_classmates.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-group"></i>&nbsp;My Classmates</a></li>
				<li style="padding:10px"class=""><a href="progress.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-bar-chart"></i>&nbsp;My Progress</a></li>
				<li style="padding:10px"class="active"><a href="subject_overview_student.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-file"></i>&nbsp;Subject Overview</a></li>
				<li style="padding:10px"class=""><a href="downloadable_student.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;font-size:16px"><i class="icon-download"></i>&nbsp;Downloadable Materials</a></li>
				<li style="padding:10px"class=""><a href="assignment_student.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-book"></i>&nbsp;Assignments</a></li>
				<li style="padding:10px"class=""><a href="announcements_student.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-info-sign"></i>&nbsp;Announcements</a></li>
				<li style="padding:10px"class=""><a href="class_calendar_student.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-calendar"></i>&nbsp;Class Calendar</a></li>
				<li style="padding:10px"class=""><a href="student_quiz_list.php<?php echo '?id='.$get_id; ?>"style="text-decoration: none;color:white;font-family:Sans-serif;"><i class="icon-reorder"></i>&nbsp;Quiz</a></li>
		</ul>
	<?php /* include('search_other_class.php'); */ ?>	
</div>