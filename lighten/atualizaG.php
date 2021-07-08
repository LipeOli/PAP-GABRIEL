<?php
$cod=$_POST["cod"];
$nome=$_POST["nome"];

$query="update generos set nome_genero= '$nome'  
where codGenero=$cod";
mysqli_query($lig,$query) or die(mysqli_error($lig));

?>