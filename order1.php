<?php 
session_start();
include("Bcode/conn.php");;

if(isset($_POST['submit']))
	{
		$mess_name=$_POST['mess_name'];
		$category=$_POST['category'];
		$tiffin_price=$_POST['tiffin_price'];
		$cust_name=$_POST['cust_name'];
		$cust_mobile=$_POST['cust_mobile'];
		$cust_address=$_POST['cust_address'];
		$order_by = $_SESSION["login_id"];
		
		
	
	 	$querry ="INSERT INTO order_info1 (`mess_name`, `category`, `tiffin_price`, `cust_name`, `cust_mobile`, `cust_address`,`order_by`)values('{$mess_name}','{$category}','{$tiffin_price}','{$cust_name}','{$cust_mobile}','{$cust_address}','{$order_by}')";

	$result=mysqli_query($conn,$querry);
	// print_r($querry);exit();

	mysqli_close($conn);
	}

	header("Location: view_orders.php");


 ?>