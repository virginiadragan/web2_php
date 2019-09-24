<?
if(!empty($_POST['category'])) {
	
	$result = mysqli_query($connection, "SELECT * FROM categorys");
	if(mysqli_query($connection, "INSERT INTO categorys SET category = '{$_POST['category']}'")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Category <input type="text" name="category">
	<br>
	<input type="submit">
</form>

<?}?>