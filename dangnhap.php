<?php
    ob_start();
?>

<?php
    if(isset($_POST["submit"])){
        if($_POST["user"] && $_POST["pass"]){
            $user = $_POST["user"];
            $pass = $_POST["pass"];
        
            $connect_db = mysqli_connect('localhost', 'nino', 'nino', 'sieuthi');
            
            //$set_lang = mysqli_query("SET NAMES utf8");
            
            $sql = "SELECT * FROM thanhvien WHERE tai_khoan = '$user' AND mat_khau = '$pass' AND id_quyen=0";
            $query = mysqli_query($connect_db,$sql);
            $num_row = mysqli_num_rows($query);
            if($num_row > 0){
                $_SESSION["user"] = $user;
                $_SESSION["pass"] = $pass;
                header("location:admin.php");
            }
            else {
                echo "<script>alert('Bạn không phải là admin!')</script>";
            }
        }
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

    <title>Đăng nhập</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input  type="text"class="form-control" placeholder="E-mail" name="user"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
