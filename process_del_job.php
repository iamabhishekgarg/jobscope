<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$link=mysqli_connect("localhost","root","","jobscope")

		$q="delete from jobs where j_id=".$_GET['id'];
		
		mysql_query($link,$q);
		
		header("location:manage.php");	
?>