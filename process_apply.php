<?php session_start();

require ('./includes/db.inc.php');
	if(empty($_GET))
	{
		header("location:index.php");
	
	}
		// $link = mysqli_connect("localhost","root","","jobscope") or die("Cannot Connect");

	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($link,$q) or die("wrong query");
	header("location:index.php");
	
?>