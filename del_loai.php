<?php
$id_loai = $_GET["id_loai"];

$connect_db = mysqli_connect('localhost:3307', 'root', '','sieuthi');
		
		$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
		
	$sql = "DELETE FROM loai_sp WHERE id_loai = $id_loai";
	if($query = mysqli_query($connect_db,$sql)){
	header("location:list_loaisp.php");
	}
?>