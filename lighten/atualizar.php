<?php
	session_start();
	
	$nome=$_POST["nomeUti"];
	$data=$_POST["dataUti"];
	$sexo=$_POST["radio"];
	$pass=$_POST["pass"];
	
	
	
	
	$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
	
	
	
	$q= "UPDATE utilizadores SET nome_user = '$nome', data_de_nascimento = '$data',senha_user = '$pass', sexo_user = '$sexo'
			WHERE email ='".$_SESSION['emailU']."'";
			
			
			
			
	mysqli_query($lig, $q);	
	
	
	
	mysqli_close($lig);
header("Location:perfil.php");
?>