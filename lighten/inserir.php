


<?php
$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
	$nome= $_POST[nomeJogo];
	$empresa= $_POST[empresaJogo];
	$faixaE= $_POST[faixaEJogo];
	$anoL= $_POST[anoLJogo];
	$preco = $_POST[precoJogo];
	$descricao= $_POST[descricaoJogo];
	$imagem = $_FILES[imagemJogo][name];
	$consolas = $_POST["consolas"];
	$generos = $_POST["generos"];
	
 
	

		
		$target_dir = "C:/AppServ/www/PAP-V1/lighten/jogos/";
		$target_file = $target_dir .basename($_FILES["imagemJogo"]["name"]);
		move_uploaded_file($_FILES["imagemJogo"]["tmp_name"], $target_file);
	
	
	$q="insert into Jogos value('null','$nome','$empresa','$faixaE','$anoL','$preco','$imagem','$descricao')";
	
	
	
	mysqli_query($lig,$q) or die(mysqli_error($lig));
	
	
	$q2="SELECT MAX(Cod_jg) as value
			FROM Jogos";
		
	
	$res2 = mysqli_query($lig,$q2) or die(mysqli_error($lig));
	
	
	
	$linha= mysqli_fetch_assoc($res2);
	
	$cod_jg = $linha['value'];
	foreach ($consolas as $consola){
		
		
		$q3 = "insert into jogosconsole values('$cod_jg','$consola' )";
		mysqli_query($lig,$q3) or die(mysqli_error($lig));
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

		
	

	
	
	foreach ($generos as $genero){
		
		
		$q4 = "insert into jogosgenero values('$cod_jg','$genero' )";
		mysqli_query($lig,$q4) or die(mysqli_error($lig));
	}
	
		
	Mysqli_close($lig);

	

header("Location:P_inserir.php");
?>