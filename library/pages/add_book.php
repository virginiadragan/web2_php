<?
if(!empty($_POST['name'])) {
	
	$result = mysqli_query($connection, "SELECT * FROM books");
	//mysqli_query($connection, "INSERT INTO students (name, age) VALUES ('{$_POST['name']}', {$_POST['age']})");
	if(mysqli_query($connection, "INSERT INTO books SET name = '{$_POST['name']}', year = {$_POST['year']}, author = '{$_POST['author']}'")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Name <input type="text" name="name">
	<br>
	Year <input type="number" name="year">
	<br>
	Author <input type="text" name="author">
	<br>
	<input type="submit">
</form>

<?}?>