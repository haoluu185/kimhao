<?php
$sql= 'select * from loai where maloai="ATD" ';
$tam=$conn->query ($sql);
$data = $tam->fetchAll();
foreach($data as $value)
{
?>

	<a href=""><?php echo $value['tenloai'] ?></a>
	
	<?php
	}
	?>