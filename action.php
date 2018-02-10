<?php
session_start();
include_once ("libs/config.php");
include_once ("libs/Database.php");
include_once ("libs/functions.php");
$db = new Database();
echo '<pre>';
print_r($_POST);
$serial = 0;
// foreach($_POST as  $key=> $v){

// 	// print_r($v);
// 	// die();
// 	$query = "UPDATE questions SET option_value ='".$v."' WHERE id = $key";
// 	$insert = $db->update($query);
// 	header('location:');
// }

//echo $_POST[1];

if(isset($_POST['submit'])){
	$value1=$_POST['1'];
	$value2=$_POST['2'];
	$value3=$_POST['3'];
	$value4=$_POST['4'];
	$value5=$_POST['5'];
	$value6=$_POST['6'];
	$value7=$_POST['7'];
	$value8=$_POST['8'];
	$value9=$_POST['9'];
	$tval=$value1+$value2+$value3+$value4+$value5+$value6+$value7+$value8+$value9;
 echo $_SESSION['page_1']=$tval;
 
}
if(isset($_POST['submit'])){
	// echo "<br>";
	// print_r($_POST);
	header('location:question2.php');
}





?>
