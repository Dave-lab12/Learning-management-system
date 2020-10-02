
<center>
		<footer style="color: white;">
		<?php 
			$title_query = mysqli_query($conn, "select * from content where title='footer'");
			$title = mysqli_fetch_assoc($title_query);

			$dv = mysqli_query($conn, "select * from dvs");
			$dvs = mysqli_fetch_assoc($dv);
		?>
		<p><?php echo $title['content']; ?></p>
			
		</footer>
</center>

