<?php 	
	require dirname(__DIR__)."\Bcode\conn.php";
	error_reporting(0);
	if(isset($_FILES['tiffin_img']))
	{
				$errors = array();

				$file_name= $_FILES['tiffin_img']['name'];
				$file_type= $_FILES['tiffin_img']['type'];
				$file_size= $_FILES['tiffin_img']['size']/1024;
				$file_tmp=  $_FILES['tiffin_img']['tmp_name'];

				$file_ext=end(explode('.', $file_name));

				$extension=array("jpeg","jpg","png","JPG");

				// echo "<pre>";
				// echo $file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp."<br>" .$file_ext; 
				// exit();

				//validation to the image

				if(in_array($file_ext, $extension) == false)
				{
					$errors[] ="this file extension not allow....";
				}

				if($file_size > 2097152){
					$errors[]="file size must be 2mb or lower";
				}

				if(empty($errors)==true){
					move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/product/".$file_name);
				}else{
					print_r($errors);
					die();
				}
	}

	if(isset($_POST['submit']))
	{
		$mess_name=$_POST['mess_name'];
		$category=$_POST['category'];
		$tiffin_price=$_POST['tiffin_price'];
		$tiffin_img=$file_name;
	
	 	$querry ="INSERT INTO product_info1 (mess_name,category,tiffin_price,tiffin_img)values('{$mess_name}','{$category}','{$tiffin_price}','{$tiffin_img}')";

	$result=mysqli_query($conn,$querry);

	mysqli_close($conn);
	}

header("Location: ../view_product.php");
?>