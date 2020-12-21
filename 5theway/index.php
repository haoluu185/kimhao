<?php
session_start();
include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

	<title>5THEWAY®</title>
	<?php include'csschung.php' ?>
</head>
<body id="myPage">
	<div class="container-fluid" style="background: #fabe12" >
<div>
	<?php
	if(isset($_SESSION['user']))
{
	?>
	<div class="row" style="background: #ffffff">
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4 text-right">
			<span style="font-weight: bold;"> Xin chào ❗  <?php print_r($_SESSION['user']) ?> 💋</span>
			<form method="POST" action="dangxuat.php">
			<input   type="submit" name="btnDangXuat" value="Đăng xuất" style=" height: 20px;margin-top: 0;background: #fff;border: none;">
		</form> 
		</div>

	</div>


<?php

}

?>


</div>



		 <div class="row " style="background: #fff" >
          <div class="col-md-4 "> </div>
          <div class="col-md-4 text-center img-responsive " ><a href="index.php"><img style="width: 150px" src="img/logo1.jpg"></a></div>
        
          <div class="col-md-4"></div>
        </div>

          <div class="row text-right" style="margin: -80px 30px 0 0;">
         <a href="cart.php"><svg width="28px" height="28px" style="margin-right: 4px;" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
</svg></a>   
            <a href="dangnhap.php"><svg width="28px" height="28px" style="margin-right: 4px;" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg></a>





	



		<form action="timkiem.php" method="post">
			<input type="text"  name="txtSearch" id="txtSearch" placeholder="Tìm kiếm" autocomplete="off" style="height: 33px;border-radius: 10px;padding-left: 20px;border: 1px solid #000 " >

			
			<button type="submit" name="btnSubmit" style="margin: 3px 0 3px 0;border: none;padding: 2px;" ><span class="glyphicon glyphicon-search "></span></button>


			
			
		</form>



<?php
 

$sql= 'select * from sanpham';
$tam=$conn->query ($sql);
$data = $tam->fetchAll();

	$kq=array();
	$arr = array(); 
	





if(isset($_POST['btnSubmit']))
{
	if (strlen($_POST['txtSearch'])!=0)
	{

	foreach($data as $product)
		{

			if(strpos($product['tensp'],$_POST['txtSearch'])!==false)
				$kq[]=$product;

			

		}
	if(count($kq)!==0)
		{
			$dem=count($kq);
			echo "Có $dem sản phẩm tìm thấy:";
			foreach($kq as $product)
			{
				?>
				<a href="sanpham/sanpham.php?id=<?php echo $product['masp'] ?>"><?php echo $product['tensp'] ?></a>
				

			
				<?php
			}
		
		}
		
	else
		echo "Không tìm thấy!";
	}
	else 
	echo "Vui lòng nhập lại ";




}


?>
</div>
<nav>
	<ul >
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 ÁO 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;" >
			<li>
			<?php include './menu/ao-thun.php' ?> 
			<ul><?php include './menu/LoaiChiTiet-aothun.php' ?></ul></li>
			<li>
				<?php include './menu/ao-khoac.php' ?>
			<ul><?php include './menu/LoaiChiTiet-aokhoac.php' ?></ul></li>

			<li><?php include './menu/ao-somi.php' ?></li>
			<li><?php include './menu/ao-taydai.php' ?></li>
		</ul>
		</li>
		</div>
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 QUẦN 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include './menu/quan-short.php' ?></li>
			
			<li><?php include './menu/quan-jogger.php' ?></li>
			<li><?php include './menu/quan-jean.php' ?></li>
			<li><?php include './menu/quan-kaki.php' ?></li>
		</ul>
		</li>
		</div>
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 ĐỒ LÓT 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include './menu/dolot-nam.php' ?></li>
			<li><?php include './menu/dolot-nu.php' ?></li>
		</ul>
		</li>
		</div>

		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 BALO 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include './menu/balo-rocket.php' ?></li>
			<li><?php include './menu/balo-mini.php' ?></li>
		</ul>
		</li>
		</div>

		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 VÍ 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include './menu/vi-dai.php' ?></li>		
			<li><?php include './menu/vi-ngan.php' ?></li>		
		</ul>
		</li>
		</div>
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 PHỤ KIỆN 👑<i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include './menu/pk-mask.php' ?></li>		
			<li><?php include './menu/pk-vo.php' ?></li>	
			<li><?php include './menu/pk-daydeo.php' ?></li>
			<li><?php include './menu/pk-non.php' ?></li>				
		</ul>
		</li>
		</div>
	</ul>
