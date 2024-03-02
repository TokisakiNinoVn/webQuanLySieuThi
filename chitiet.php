
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Chi tiết sản phẩm</title>

	<!-- Nino add -->
	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">

	<!-- Nino add -->
	<meta name="description" content="Edit by Tokisaki Nino" href="https://nino.is-a.dev/" githup="https://github.com/TokisakiNinoVn" />
	<link rel="stylesheet" href="./NinoAdd/css/style.css">
	<link rel="stylesheet" href="./NinoAdd/css/index.css">
	<link rel="stylesheet" href="./NinoAdd/scss/index.css">
	<link rel="stylesheet" href="./NinoAdd/css/header.css" />
	<link rel="stylesheet" href="./NinoAdd/css/menu.css">
	<link rel="stylesheet" href="./NinoAdd/scss/footer.css">
</head>

<body>
<?php
	include("layout/header.php");
	include("layout/menu.php");
?>

<div class="about_item">
	<div id="hd">
		<div >
			<div method="post" class="abouts_sp" >
				<?php
					$id_sp = $_GET["id_sp"];
					$connect_db = mysqli_connect('localhost', 'nino', 'nino','sieuthi');
					$set_lang = mysqli_query($connect_db,"SET NAMES 'utf8'");
					$sql = "SELECT * FROM sanpham WHERE id_sp=$id_sp" ;
					$query = mysqli_query($connect_db,$sql);
					$num_row = mysqli_num_rows($query);
				?>
				<?php if($num_row>0) {
					if($row=mysqli_fetch_array($query)){ ?>
					<img class="img_chitiet" src="hinhanh/<?php echo $row["hinh_anh"];?>" />
					<div class="content_sanpham">
						<h1><?php echo $row["ten_sp"];?></h1>
						<span id="ghd"><span><?php echo $row["don_gia"];?> </span>VND</span>
						
						<span class="quiy_wiue" >Số lượng còn lại: <?php echo $row["so_luong"];?></span>
						<input type="number" class="so_luong" value="1" min="1" max="<?php echo $row["so_luong"];?>" >
						<span class="akjhw_iqu" >Giá trị ước tính: <span class="tong_gia_sanpham">000</span></span>

						<div class="akjhw">
							<button class="add_to_card">
								<ion-icon name="cart-outline"></ion-icon>
								Thêm vào giỏ hàng
							</button>
							<button class="buy_now">Mua ngay</button>
						</div>
						<div class="back_to_home">
							<a class="link_to_home" href="index.php"> << Bấm vào đây để quay lại trang chủ</a>
						</div>
					</div>

				<?php } }?>
			</div>
		</div>
	</div>
</div>

<?php
if(isset($_POST["submit2"])){
	$sl=$_POST["SL"];
	$ten=$_POST["ten"];
	$dc=$_POST["dc"];
	$sdt=$_POST["sdt"];
	$hd=new Database;
	$hd->connect();
	$sql="INSERT INTO dondathang(so_luong,ho_ten,dia_chi,sđt,id_sp) VALUES ('$sl','$ten','$dc','$sdt','$id_sp')";
	$hd->query($sql);
		echo "<script>alert('Bạn Đã đặt hàng thành công!')</script>";
	}
?>

    <!-- Add by Nino -->
    <?php include("./NinoAdd/php/login.php");?>
    <?php include("layout/footer.php");?>
    <script src="./NinoAdd/script/main.js"></script>
</body>
</html>