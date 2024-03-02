
<?php
    require "database.php";
    $dm=new Database;
    $dm->connect();
    $sql="SELECT * FROM loai_sp INNER JOIN danhmuc_sp ON loai_sp.id_danhmuc=danhmuc_sp.id_danhmuc";
    $dm->query($sql);
    $list=$dm->fecth();
?>

<div class="loai_sanpham">
    <div class="main_loai_sanpham">
        <ul class="">
            <li>
                <?php foreach($list as $rows ) { ?>
                    <a class="" href="loaisp.php?id_loai=<?php echo $rows["id_loai"];?>" >
                        <span class="branch-mobile">#<?php echo $rows["ten_loaisp"];?></span>
                    </a>
                <?php } ?>
            </li>
        </ul>
    </div>
</div>
              <!-- <div class="block menu-list supportlive"><h4 class="pd5x10 ">Hỗ trợ trực tuyến</h4>
            	<ul class="nav nav-list w190px ">
                	<li><a href="ymsgr:SendIM?myphamhoakim1">
                    Kinh doanh 1:
                 
                    </a></li>
                    <li><a href="ymsgr:SendIM?myphamhoakim1">
                    Kinh doanh 2:
                    </a></li>
                    <li><a href="ymsgr:SendIM?myphamhoakim1">
                    Kinh doanh 3:
                    </a></li>
                    <li><a href="ymsgr:SendIM?myphamhoakim1">
                    Kinh doanh 4:
                    </a></li>
                </ul>
            </div> -->
            
            
            <!-- <div class="block bannerw220">
            	<ul class="clean">
                	<li><a href="#">
                    	<img src="hinhanh/vn.jpg" />
                    	</a>
                    </li>
                    <li><a href="#">
                    	<img src="hinhanh/cl.jpg" />
                    	</a>
                    </li>
                    <li><a href="#">
                    	<img src="hinhanh/rn.jpg" />
                    	</a>
                    </li>
                    <li><a href="#">
                    	<img src="hinhanh/toy.jpg" />
                    	</a>
                    </li>
                </ul>
            </div>
        </div> -->
