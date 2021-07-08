






<!DOCTYPE html>






<html lang="en">
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
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
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
      <!-- end header -->
	  
	  				<?php




$query="select * 
from Jogos
where cod_jg='$_GET[cod]'";

$resultado = mysqli_query($lig, $query);

$linha = mysqli_fetch_assoc($resultado);

$q1="select *
from generos g 
inner join jogosgenero jg 
on jg.codGenero = g.codGenero
inner join jogos j
on j.cod_jg = jg.cod_jg
where j.cod_jg ='$_GET[cod]' ";



$r = mysqli_query($lig, $q1);

$q2="select *
from console c 
inner join jogosconsole jc 
on jc.codConsole = c.codConsole
inner join jogos j
on j.cod_jg = jc.cod_jg
where j.cod_jg ='$_GET[cod]' ";



$r2 = mysqli_query($lig, $q2);


?>
  
  <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><?php echo $linha[nome_jg]; ?></h2>
                    </div>
                </div>
            </div>
        </div>
  </div>
  
      <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				


	
	
	
	<table style="width:34%">
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <tr>
	<td><i><img src="<?php echo "jogos/".$linha[imagem]; ?>"/></i></td>
	
	
    
  </tr>
 
  	<table style="width:32%">
  <tr>
  <th></th>
	<th>Preço</th>
    <th></th>
    
   
  </tr>
  
  <tr>
	<td></td>
	<td><font size="7"><?php echo $linha[preco]; ?>€</font></td>
	<td><a class="buy" href="carrinho.php?acao=add&id=<?php echo $linha['cod_jg']; ?>">Comprar</a></td>
    
  </tr>
 

</table><br>

	<table style="width:77%">
  <tr>
    <th></th>
    <th>Nome</th>
	<th>Empresa</th>
    <th>Faixa Etaria</th>
	<th>Ano de Lançamento</th>
	
  </tr>
  <tr>
	<td></td>
	
    <td><?php echo $linha[nome_jg]; ?></td>
    <td><?php echo $linha[empresa_jg]; ?></td>
    <td><?php echo $linha[faixa_etaria]; ?></td>
	<td><?php echo $linha[ano_lancamento]; ?></td>
	
	
  </tr>
  

</table><br>


	<table style="width:100%">
  <tr>
  <th></th>
    <th>Descrição</th>

  </tr>
  <tr>
	<td></td>
   
	<td><?php echo $linha[descricao]; ?></td>
  </tr>

</table>

	<br><table style="width:50%">
  <tr>
  <th></th>
    <th>Génoros</th><th>Consoles</th>

  </tr>
  <tr>
	<td></td>
   
	<td><?php 
	while ($l = mysqli_fetch_array($r)){
	echo $l['nome_genero'].'<br>';} ?></td>
  
  <td><?php 
	while ($l2 = mysqli_fetch_array($r2)){
	echo $l2['nome_console'].'<br>';} ?></td>
  </tr>

</table>





</div>
</div></div>
      <!--  footer --> 
   <footr>
      <div class="copyright">
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