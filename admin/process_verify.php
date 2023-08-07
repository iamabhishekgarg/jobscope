<?php
require ('./includes/db.inc.php');
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
			// $link=mysqli_connect("localhost","root","","jobscope")
		
		$q="update jobs
			set j_active=1
			where j_id=".$_GET['id'];
		
		mysql_query($link,$q);
		
		header("location:verify.php");	
?>