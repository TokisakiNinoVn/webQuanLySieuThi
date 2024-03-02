<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Untitled Document</title>
<link rel="stylesheet" media="screen" href="css/bootraps/bootstrap.css" />
<link rel="stylesheet" media="screen" href="css/main.css" />
<link rel="stylesheet" media="screen" href="css/style.css" />
</head>

<body>
<?php

include("layout/header.php");
include("layout/menu.php");
?>
<div class="right-area w775px left-fl pd10">

      
<form method="post">
<div id="dk">
<table>
<tr>
<td  colspan="2" align="center"><b><font color="red" size="4">Đăng ký thành viên</font></b></td>
</tr>
<tr>
<td height="27">Ho tên:</td>
<td><input type="text" name="ten"></td>
</tr>

<tr>
<td height="27">Tên đăng nhâp:</td>
<td><input type="text" name="user"></td>
</tr>
<tr>
<td>Mật khẩu:</td>
<td><input type="password" name="pass"></td>
</tr>
<tr colspan="2">
<td></td>
<td  rowspan="2" colspan="2" class="sm"><input type="submit" name="submit" value="Đăng Ký"> <input type="reset" name="rs">
</tr>
</table>
</div>
</form>
<?php
require "xuly.php";
if(isset($_POST["submit"])){
	$t=$_POST["ten"];
	
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	
	if($t){
		$create=new nguoidung;
		$create->setTen($t);

		$create->setUser($user);
		$create->setPass($pass);
		

								$create->createtv();
											
				echo "<script>alert('Bạn đã đăng ký thành công!')</script>";
	
	}}


	?>
         
 
  
   
  </div>                   
       
                       <!--END=GridProduct-->
</div>

	


        

























</div>


</body>
</html>