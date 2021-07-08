<?php



$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");


$q="insert into generos value('null','$_POST[nome]')";

mysqli_query($lig,$q) or die(mysqli_error($lig));
mysqli_close($lig);


header("Location:P_tbl.php");
?>