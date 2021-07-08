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


		
		#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 20px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #b34d4d;
  color: white;
}
		
		




<!---->
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
      <li class="nav-item active">
        <a class="nav-link" href="P_tbl.php"><font size="5" >Tabela </font><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
       
      </li>
	  
	  	        <li class="nav-item ">
        
      </li>
	  
	        <li class="nav-item ">
        
      </li>
      
    </ul>

  </div>
</nav>
</header>

	<div class="contact">
		<div class="container">
			<div class="col-md-12">
			
			<div class="col-md-12">
			<p><font size="5">Tabela de jogos</font></p><br>
			</div>
			
	<div class="col-md-9">
		
			<a class="btn btn-secondary btn-lg" style="background-color: #ff6666;" href="P_inserir.php"><font size="4">Inserir Jogo</font></a>
			</div>

	<?php

$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");


$query="select * from jogos";


$resultado = mysqli_query($lig, $query) or die("erro na conexao");




if(!$resultado)
	die("Erro na consulta ".mysqli_error($lig));
else
{
	
	
	
	echo"<table id='customers' >";
		echo" <th> Codigo  </th> 
		<th> Nome  </th> <th> Descricao </th> 
		<th> Empresa </th> 
		<th> faixa etaria </th> 
		<th> Ano do lancamento </th> 
		<th> Preco </th> 
		<th> imagem  </th>
		<th> Console  </th>
		<th> Género  </th>
		<th> Editar </th></br>";
		
		
		while ($linha = mysqli_fetch_array($resultado))
		{
			echo "<tr ><td> $linha[cod_jg] </td> 
					<td > $linha[nome_jg] </td>
					<td > $linha[descricao] </td>
					<td > $linha[empresa_jg] </td>					
					<td > $linha[faixa_etaria] </td>
					<td > $linha[ano_lancamento] </td>
					<td > $linha[preco] </td>
					<td > $linha[imagem] </td>"; 
					
					$q1="select *
						from generos g 
						inner join jogosgenero jg 
						on jg.codGenero = g.codGenero
						inner join jogos j
						on j.cod_jg = jg.cod_jg
						where j.cod_jg ='$linha[cod_jg]' ";



						$r = mysqli_query($lig, $q1);
						
						
						
						$q2="select *
							from console c 
							inner join jogosconsole jc 
							on jc.codConsole = c.codConsole
							inner join jogos j
							on j.cod_jg = jc.cod_jg
							where j.cod_jg ='$linha[cod_jg]' ";



						$r2 = mysqli_query($lig, $q2);
					
?>					
					
					<td><?php 
	while ($l2 = mysqli_fetch_array($r2)){
	echo $l2['nome_console'].'<br>';} ?></td>
	
	<td><?php 
	while ($l = mysqli_fetch_array($r)){
	echo $l['nome_genero'].'<br>';} ?></td>
					 
				

<td ><a href= "P_atualizar.php?cod= <?php echo $linha['cod_jg']; ?>">Editar </a> <a href= "deletar.php?cod= <?php echo $linha['cod_jg']; ?>">Apagar </a> </td></tr> 

<?php
		}
		echo"</table>";
		
		
}
 

?>
	
	
	
	
			</div>
		</div>
	</div>



<div class="contact">
		<div class="container">
			<div class="col-md-12">
			
			<div class="col-md-12">
			<p><font size="5">Tabela de géneros</font></p><br>
			</div>
			
				<div class="col-md-9">
		
			 <a class="btn btn-secondary btn-lg" style="background-color: #ff6666;" href="P_genero.php">Inserir Género</a>
			</div>
			<div class="col-md-6">
			<p><font size="2" >(Apagar por favor o jogo que utilize o campo género que queira editar ou apagar)</font></p>
			
			</div>
			
	<table id='customers' >

		<tr>
		<th> Codigo  </th> 
		<th> Nome  </th> 
		<th> Editar  </th> 
		</tr>
	<?php




$g="select * from generos";


$rg = mysqli_query($lig, $g) or die("erro na conexao");

while ($lg = mysqli_fetch_array($rg)){

?>


		<tr >

		<td> <?php echo $lg[codGenero] ?></td> 
		<td><?php echo $lg[nome_genero] ?></td>
		<td ><a href= "G_atualizar.php?codG= <?php echo $lg[codGenero]; ?>">Editar </a><br> 
		<a href= "eliminarG.php?codG= <?php echo $lg[codGenero]; ?>">Apagar </a> </td>
		</tr>
<?php }?> 




</table>

	
	
	
	
			</div>
		</div>
	</div>


<div class="contact">
		<div class="container">
			<div class="col-md-12">
			
			<div class="col-md-6">
			<p><font size="5" color="Black">Tabela de consoles</font></p><br>
			
			</div>
			
			<div class="col-md-9">
		
			<a class="btn btn-secondary btn-lg" style="background-color: #ff6666;" href="P_console.php"><font size="4">Inserir Console</font></a>
			</div>
			
			<div class="col-md-6">
			<p><font size="2">(Apagar por favor o jogo que utilize o campo console que queira editar ou apagar)</font></p>
			
			</div>
			
			
			
			
	<table id='customers' >

		<tr>
		<th> Codigo  </th> 
		<th> Nome  </th> 
		<th> Editar </th> 
		</tr>
	<?php




$c="select * from console";


$rc = mysqli_query($lig, $c) or die("erro na conexao");

while ($lc = mysqli_fetch_array($rc)){

?>


		<tr >

		<td> <?php echo $lc[codConsole] ?></td> 
		<td><?php echo $lc[nome_console] ?></td>
		<td ><a href= "C_atualizar.php?codC= <?php echo $lc[codConsole]; ?>">Editar </a><br> 
		<a href= "eliminarC.php?codC= <?php echo $lc[codConsole]; ?>">Apagar </a> </td>
		</tr>
<?php }?> 




</table>

	
	
	
	
			</div>
		</div>
	</div>



<div class="contact">
		<div class="container">
			<div class="col-md-12">

	
	
			</div>
		</div>
	</div>


<?php


mysqli_close($lig);
?>





</body>
</html>

