<?php
session_start();

	$quant = $_POST['quant'];
	$total = $_POST['total'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	
	$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");

$q1="insert into compras value('null','$hora','$data','$total','".$_SESSION['emailU']."','$quant')";
	
mysqli_query($lig, $q1) or die(mysqli_error($lig));

Mysqli_close($lig);

unset($_SESSION['carrinho']);

header("Location: perfil.php");

?>