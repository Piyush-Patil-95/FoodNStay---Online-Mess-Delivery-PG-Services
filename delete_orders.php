<?php
	include("Bcode/conn.php");

	$id=$_GET['id'];


	$querry="Delete from order_info1 where id='$id'";
	$result=mysqli_query($conn,$querry);

header("Location: ./view_orders.php");
?>