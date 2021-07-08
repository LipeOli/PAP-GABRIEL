<?php
$codj=$_POST["codjogo"];


$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");

$q1="delete from jogosconsole where cod_jg='$_GET[cod]'";
mysqli_query($lig,$q1) or die(mysqli_error($lig));

$q2="delete from jogosgenero where cod_jg='$_GET[cod]'";
mysqli_query($lig,$q2) or die(mysqli_error($lig));

$query="delete from Jogos where cod_jg='$_GET[cod]'";

mysqli_query($lig,$query) or die(mysqli_error($lig));
mysqli_close($lig);


header("Location:P_tbl.php");
?>