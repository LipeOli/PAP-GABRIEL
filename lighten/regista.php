<?php

$email = $_POST["email"];
$nomeUser = $_POST["nome"];
$data = $_POST["nascimento"];
$senha = $_POST["senha"];
$sexo = $_POST["radio"];
$cliente ="cliente";


	$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
	
	$q1="select * from Utilizadores";
	
	$res= mysqli_query($lig,$q1);
	
	$l = mysqli_fetch_assoc($res);
	
	if($email == $l[email]){
		
		echo" <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=registar.php'>
			<script type=\"text/javascript\">
				alert(\"Email já existe.\");
			</script>			";
		
	}else{
	
	$rg = "INSERT INTO Utilizadores VALUES ('$email','$nomeUser','$data','$senha','$sexo','$cliente')";
			
	mysqli_query($lig,$rg) or die(mysqli_error($lig));
	
	mysqli_close($lig);
	
	header("Location:registar.php");}
?>