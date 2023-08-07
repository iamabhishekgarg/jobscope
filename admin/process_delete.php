<?php session_start();
require ('./includes/db.inc.php');
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
// $link=mysqli_connect("localhost","jobscope","riddhi")or die("can not connect");
// mysqli_select_db ("jobscope",$link) or die("can not select database");
$q="delete from contact where cont_fnm='".$_GET['cat']."'";
mysqli_query($q,$link) or die ("wrong query");
mysqli_close($link);
header("location:contact.php");
?>