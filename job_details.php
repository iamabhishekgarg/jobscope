<?php session_start();

		$link = mysqli_connect("localhost","root","","jobscope") or die("Cannot Connect");
		
	$q = "select * from jobs where j_id =".$_GET['id'];
	
	$res = mysqli_query($link,$q) or die("Wrong Query");
	
	$row = mysqli_fetch_assoc($res);
	
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
					
					<h2 class="title"><center><?php echo $row['j_title']; ?></center></a></h2>
					<p class="meta"></p>
					<div class="entry">
						<table width="100%" border="0">
							
						<?php
						
						echo '<tr><td width="30%"><b>Category:</b><br><td>'.$row['j_category'].'</td></tr>
								<tr><td><b>Salary:</b></td><td>'.$row['j_salary'].'</td></tr>
								<tr><td><b>Hours:</b></td><td>'.$row['j_hours'].'</td></tr>
								<tr><td><b>Experience:</b></td><td>'.$row['j_experience'].'</td></tr>
								<tr><td><b>City:</b></td><td>'.$row['j_city'].'</td></tr>
								<tr><td><b>Description:</b></td><td>'.$row['j_discription'].'</tr>
								';
						
						?>
						<br>
						<br>
					
		<?php
	
				if(isset($_SESSION['status']) && $_SESSION['cat']=="employee")
				{
					echo'<tr><td colspan="2"><center><a href="process_apply.php?jid='.$row['j_id'].'"> Apply </center></td></tr></a>';
				}
	
		?>
								
							
					
						</table>
					
					
						
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
