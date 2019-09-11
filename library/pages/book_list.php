<?
$result = mysqli_query($connection, "SELECT * FROM books");
?>
<table border="1">
<tr>
	<th>Name</th>
	<th>Year</th>
	<th>Author</th>
</tr>
<? while($book = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $book['name']?></td>
	<td><?= $book['year']?></td>
	<td><?= $book['author']?></td>
</tr>
<? }?>