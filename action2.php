<?php 
session_start();

echo '<pre>';
print_r($_POST);

if(isset($_SESSION['page_1'])){
 	 $_SESSION['page_1']; 
 	 echo $_SESSION['page_1'];echo "<br>";

if(isset($_POST['submit'])){
	$value10=$_POST['10'];
	$value11=$_POST['11'];
	$value12=$_POST['12'];
	$value13=$_POST['13'];
	$value14=$_POST['14'];
	$value15=$_POST['15'];
	$value16=$_POST['16'];
	$value17=$_POST['17'];
	$value18=$_POST['18'];
	$gtval=$value10+$value11+$value12+$value13+$value14+$value15+$value16+$value17+$value18;
 	$_SESSION['total']=$gtval;
 	$_SESSION['nettotal']=$_SESSION['page_1']+$_SESSION['total'];
 	$_SESSION['nettotal'];
 	header('location:result.php');
} }
// if(isset($_POST['submit'])){
	
// 	//
// 	//echo $_SESSION['total'];
// }