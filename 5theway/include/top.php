<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="../bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>

	<title>5THEWAY</title>
	
		<?php include'../csschung.php' ?>
		

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
          <div class="col-md-4 text-center img-responsive " ><a href="../index.php"><img style="width: 150px" src="../img/logo1.jpg"></a></div>
        
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
			<?php include '../menu/ao-thun.php' ?> 
			<ul><?php include '../menu/LoaiChiTiet-aothun.php' ?></ul></li>
			<li>
				<?php include '../menu/ao-khoac.php' ?>
			<ul><?php include '../menu/LoaiChiTiet-aokhoac.php' ?></ul></li>

			<li><?php include '../menu/ao-somi.php' ?></li>
			<li><?php include '../menu/ao-taydai.php' ?></li>
		</ul>
		</li>
		</div>
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 QUẦN 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include '../menu/quan-short.php' ?></li>
			
			<li><?php include '../menu/quan-jogger.php' ?></li>
			<li><?php include '../menu/quan-jean.php' ?></li>
			<li><?php include '../menu/quan-kaki.php' ?></li>
		</ul>
		</li>
		</div>
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 ĐỒ LÓT 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include '../menu/dolot-nam.php' ?></li>
			<li><?php include '../menu/dolot-nu.php' ?></li>
		</ul>
		</li>
		</div>

		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 BALO 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include '../menu/balo-rocket.php' ?></li>
			<li><?php include '../menu/balo-mini.php' ?></li>
		</ul>
		</li>
		</div>

		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 VÍ 👑<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include '../menu/vi-dai.php' ?></li>		
			<li><?php include '../menu/vi-ngan.php' ?></li>		
		</ul>
		</li>
		</div>
		<div class="col-md-2">
		<li><a href="#" title="Giới thiệu">👑 PHỤ KIỆN 👑<i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
		<!-- menu con sổ xuống cấp 1 -->
		<ul style="border-top: 2px solid #000;">
			<li><?php include '../menu/pk-mask.php' ?></li>		
			<li><?php include '../menu/pk-vo.php' ?></li>	
			<li><?php include '../menu/pk-daydeo.php' ?></li>
			<li><?php include '../menu/pk-non.php' ?></li>				
		</ul>
		</li>
		</div>
	</ul>
</nav>

</div>




</body>
</html>


