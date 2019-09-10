<?
if(!empty($_POST['age']) && !empty($_POST['name'])) {
	$_SESSION['ageArray'] = array();
	$_SESSION['nameArray'] = array();
	$myAge = $_POST['age'];
	array_push($_SESSION['ageArray'], $myAge);
	$myName = $_POST['name'];
	array_push($_SESSION['nameArray'], $myName);
} 
?>
<form action="" method="post">
	Name <input type="text" name="name">
	<br>
	Virsta 
	<select name="age">
		<?
			for($i = 1; $i < 100; $i++) {?>
				<option><?= $i ?></option>
			<?}?>
	</select>
	<br>
	<input type="submit">
</form>

