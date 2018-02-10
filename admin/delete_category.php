<?php 

include ("includes/header.php");

if(isset($_GET['id'])){
	$id=$_GET['id'];
	//echo $id;
	$query="DELETE FROM categories WHERE id='$id'";
	

	$delete_cats=$db->delete($query);
}