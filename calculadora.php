<?php

function sumadd($numero1, $numero2, $numero3, $numero4){
		
		$resultado=($numero1*$numero4)+($numero2*$numero3)/$numero2*$numero4;
		
		echo "{$numero1}/{$numero2} + {$numero3}/{$numero4} = {$resultado}";
		
	}
	function restadd($numero1, $numero2, $numero3, $numero4){

		$resultado=($numero1*$numero4)-($numero2*$numero3)/$numero2*$numero4;
		
		echo "{$numero1}/{$numero2} - {$numero3}/{$numero4} = {$resultado}";
	}
	function multiplicacion($numero1, $numero2, $numero3, $numero4){
		$resultado = $numero1 * $numero3/$numero2*$numero4;
		echo "{$numero1} * {$numero3}/{$numero2} * {$numero4} = {$resultado}";
		
	}
	function division($numero1, $numero2, $numero3, $numero4){
		$resultado = $numero1 * $numero4/$numero2*$numero3;
		echo "{$numero1} * {$numero4}/{$numero2} * {$numero3} = {$resultado}";
		
		
	}
	function potenciaep($numero1, $numero2){
		$resultado = ($numero1*$numero1*$numero1*$numero1);
		$result = ($numero2*$numero2*$numero2*$numero2);
		echo "{$numero1} / {$numero2}{^4}= {$resultado}/{$result}";
		
		
	}
	function potenciaen($numero1, $numero2){
		$result = ($numero1*$numero1*$numero1*$numero1);
		$resultado = ($numero2*$numero2*$numero2*$numero2);
		echo "{$numero1} / {$numero2}{^-4}= {$resultado}/{$result}";
		
		
	}


if(isset($_POST['num1']) || isset($_POST['num2']) || isset($_POST['num3']) ||isset($_POST['num4']) || isset($_POST['operacion'])){
		$numero1 = $_POST['num1'];
		$numero2 = $_POST['num2'];
		$numero3 = $_POST['num3'];
		$numero4 = $_POST['num4'];
		$operacion = $_POST['operacion']; //+ - * /
		switch($operacion){
			case '+': sumadd($numero1, $numero2, $numero3, $numero4);
			break;
			case '-': restadd($numero1, $numero2, $numero3, $numero4);
			break;
			case '*': multiplicacion($numero1, $numero2, $numero3, $numero4);
			break;
			case '/': division($numero1, $numero2, $numero3, $numero4);
			break;
			case '^+2': potenciaep($numero1, $numero2, $numero3, $numero4);
			break;
			case '^-2': potenciaen($numero1, $numero2, $numero3, $numero4);
			break;
			case '**': raiz($numero1, $numero2, $numero3, $numero4);
			break;
			default: echo "No es una operación válidad";
		}
	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculador</title>
</head>
<body>
<h1>Calculadora fraccionarios</h1>
	<form action="calculadora.php" method="POST">
		<label>Numero 1</label>
		<input type="number" name="num1" required="">
		<br><br>
		
		<label>Numero 2</label>
		<input type="number" name="num2" required="">
		<br><br>

		<label>Numero 3</label>
		<input type="number" name="num3" required="">
		<br><br>

		<label>Numero 4</label>
		<input type="number" name="num4" required="">
		<br><br>

		<select name="operacion">
			<option value="+">Suma distinto denominador</option>
			<option value="-">Resta distinto denominador</option>
			<option value="*">Multiplicación</option>
			<option value="/">División</option>
			<option value="^+2">Potencia exponente positivo </option>
			<option value="^-2">Potencia exponente negativo</option>
			<option value="**">Raiz cuadrada</option>

		</select>
		<br><br>

		<input type="submit" value="Calcular">
	</form>
</body>
</html>

