<!DOCTYPE html>
<html>
<head>
	<title>conversion</title>
</head>
<body>

	<h1>Conversion de valores</h1>

	<form action="conversion.php" method="POST">

		<label>ingrese un valor: </label>

		<input type="text" name="num" id="num" required="">
		<br><br>

		<label>Seleccione su unidad de origen: </label>
		<select name="origen" id="origen">
			<option value="o1" id="o1">Byte</option>
			<option value="o2" id="o2">Kilobyte</option>
			<option value="o3" id="o3">Megabyte</option>
			<option value="o4" id="o4">Gigabyte</option>
		</select>
		<br><br>

		<label>Seleccione un escala para convertir el valor: </label>
		<select name="conversion" id="conversion">
			<option value="c1" id="c1">Byte</option>
			<option value="c2" id="c2">Kilobyte</option>
			<option value="c3" id="c3">Megabyte</option>
			<option value="c4" id="c4">Gigabyte</option>
		</select>
		<br><br>


		<input type="submit" value="calcular y mostrar">
		<br><br>

		</form>

</body>
</html>

<?php

$n = $_POST['num'];

$o1 = $_POST['o1'];
$o2 = $_POST['o2'];
$o3 = $_POST['o3'];
$o4 = $_POST['o4'];

$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];

$origen = $_POST['origen'];
$conver = $_POST['conversion'];

if(($origen==$o1) && ($conver==$c2)){

	

}

?>