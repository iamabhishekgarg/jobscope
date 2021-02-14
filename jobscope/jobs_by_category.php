<?php session_start();

$servername = "localhost";
$username = "id13121433_jobscopeindia";
$password = "Abhishek@123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$link=mysqli_connect("localhost","id13121433_jobscopeindia","Abhishek@123","id13121433_jobscopeworld");

		
?>
<!DOCTYPE html>
<html>
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2 class="title"><?php echo $_GET['cat']; ?></h2>
					<p class="meta"></p>
					<div class="entry">
					<ul>		
					<?php
						while($row = mysqli_fetch_assoc($res))
						{
						
							echo '
										<li>
										<a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'</a>
								';
						}
						
					?>
					</ul>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
