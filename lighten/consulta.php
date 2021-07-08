<html>

<head>
<meta charset="UTF-8">

<style>

body{
			font-family: Arial;
			margin: 0;
			
		}
		
		
		
	
		.menu ul li{
		
			background-color: #262626;
			color: white;
			float: left;
			width: 16%;
			height: 70px;
			display: inline-block;
			
			text-align: center;
			line_height: 40px;
			font-size: 25px;
		}
		
		.menu ul li a{
			padding: 10px 10px;
			display: inline-block;
			
			color: white;
			text-decoration: none;
		}
		
		.menu ul li:hover{
			background: linear-gradient(to right, #004d4d,#009999);
		}
		
		
		
		



table, th, td {
  border: 1px solid black;
}
</style>
</head>




<body>

<header>
	<div class = "menu">
	
		<ul>
		<li><a href = "index.php"> <img src="logo.png" alt="imagem n encontrada" width="60px" height="60px"></a></li>
			<li><a href = "P_inserir.php">Inserir Dados</a></li>
			<li><a href = "#">Atualizar</a></li>
			<li><a href = "#">Eliminar</a></li>
			
			
		
		</ul><br>
	</div>
</header>





<div class="caixadacaixa">

<?php

$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");


$query="select * from Jogos";


$resultado = mysqli_query($lig, $query);

if(!$resultado)
	die("Erro na consulta ".mysqli_error($lig));
else
{
	echo "<div class='tabela'> ";
	echo "<br><br><br><br><h1><label>Listagem de Jogos</label></h1><br>";
	echo "<h3>Foram obtidos ".mysqli_num_rows($resultado)." registos</h3>";
	
	echo"<table >";
		echo" <th> Codigo do jogo </th> <th> Nome </th> <th> Empresa </th> <th> faixa etaria </th> <th> Ano do lancamento </th> <th> Preco </th> <th> imagem </th> <th> descricao </th></br>";
		
		
		while ($linha = mysqli_fetch_array($resultado))
		{
			echo "<tr><td> $linha[cod_jg] </td> 
					<td> $linha[nome_jg] </td>
					<td> $linha[empresa_jg] </td>
					<td> $linha[faixa_etaria] </td>
					<td> $linha[ano_lancamento] </td>
					<td> $linha[preco] </td>
					<td> $linha[imagem] </td>
					<td> $linha[descricao] </td></tr>";
		}
		echo"</table>";
		
		echo "</div>";
}
mysqli_close($lig);
?>
</div>


</body>
</html>