<?php
$id_sp = $_GET["id_sp"];
require "database.php";
require "xuly.php";
$thanhvien=new Database;
$thanhvien->connect();
	$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp ";
	$thanhvien->query($sql);
	$list=$thanhvien->fecth();
	?>

<?php
$id_sp = $_GET["id_sp"];
if(isset($_POST["submit"])){
	$ten=$_POST["ten"];
	$sl=$_POST["sl"];	
	$gia=$_POST["gia"];
			if(isset($_FILES["image"]["name"])){
		$image_name = $_FILES["image"]["name"];
		$image_path = $_FILES["image"]["tmp_name"];
		$new_image_path = "hinhanh/".$image_name;
		$image_upload = move_uploaded_file($image_path,$new_image_path);
	}
		else{
		$image_name = $_POST["image"];
	}
		$connect_db = mysqli_connect('localhost:3307', 'root', '','sieuthi');
		
		$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
$sql="UPDATE sanpham SET  ten_sp='$ten',so_luong='$sl',don_gia='$gia',hinh_anh='$image_name'  WHERE id_sp=$id_sp";
$query = mysqli_query($connect_db,$sql); 
$id_sp;
	header("location:admin.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Khoa Phạm</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <!-- /.navbar-top-links -->
<?php
           include("menu.php");
     ?>
	        <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa sản phẩm
                           						<?php

foreach ($list as $rows){
	?>
                            <small><?php	echo $rows["ten_sp"]; ?></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="ten" placeholder="Nhập tên sản phẩm"  value="<?php	echo $rows["ten_sp"]; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="text" class="form-control" name="sl" placeholder="Nhập số lượng"  value="<?php	echo $rows["so_luong"]; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Đơn giá</label>
                                <input type="text" class="form-control" name="gia" placeholder="Nhập đơn giá"  value="<?php	echo $rows["don_gia"]; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="image" placeholder="Please Enter Email" value="<?php	echo $rows["hinh_anh"]; ?>"/>
                                <img src="hinhanh/<?php	echo $rows["hinh_anh"]; ?>" width="200px">
                            </div>
                            <button type="submit" class="btn btn-default" name="submit">Sửa sản phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                        <?php
						
}
?>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
1    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
