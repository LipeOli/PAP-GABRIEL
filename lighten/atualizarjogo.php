<?php
$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");

$codj=$_POST["codj"];
$nomej=$_POST["nomeJogo"];
$empresaj=$_POST["empresaJogo"];
$faixaj=$_POST["faixaEJogo"];
$anoj=$_POST["anoLJogo"];
$precoj=$_POST["precoJogo"];
$descricaoj=$_POST["descricaoJogo"];
$imagemj=$_FILES[imagemJogo][name];
$consolas = $_POST["consolas"];
$generos = $_POST["generos"];

	if($_FILES[imagemJogo][name] == false){
		
		
		$query="update Jogos set nome_jg= '$nomej',empresa_jg='$empresaj', faixa_etaria='$faixaj', ano_lancamento='$anoj' , preco='$precoj' ,descricao='$descricaoj'  
where cod_jg=$codj";



mysqli_query($lig,$query) or die(mysqli_error($lig));


$c="delete from jogosconsole where cod_jg='$codj'";
mysqli_query($lig,$c) or die(mysqli_error($lig));

	foreach ($consolas as $consola){
		
		
		$q3 = "insert into jogosconsole values('$codj','$consola' )";
		mysqli_query($lig,$q3) or die(mysqli_error($lig));
	}
	
	
	
	
$g="delete from jogosgenero where cod_jg='$codj'";
mysqli_query($lig,$g) or die(mysqli_error($lig));
	
	foreach ($generos as $genero){
		
		
		$q4 = "insert into jogosgenero values('$codj','$genero' )";
		mysqli_query($lig,$q4) or die(mysqli_error($lig));
	}


header("Location:P_tbl.php");
		
		
		
		
	}else{
		$target_dir = "jogos/";
		$target_file = $target_dir .basename($_FILES["imagemJogo"]["name"]);
		move_uploaded_file($_FILES["imagemJogo"]["tmp_name"], $target_file);



$query="update Jogos set nome_jg= '$nomej',empresa_jg='$empresaj', faixa_etaria='$faixaj', ano_lancamento='$anoj' , preco='$precoj' , imagem='$imagemj' ,descricao='$descricaoj'  
where cod_jg=$codj";



mysqli_query($lig,$query) or die(mysqli_error($lig));


$c="delete from jogosconsole where cod_jg='$codj'";
mysqli_query($lig,$c) or die(mysqli_error($lig));

	foreach ($consolas as $consola){
		
		
		$q3 = "insert into jogosconsole values('$codj','$consola' )";
		mysqli_query($lig,$q3) or die(mysqli_error($lig));
	}
	
	
	
	
$g="delete from jogosgenero where cod_jg='$codj'";
mysqli_query($lig,$g) or die(mysqli_error($lig));
	
	foreach ($generos as $genero){
		
		
		$q4 = "insert into jogosgenero values('$codj','$genero' )";
		mysqli_query($lig,$q4) or die(mysqli_error($lig));
	}


header("Location:P_tbl.php");

	}
?>