</nav>
<div class="row"><img src="img/logo2.jpg" class="img-responsive" ></div>
<div id="hang-moi-ve">
	<div class="col-1 slideanim" style="text-align: center;"><a href=""><h2 style="">💎 NEW ITEM 💎</h2> </a> </div>
	
</div>
<div ><?php include 'hangmoive.php' ?>></div>



<div style="background: #FFFF" id="hang-ban-chay">
	<div class="col-1 slideanim" style="text-align: center;"><a href=""><h2>🔥 BEST SELLER 🔥</h2> </a> </div>
</div>
<div ><?php include 'sanphambanchay.php' ?>></div>



<div class="row">
	<div class="col-md-3 col-sm-4">
		<h4 style="padding-left: 10px;"> <strong> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
		</svg> Đăng ký nhận ưu đãi</strong></h4>
	</div>
	<div class="col-md-5 col-sm-4 text-center">
		<form>
			<input id="email" type="text" class="form-control" name="email" placeholder="Nhập email của bạn"  >
			<button style="margin: 15px 0 15px 0;background:white ;border: none;padding: 10px;border-radius: 10px;"> Đăng ký</button>
		</form>		
	</div>
	<div class="col-md-4 ol-sm-4" >
		<h4> 📞 Hotline / Mua hàng: 0934.840.505 </h4>
	</div>
</div>
    <!-- THÔNG TIN WEB -->
  <div class="row">
        <nav class="navbar-default">
          <div class="container-fluid">
            <div class="navbar-header " >
              <button class="navbar-toggle " data-toggle="collapse"data-target="#phancuoi" aria-expanded="false" aria-controls="phancuoi">
              THÔNG TIN KHÁC
              </button>
            
            </div>
            <div class="navbar-collapse" id="phancuoi">
              <div class="row" style="border-top : 1px solid #000;border-bottom: 1px solid #000; background: white">
                  <div class="col-md-4" style="padding-left: 25px;">
      <h4><strong>GIỚI THIỆU</strong></h4>
      HỘ KINH DOANH 5THEWAY - LOCAL BRAND VIỆT NAM
        <div style="border-top:1px solid #000;margin:17px 0 17px 0"></div>
          Giấy chứng nhận hộ kinh doanh số 41J8028141, đăng ký ngày 17/05/2019, tại Q.10 TP.HCM.<br>
    </div>
    <div class="col-md-4"  style="padding-left: 25px;">
      <h4><strong>MUA HÀNG</strong></h4>
        <li><a href="" style="color: #000">Hướng dẫn mua hàng</a></li>
        <li><a href="" style="color: #000">Hình thức thanh toán</a></li>
        <li><a href="" style="color: #000">Chính sách đổi trả</a></li>
        <li><a href="" style="color: #000">Chính sách vận chuyển</a></li>
        <li><a href="" style="color: #000">Thông tin khuyến mãi</a></li>      
    </div>
    <div class="col-md-4" style="padding-left: 25px;">
      <h4><strong>ĐỊA CHỈ</strong></h4>
      <strong>5THEWAY</strong> mở cửa cả tuần (9:00 -22:00) <br>
         <a href="" style="font-weight: bold">🏠 STORE 1: 68/8 Trần Quang Khải, P. Tân Định, Q.1</a><br>
         <a href="" style="font-weight: bold">🏠 STORE 2: 34 Lê Thị Riêng, P. Bến Thành, Q.1</a><br>
         <a href="" style="font-weight: bold">🏠 STORE 3: 26 Lý Tự Trọng, P.Bến Nghé Q.1</a><br>
         <a href="" style="font-weight: bold">🏠 STORE 4: 175 Trần Văn Đang, P.11, Q.3</a><br>
          📞 <strong>0934 840 505 </strong> <br>
          <div style="padding-top: 10px;">
            <a href="https://www.facebook.com/5theway"><i class="fa fa-facebook" style="font-size: 30px;padding-right: 15px;"></i></a>
            <a href="https://www.instagram.com/5thewayvietnam/"><i class="fa fa-instagram"style="font-size: 30px;"></i></a></div>
    </div>
            </div>
            </div>
          </div>
        </nav>
      </div>
<!-- NÚT TO TOP -->
    <footer class="container-fluid text-center"style="height: 100px;line-height: 100px;">
      <a href="#myPage" title ="To Top">
        <span class="glyphicon glyphicon-chevron-up" style="font-size: 30px;color: #000"></span> </a>
      </footer>
      <h5 style="text-align: center;">Copyright © 2020</h5>
</div>
</body>
</html>