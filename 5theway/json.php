 <?php include 'connect.php';

//$id = $_GET['id'];

$sql= "select * from sanpham where masp='T01'";
$tam=$conn->query ($sql);
$data = $tam->fetchAll();
$v=1;
foreach($data as $value)
{
$a= $value['dacdiem'];
}
$decode = json_decode($a);
$dacdiem= $decode->dd;
//print_r($dacdiem);
$a=count($dacdiem);
//echo $a;

?>
 <form method="post" action="json.php">
 	<?php 
for ($i=0; $i < count($dacdiem); $i++) { 
	
  
$b= $dacdiem[$i];

?>
<input type="radio" name="txt" value="<?php echo $v ?>" checked="checked"> <?php print_r($b->name)  ?>
<br>

<?php $v++;  

if(isset($_POST['gui']))
{
	
	if($_POST['txt']==$b->id)
	print_r($b->name);

}
 } ?>

<input type="submit" name="gui">


</form>












