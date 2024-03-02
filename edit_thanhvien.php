
<?php
$id_thanhvien = $_GET["id_thanhvien"];
require "database.php";
require "xuly.php";
    $thanhvien=new Database;
    $thanhvien->connect();
	$sql="SELECT * FROM thanhvien WHERE id_tv=$id_thanhvien ";
	$thanhvien->query($sql);
	$list=$thanhvien->fecth();
	?>

<?php
$id_thanhvien = $_GET["id_thanhvien"];
if(isset($_POST["submit"])){
		$ten=$_POST["ten"];

	$lv=$_POST["lv"];
	$user=$_POST["user"];
	$pass=$_POST["pass"];
			$connect_db = mysqli_connect('localhost:3307', 'root', '','sieuthi');
		
		$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
$sql="UPDATE thanhvien SET  ho_ten='$ten',tai_khoan='$user',mat_khau='$pass'  WHERE id_tv=$id_thanhvien";
$query = mysqli_query($connect_db,$sql); 

	header("location:list_thanhvien.php");
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
                <a class="navbar-brand" href="index.html">Admin Area </a>
            </div>
            <!-- /.navbar-header -->

           
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
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
                          	<?php

foreach ($list as $rows){
	?>
                        <h1 class="page-header">Sửa thành viên
                            <small><?php echo $rows["ho_ten"]; ?></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="ten" placeholder="Nhập họ tên"  value="<?php echo $rows["ho_ten"]; ?>"/>
                            </div>
                                <div class="form-group">
                                <label>Tài khoản</label>
                                <input type="text" class="form-control" name="user" placeholder="Nhập tài khoản" value="<?php echo $rows["tai_khoan"]; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="text" class="form-control" name="pass" placeholder="Nhập mật khẩu" value="<?php echo $rows["mat_khau"]; ?>"/>
                            </div>
                        
                        
                            
                            <div class="form-group">
               
	                            </div>
                          
                            <button type="submit" class="btn btn-default" name="submit">Sửa thành viên</button>
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

</body>

</html>
