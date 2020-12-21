

<?php 

include 'connect.php' ?>

<?php
$sql= 'select * from sanpham order by ngaynhap desc limit 8';
$tam=$conn->query ($sql);
$data = $tam->fetchAll();

	$arr = array();
foreach($data as $value) 
{
	$arr = array('id'=>$value['masp'],'name'=>$value['tensp'])?>
	

<div class="col-md-3">
	<div class="thumbnail" style="border-radius: 20px" >
		<!-- tên link đúng 
		<?php
 $result = str_replace('jpg', 'php', $value['hinh']);


 	?>

-->
<?php
$tach1hinh=$value['hinh'];
 $hinh = explode(";", $tach1hinh); 
$hinhanh1=$hinh[0];
 ?>
		

 <a href="sanpham/sanpham.php?id=<?php echo $value['masp'] ?>"><img src="img/<?php echo $hinhanh1 ?>"></a>
 <div class="text-center">
 	 <a style="text-align: center;font-family: courier new;font-weight: bold;font-size: 20px" href="sanpham/sanpham.php?id=<?php echo $value['masp'] ?>"><?php echo $value['tensp'] ?></a>
 </div>
 <div class="text-center">
 	
 <h5 style="font-weight: bold;"><?php echo number_format($value['giaban'])  ?>đ</h5>
 </div>
</div>
</div>

<?php	

}
?>

