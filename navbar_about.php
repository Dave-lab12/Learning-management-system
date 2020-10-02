<div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<?php
                        $title_query = mysqli_query($conn, "select * from content where title='title'");
                        $title = mysqli_fetch_assoc($title_query);
                    ?>
                   <a class="brand" href="#"><?php echo $title['content']; ?></a>
							<div class="nav-collapse collapse">
								<ul class="nav pull-right">
	

								</ul>
							</div>
                   <!--/.nav-collapse -->
               </div>
           </div>
</div>
	