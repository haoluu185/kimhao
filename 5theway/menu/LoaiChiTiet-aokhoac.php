<?php
$sql= "select * from chitietloai where maloai='AK'";
$tam=$conn->query ($sql);
$data = $tam->fetchAll();
foreach($data as $value)
{
?>


	<li><a href=""><?php echo $value['tenloaichitiet'] ?></a></li>
	<?php
	}
	?>