<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="admin/assets/student-dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
    .Logout{
      margin-top:-40px;
    margin-right: 90px;
  }
     #avatar{border-radius:50%;};
     .nav-bar{
      margin-left: 200px
     }
     a{
       text-decoration: none;
     }
     .far ,.fas{
       margin-left: -13px;
     }
     </style>
  </head>
  <body>
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
         <?php
                    $title_query = mysqli_query($conn, "select * from content where title='title'");
                    $title = mysqli_fetch_assoc($title_query);
                ?>
                <h3 class="brand" href="#"><?php echo $title['content']; ?></h3>
       
      </div>
      <div class="right_area">
       <div class="Logout">
            <ul class="nav pull-right">
            
              <?php $query= mysqli_query($conn, "select * from student where student_id = '$session_id'")or die(mysqli_error());
                  $row = mysqli_fetch_array($query);
              ?>
              <li class="dropdown">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i></a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="change_password_student.php"><i class="icon-circle"></i> Change Password</a></li>
                    <li><a tabindex="-1" href="#myModal_student" data-toggle="modal"><i class="icon-picture"></i> Change Avatar</a></li>
                    <li><a tabindex="-1" href="profile_student.php"><i class="icon-user"></i> Profile</a></li>
                    <li class="divider"></li>
                    <li>
                      <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                    </li>
                  </ul>
              </li>
            </ul>
          </div>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="admin/assets/1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>">
		<?php include('count.php'); ?>
    <li class="dropdown">
        <h4><?php echo $row['firstname']." ".$row['lastname'];  ?></h4>
      </div>
      <ul class="items-container">
			<li class=""><a href="dashboard_student.php"><i class="fas fa-chalkboard"></i>&nbsp;My Class</a></li>
			<li class="active">
				<a href="student_notification.php"><i class="far fa-bell"></i>&nbsp;Notification
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
			<li class="">
			<a href="student_message.php"><i class="far fa-envelope"></i>&nbsp;Message
				<?php if($count_message == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
			</a>
			</li>
		</ul>
    </div>
    <!--sidebar end-->

    

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
    <?php include('script.php'); ?>

  </body>
</html>




