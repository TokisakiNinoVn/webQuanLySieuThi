<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Đồ ăn</title>
<!-- <link rel="stylesheet" media="screen" href="css/bootraps/bootstrap.css" />
<link rel="stylesheet" media="screen" href="css/main.css" />
<link rel="stylesheet" media="screen" href="css/style.css" /> -->


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

  <div class="list_items">
  <div class="main_list_item">
    <?php 
      $dt=new Database;
      $dt->connect();
      $sql="SELECT * FROM sanpham INNER JOIN loai_sp ON sanpham.loai_sp=loai_sp.id_loai WHERE id_danhmuc=4 "; 
        $dt->query($sql);
      $list=$dt->fecth();
    ?>

      <?php foreach($list as $row ){ ?>
        <div class="one_item">
            <div class="item">
              <div class="item_content">
                <div class="limited_img">
                  <img class="image_item" src="./hinhanh/<?php echo $row["hinh_anh"] ?>" alt="Ảnh">
                </div>
                <h3><?php echo $row["ten_sp"] ?></h3>
                <p>Giá: <?php echo $row["don_gia"] ?> VND</p>
                <p>Số Lượng: <?php echo $row["so_luong"] ?> </p>
                <p>Loại sản phẩm: <?php echo $row["ten_loaisp"] ?></p>
                <button class="xemchitiet">
                  <a href="chitiet.php?id_sp=<?php echo $row["id_sp"] ?>" class="btn btn-default" role="button">Xem chi tiết</a>
                </button>
              </div>
          </div>        
        </div>
      <?php } ?>
    </div>
  </div>


    <!-- Add by Nino -->
    <?php include("./NinoAdd/php/login.php");?>
    <?php include("layout/footer.php");?>
    <script src="./NinoAdd/script/main.js"></script>
</body>
</html>