<?php
session_start();
include("conn.php");
 $id=$_GET['id'];

if(isset($_POST['update']))
{
	$mess_name=$_POST['mess_name'];
	$category=$_POST['category'];
	$tiffin_price=$_POST['tiffin_price'];
	$cust_name=$_POST['cust_name'];
	$cust_mobile=$_POST['cust_mobile'];
	$cust_address=$_POST['cust_address'];
	$order_by = $_SESSION["login_id"];

	$querry="UPDATE order_info1 SET mess_name='$mess_name',category= '$category',tiffin_price= '$tiffin_price',cust_name= '$cust_name' ,cust_address= '$cust_address' ,cust_address= '$cust_address',order_by= '$order_by' where id='$id'";

		$result=mysqli_query($conn,$querry);
	

	 	mysqli_close($conn);
	 	
	 	header("Location: ../view_orders.php");
	 
 }

?>