<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM products WHERE id_p = {$_GET['id']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}
$result = mysqli_query($connection, "SELECT * FROM products inner join categorys on products.category = categorys.id_c");
?>
<table border="1">
    <tr>
        <td>Denumire</td>
        <td>Pret</td>
        <td>Categorie</td>
        <td>Adm</td>
    </tr>
<? while($products = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $products['name']?></td>
	<td><?= $products['price']?></td>
    <td><?= $products['category']?></td>
	<td>
    <a href="?page=product_list&action=delete&id=<?= $products['id_p']?>" onclick="return confirm('Doriti sa stergeti inregistrarea?')">x</a>
    <a href="?page=product_edit&id=<?= $products['id_p']?>">m</a>
  </td>
</tr>
<? }?>