<?
if(!empty($_POST['name']) && !empty($_POST['price'])) {
	
	$result = mysqli_query($connection, "SELECT * FROM products");
	if(mysqli_query($connection, "INSERT INTO products SET name = '{$_POST['name']}', price = {$_POST['price']}, category = {$_POST['category']}")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Name <input type="text" name="name">
	<br>
	Price <input type="number" name="price">
	<br>
	<? $categoryResult =  mysqli_query($connection, "SELECT * FROM categorys");?>
	Category
	<select name="category">
		<? while($categorys = mysqli_fetch_assoc($categoryResult)){?>
		<option value="<?=$categorys['id_c'];?>"><?=$categorys['category'];?></option>
		<? }?>
	</select>
	<br>
	<input type="submit">
</form>

<?}?>