<?php

$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");


$query="select * from Jogos where cod_jg='$_GET[cod]'";

$resultado = mysqli_query($lig, $query);

$linha = mysqli_fetch_assoc($resultado);


mysqli_close($lig);
?>

<html>

<head>

<!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>lighten</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<meta charset="UTF-8">

<style>


</style>
</head>




<body class="main-layout">

<header>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5c3a3a;">
  <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="imagem n encontrada" width="150px" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="P_tbl.php"><font size="5" >Tabela </font><span class="sr-only">(current)</span></a>
      </li>
  
      
    </ul>

  </div>
</nav>

	
</header>


    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

	<form class="main_form" action="atualizarjogo.php" method="post" enctype="multipart/form-data">

	
	<div class=" col-md-12">
	<label><font size="5">Codigo: </font></label><br>
	<input class="form-control" type="text" name="codj" value= <?php echo $_GET[cod]; ?> readonly>
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Nome: </font></label><br>
	<input  class="form-control" type="text" name="nomeJogo" value="<?php echo $linha[nome_jg]; ?>">
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Empresa: </font></label><br>
	<input  class="form-control" type="text" name="empresaJogo" value="<?php echo $linha[empresa_jg]; ?>">
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Faixa Etaria: </font></label><br>
	<input  class="form-control" type="text" name="faixaEJogo" value="<?php echo $linha[faixa_etaria]; ?>">
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Ano de Lançamento: </font></label><br>
	<input  class="form-control" type="text" name="anoLJogo" value="<?php echo $linha[ano_lancamento]; ?>">
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Preço: </font></label><br>
	<input  class="form-control" type="text" name="precoJogo" value="<?php echo $linha[preco]; ?>">
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Imagem </font></label><br>
	<input  class="form-control" type="file" name="imagemJogo" value="<?php echo $linha[imagem]; ?>">
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Descrição: </font></label><br>
	<textarea class="form-control" name="descricaoJogo" rows="4" cols="50" maxlength="200"><?php echo $linha[descricao]; ?></textarea><br><br>
	</div>
	
		<div class=" col-md-12">
	<label><font size="5"> Tipo de console: </font></label><br><label> (Aperte a tecla CTRL para selecionar mais opções) </label><br>
	<select class="form-control" name="consolas[]" multiple>
	<?php
					$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
					$sql="SELECT DISTINCT codConsole, nome_console FROM Console";
					
					$sql1="select DISTINCT codConsole from jogosconsole where cod_jg = '$_GET[cod]'";
					
					$a = array();
					
					
					
					$r = mysqli_query($lig, $sql1) or die ("Erro na query");
					$nr1=mysqli_num_rows($r);
                    for ($i=0;$i<$nr1;$i++) {
					$l1=mysqli_fetch_assoc($r);
					$a[$i]=$l1['codConsole'];					
					
					}
					
					function exist($a, $b){
						
						foreach($a as $value){
							
							if($b == $value)
							
							return true;
							
						}
						return false;
						
					}
					
					$result = mysqli_query($lig, $sql) or die("Erro na query");
					$nr=mysqli_num_rows($result);
					
					
                    for ($i=0;$i<$nr;$i++) {
					$l=mysqli_fetch_assoc($result);
						
						$cod = $l['codConsole'];
						$NOME = $l['nome_console'];
//se estiver cod dentro do vetor $a então fica a linha 178 elsa 179
					
					 if (exist($a,$cod) == true){
        
		
				
				
				?>

				
	<option class=" col-md-12" value="<?php echo $cod ?>" selected><?php echo $NOME ?></option>
	 
 <?php 
 
 
 		}else{
			
	?>
			
			<option class=" col-md-12" value="<?php echo $cod ?>" ><?php echo $NOME ?></option>
	<?php
	
		}
	
 
 } ?>
 
 </select>
</div>

	<div class=" col-md-12">
	<label><font size="5"> Géneros do jogo: </font></label><br><label> (Aperte a tecla CTRL para selecionar mais opções) </label><br>
	<select class="form-control" name="generos[]" multiple>
<?php
					
					$sql2="SELECT DISTINCT codGenero, nome_genero FROM Generos";
					
					$sql3="select DISTINCT codGenero from jogosgenero where cod_jg = '$_GET[cod]'";
					
					$a2 = array();
					
					
					
					$r2 = mysqli_query($lig, $sql3) or die ("Erro na query");
					$nr12=mysqli_num_rows($r2);
                    for ($i=0;$i<$nr12;$i++) {
					$l2=mysqli_fetch_assoc($r2);
					$a2[$i]=$l2['codGenero'];					
					
					}
					
						
					
					$result2 = mysqli_query($lig, $sql2) or die("Erro na query");
					$nr2=mysqli_num_rows($result2);
					
					
                    for ($i=0;$i<$nr2;$i++) {
					$l3=mysqli_fetch_assoc($result2);
						
						$cod2 = $l3['codGenero'];
						$NOME2 = $l3['nome_genero'];

					
					 if (exist($a2,$cod2) == true){
        
		
				
				
				?>

				
	<option class=" col-md-12" value="<?php echo $cod2 ?>" selected><?php echo $NOME2 ?></option>
	 
 <?php 
 
 
 		}else{
			
	?>
			
			<option class=" col-md-12" value="<?php echo $cod2 ?>" ><?php echo $NOME2 ?></option>
	<?php
	
		}
	
 
 } ?>
 
 </select>
</div>
	

<br><button class="send" type="submit">Atualizar</button>





</form>

</div>
</div>
</div>
</div>








</body>
</html>