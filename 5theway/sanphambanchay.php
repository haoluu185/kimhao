
<?php 

include 'connect.php' ?>

<?php
$sql= 'select * from chitiethd order by soluong desc limit 4';
$m= 'select DISTINCT tensp from chitiethd';
$tam=$conn->query ($sql);
$data = $tam->fetchAll();





	
foreach($data as $value) 
{
	
	?>

<div class="col-md-3">
	<div class="thumbnail" style="border-radius: 20px">
 <a href="sanpham/sanpham.php?id=<?php echo $value['masp'] ?>"><img src="img/<?php echo $value['hinh'] ?>"></a>
 <div class="text-center">
 <a style="text-align: center;font-family: courier new;font-weight: bold;font-size: 20px" href="<?php echo $value['tensp'] ?>"><?php echo $value['tensp'] ?></a> 
</div>
<div class="text-center">
 <h5 style="font-weight: bold;"><?php echo number_format($value['gia'])  ?>đ</h5>
</div>
</div>
</div>

<?php	

}
?>

