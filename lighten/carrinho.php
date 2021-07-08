<?php

session_start();



if(isset($_SESSION['emailU'])){

	if(!isset($_SESSION['carrinho'])){
		
		$_SESSION['carrinho'] = array();
		
		
		
	}
	
	//add produto
	
	$total =0;
	
	if(isset($_GET['acao'])){
		
		//adicionar carrinho
		if($_GET['acao'] == 'add'){
			
			$id = intval($_GET['id']);
			
			if(!isset($_SESSION['carrinho'][$id])){
				$_SESSION['carrinho'][$id] = 1;
				
				header("Location:carrinho.php");
			
			}else{
				
				$_SESSION['carrinho'][$id] += 1;
				
				header("Location:carrinho.php");
				
			}
			
		}
		
		//remover carrinho
		if($_GET['acao'] == 'del'){
			
			$id = intval($_GET['id']);
			if(isset($_SESSION['carrinho'][$id])){
				
				unset($_SESSION['carrinho'][$id]);
				
			}			
			
		}
		
		//Alterar quantidade
		if($_GET['acao'] == 'up'){
			
			if(is_array($_POST['prod'])){
				foreach($_POST['prod'] as $id => $qtd){
					
					$id = intval($id);
					$qtd = intval($qtd);
					
					if(!empty($qtd) || $qtd <> 0){
						
						$_SESSION['carrinho'][$id] = $qtd;
						
					}else{
						
						unset($_SESSION['carrinho'][$id]);
						
					}
					
				}
				
			}
			
		}
		
	}
	
	

}else{
	
	echo" <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=entrar.php'>
			<script type=\"text/javascript\">
				alert(\"Necessario fazer login ou se registrar.\");
			</script>			";
	
	
	

}




?>

<html>

<head>
  
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
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
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><![endif]-->

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

</style>



</head>
<body class="main-layout">

<div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
    <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       
								<?php
								
											   session_start();

$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
	$sql="SELECT * FROM Utilizadores WHERE email='".$_SESSION['emailU']."'";
	
	
	
	$res=mysqli_query($lig, $sql);
	
	$linha = mysqli_fetch_assoc($res);
								
			   
								if(isset($_SESSION['emailU'])){
				   
								?>	
					   
					   <div class="top-box">
                        <ul class="sociel_link">
                         
													 
						 <li> <a href="perfil.php"><img src="images/iconP.jpg" /></i></a></li>
                         <li> <a href="carrinho.php"><img src="images/iconC.jpg" /></i></a></li>                         
								
                     </ul>
                    </div>
								<?php
								}				   
								?>
					
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<?php
			   




			   
			   
			   
								if(isset($_SESSION['emailU'])){
				   
				   
				   
				   
				   
								?>	
								
								
                       <div class="top-box">
                        <p>Olá, <?php echo $linha['nome_user']; ?></p>
                    </div>
								<?php
								}				   
								?>
					
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="images/logo.jpg" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.php">Página Inicial</a> </li>
                              <li> <a href="product.php">Jogos</a></li>
                              
							  	<?php			   
								if(!isset($_SESSION['emailU'])){				   
								?>
							  
                              <li class="mean-last"> <a href="registar.php">Regista-te</a> </li>
                               
							   <?php			   
								}			   
								?>
							   
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
			   <?php
			   
			   if(!isset($_SESSION['emailU'])){
				   
				   ?>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="entrar.php">Entrar</a></li>
               </div>
			   <?php
			   }else{
				   
			   ?>
			   <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="logout.php" >Sair</a></li>
               </div>
			   <?php		   
			   }			   
			   ?>
			   
            </div>
         </div>
         <!-- end header inner --> 
      </header>
	  
	  
	    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2> Carrinho </h2>
                    </div>
                </div>
            </div>
        </div>
  </div>
  
        <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

	<br><br><br><table style="width:100%" id="customers">
	<thead>
  <tr>
    <th>Nome</th>
    <th>Quantidade</th> 
    <th>Preço</th>
	
	<th>Total</th>
	<th>Eliminar jogo do carrinho</th>
	<th>Atualizar quantidade de jogos no carrinho</th>
  </tr>
  </thead>
  
  <form action="?acao=up" method="post">
  
<tfoot>

	<tr>	
	<td><a class="btn btn-outline-dark" style="background-color: #ff6666;" href="" data-toggle="modal" data-target="#myModal">Efetuar compra</a></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td><button class="btn btn-secondary btn-lg" style="background-color: #ff6666;" type="submit" value="Atualizar Carrinho" ><font size="3" color="Black">Atualizar Carrinho</font></button></td>

</tfoot>

<tbody>
	<?php
		if(count($_SESSION['carrinho']) == 0){
			echo'<tr><td colspan="6">Não há produto no carrinho</td></tr>';
		}else{
			
			
			$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
			
			foreach($_SESSION['carrinho'] as $id => $qtd){
				$sql ="SELECT * FROM Jogos WHERE cod_jg= '$id'";
				
				
				$r = mysqli_query($lig, $sql) or die (mysqli_error());
				
				
				
				
				$l = mysqli_fetch_assoc($r);
				
						
			
    
   

				
				$nome = $l['nome_jg'];
				$preco = number_format($l['preco'], 2, ',', '.');
				$sub = number_format($l['preco'] * $qtd, 2, ',', '.');
				$total += $sub;
				$t=array_sum($_SESSION['carrinho']);
				//$y=array_sum($total);
				 
				 /*foreach ($_SESSION['carrinho'] as $key => $value) { 
        echo "Minha cor no indice ".$key." é ".$value."<br/>";
    }*/
	
				 
				 
				echo"<tr>
						<td>".$nome."</td>
						<td><input type='text' size='3' name='prod[".$id."]' value='".$qtd."' /></td>
						<td>".$preco."€</td>
						
						<td>".$sub."€</td>
						
						<td><a href=?acao=del&id=".$id.">Remover</a></td>
					";
					
				
				
			}?>
			<td></td></tr>
		<?php
		}
		
		
		
	?>
	
  <!---->
  
  
  
  
 <tbody>
 
 </form>
 
 

 
</table>




<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
       
      <div class="modal-content">
        <div class="modal-header">
          
          
        </div>
        <div class="modal-body">
          
		  <div>
			
			<form action="efetuar.php" method="post">
			
			<div>
				<label>Quantidade de produtos:</label><br>
				<input type="text" name="quant" value="<?php echo $t ?>" readonly>		
			</div><br>
			
			<div>
				<label>Total a pagar:</label><br>
				<input type="text" name="total" value="<?php echo $total ?>€" readonly>		
			</div><br>
			
			<div>
				<label>Data da compra:</label><br>
				<input type="date" name="data" value="<?php echo date("Y-m-d"); ?>" readonly>		
			</div><br>
			
			<div>
				<label>Hora:</label><br>
				<input type="time" name="hora" value="<?php date_default_timezone_set('Europe/Lisbon'); echo date('H:i:s'); ?>" readonly>		
			</div><br>
			
			
			
	
			
			
			
			
			
			
			
			
			
			
			
			
			
		    
			
		  </div>
		  
		  
		  
		  
		  
        </div>
        <div class="modal-footer">
		  <button type="submit" class="btn btn-default" >Finalizar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		</form>
		
      </div>
      
    </div>
  </div>
  
</div>

</div></div>

<footr>
            <br><br><br><br><div class="copyright">
               <p></p> <?php
		if($_SESSION['tipo'] == "adm"){
	?>
	
	
		<p> 
		<a href="P_tbl.php">Área do administrador</a>
		</p>
		

	<?php
		}
	?><p></p>
            </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
	  <script src="js/pagamentos.js"></script>
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script>

</body>

</html>