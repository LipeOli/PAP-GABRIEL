<?php



$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");


$query="delete from console where codConsole='$_GET[codC]'";

mysqli_query($lig,$query) or die(mysqli_error($lig));
mysqli_close($lig);


header("Location:P_tbl.php");
?>