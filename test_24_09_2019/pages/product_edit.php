<?
$result = mysqli_query($connection, "SELECT * FROM products WHERE id_p = {$_GET['id']}");
$product = mysqli_fetch_assoc($result);
if(!empty($_POST['name'])) {
	$result = mysqli_query($connection, "SELECT * FROM products");
	if(mysqli_query($connection, "UPDATE products SET name = '{$_POST['name']}', price = {$_POST['price']}, category = {$_POST['category']} WHERE id_p = {$_GET['id']}")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Name <input type="text" name="name" value="<?= $product['name']?>">
	<br>
	Price <input type="text" name="price" value="<?= $product['price']?>"> 
	<br>
	<? $categoryResult =  mysqli_query($connection, "SELECT * FROM categorys");?>
	Category
	<select name="category">
		<? while($categorys = mysqli_fetch_assoc($categoryResult)){?>
		<option value="<?=$categorys['id_c'];?>" <?= $categorys['id_c'] == $product['category']?'selected':'';?>><?=$categorys['category'];?></option>
		<? }?>
	</select>
	<br>
	<input type="submit">
</form>

<?}?>