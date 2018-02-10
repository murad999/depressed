<?php


include ("includes/header.php");

if(isset($_GET['id'])){
	$id=$_GET['id'];
	//echo $id;
	$query="DELETE FROM posts WHERE id='$id'";

	$delete_post=$db->delete($query);
}