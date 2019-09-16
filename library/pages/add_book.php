<?
if(!empty($_POST['name'])) {
	
	$result = mysqli_query($connection, "SELECT  books.id_book as book_id,
        books.name as book_name,
        books.year as book_year,
        GROUP_CONCAT(authors.name ORDER BY authors.name) writebooks
FROM    books
        INNER JOIN writebooks
            ON books.id_book = writebooks.id_book
        INNER JOIN authors
            ON writebooks.id_author = authors.id_author
GROUP   BY books.id_book, books.name");
	
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