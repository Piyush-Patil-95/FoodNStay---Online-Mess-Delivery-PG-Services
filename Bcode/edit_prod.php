<?php
require dirname(__DIR__)."conn.php";
 $id=$_GET['id'];

if(empty($_FILES['new_product_img']['name']))
{
	$file_name=$_POST['old-image'];
}else
	{
				$errors = array();

				$file_name=$_FILES['new_product_img']['name'];
				$file_type=$_FILES['new_product_img']['type'];
				$file_size=$_FILES['new_product_img']['size']/1024;
				$file_tmp=$_FILES['new_product_img']['tmp_name'];
				$file_ext=end(explode('.', $file_name));
				$extension=array("jpeg","jpg","png","JPG");
				//echo$name."<br>".$type."<br>".$size."<br>".$temp;
				 if(in_array($file_ext, $extension) == false)
				 {
				$errors[] ="this file extension not allow....";
				}
				if($file_size > 2097152){
					$errors[]="file size must be 2mb or lower";
				}

				if(empty($errors)==true){
					move_uploaded_file($file_tmp,  dirname(__DIR__)."/assets/product/".$file_name);
				}else{
					print_r($errors);
					die();
				}
			}

if(isset($_POST['update']))
{
	$mess_name=$_POST['mess_name'];
	$category=$_POST['category'];
	$tiffin_price=$_POST['tiffin_price'];

	$querry="UPDATE product_info1 SET mess_name='$mess_name',category= '$category',tiffin_price= '$tiffin_price',tiffin_img= '$file_name' where id='$id'";

		$result=mysqli_query($conn,$querry);
		// print_r($querry);exit;

	 	mysqli_close($conn);
	 	
	 	header("Location: ../view_products.php");
	 
 }

?>