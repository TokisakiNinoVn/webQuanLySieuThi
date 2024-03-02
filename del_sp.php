
<?php
$id_sp = $_GET["id_sp"];


		$connect_db = mysqli_connect('localhost:3307', 'root', '','sieuthi');
		
		$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
	
	$sql = "DELETE FROM sanpham WHERE id_sp = $id_sp";
	if($query = mysqli_query($connect_db,$sql)){
	header("location:admin.php");
	}
?>