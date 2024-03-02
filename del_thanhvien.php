<?php
$id_thanhvien = $_GET["id_thanhvien"];
	$connect_db = mysqli_connect('localhost:3307', 'root', '','sieuthi');
		
		$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
		
	$sql = "DELETE FROM thanhvien WHERE id_tv= $id_thanhvien";
	if($query = mysqli_query($connect_db,$sql)){
	header("location:list_thanhvien.php");
	}
?>