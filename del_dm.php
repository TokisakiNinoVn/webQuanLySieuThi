<?php
$id_dm = $_GET["id_dm"];
	$connect_db = mysqli_connect('localhost:3307', 'root', '','sieuthi');
		
		$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
		
	$sql = "DELETE FROM danhmuc_sp WHERE id_danhmuc = $id_dm";
	if($query = mysqli_query($connect_db,$sql)){
	header("location:list_danhmuc.php");
	}
?>