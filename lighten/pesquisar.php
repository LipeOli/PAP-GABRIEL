<?php
session_start();


$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
	$sql="SELECT * FROM Utilizadores WHERE email='".$_SESSION['emailU']."'";
	
	
	
	$res=mysqli_query($lig, $sql);
	
	$linha = mysqli_fetch_assoc($res);



?>


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
                              <li > <a href="index.php">Home</a> </li>
                              <li class="active"> <a href="product.php">Jogos</a></li>
                              
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
       <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Jogos</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     
                     
					 	<form class="form-inline" action="pesquisar.php" method="post" enctype="multipart/form-data">
						
						<nav class="navbar navbar-light bg-light">
<input class="form-control mr-sm-2" type="radio" name="radio" value="nome" checked><label>Nome do Jogo </label>

</nav>

<nav class="navbar navbar-light bg-light">
<input class="form-control mr-sm-2" type="radio" name="radio" value="console"><label>Console </label>

</nav>


<nav class="navbar navbar-light bg-light">
<input class="form-control mr-sm-2" type="radio" name="radio" value="genero"><label>Género</label>
 
  
</nav>				
					
					<nav class="navbar navbar-light bg-light">
					
					

					
  
    <input class="form-control mr-sm-2" type="search" name="pesquisa" aria-label="Search">
    <button class="btn btn-outline-dark" style="background-color: #ff6666;" type="submit">Pesquisar</button><br>
	

 
  
</nav>

		</form>
					 
					 
					 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
               	
				
				 	<?php
					
					$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
					$p = $_POST['pesquisa'];
					
			
							
							if($_POST['radio'] == "nome"){
							$sql="SELECT * FROM Jogos where nome_jg like '%$p%' ";
						
					
					$result = mysqli_query($lig, $sql) or die("Erro na query");
					$nr=mysqli_num_rows($result);
                    for ($i=0;$i<$nr;$i++) {
					$l=mysqli_fetch_assoc($result);
						$cod= $l['cod_jg'];
						$NOME = $l['nome_jg'];
						$p = $l['preco'];
						$img = $l['imagem'];
					
					if($i%4){
					echo "<br/>";}			
                    ?>
			
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="<?php echo "jogos/".$img; ?>"/></i>
                     <h3><span><a href= "jogo.php?cod= <?php echo $cod; ?>"><?php echo $NOME; ?></a></span></h3>
                     <span><?php echo $p; ?>€</span>
                  </div>
               </div>
			   
               <?php
					}}
				?>
				
				
				
					<?php
					
							if($_POST['radio'] == "console"){
							$sql="SELECT * 	from Jogos j
							INNER JOIN jogosconsole jc
							ON j.cod_jg = jc.cod_jg
							INNER JOIN console c
							ON c.codConsole = jc.codConsole
							where c.nome_console like '%$p%'";
						
					
					$result = mysqli_query($lig, $sql) or die("Erro na query");
					$nr=mysqli_num_rows($result);
                    for ($i=0;$i<$nr;$i++) {
					$l=mysqli_fetch_assoc($result);
						$cod= $l['cod_jg'];
						$NOME = $l['nome_jg'];
						$p = $l['preco'];
						$img = $l['imagem'];
					
					if($i%4){
					echo "<br/>";}			
                    ?>
			
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="<?php echo "jogos/".$img; ?>"/></i>
                     <h3><span><a href= "jogo.php?cod= <?php echo $cod; ?>"><?php echo $NOME; ?></a></span></h3>
                     <span><?php echo $p; ?>€</span>
                  </div>
               </div>
			   
               <?php
					}}
				?>
				
				
				
				
				
				
				
				
				<?php
					
				
							if($_POST['radio'] == "genero"){
							$sql="SELECT * 	from Jogos j
							INNER JOIN jogosgenero jg
							ON j.cod_jg = jg.cod_jg
							INNER JOIN generos g
							ON g.codGenero = jg.codGenero
							where g.nome_genero like '%$p%'";
						
					
					$result = mysqli_query($lig, $sql) or die("Erro na query");
					$nr=mysqli_num_rows($result);
                    for ($i=0;$i<$nr;$i++) {
					$l=mysqli_fetch_assoc($result);
						$cod= $l['cod_jg'];
						$NOME = $l['nome_jg'];
						$p = $l['preco'];
						$img = $l['imagem'];
					
					if($i%4){
					echo "<br/>";}			
                    ?>
			
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="<?php echo "jogos/".$img; ?>"/></i>
                     <h3><span><a href= "jogo.php?cod= <?php echo $cod; ?>"><?php echo $NOME; ?></a></span></h3>
                     <span><?php echo $p; ?>€</span>
                  </div>
               </div>
			   
               <?php
					}}
				?>
              
               </div>
            </div>
         </div>
         
      <!--  footer --> 
      <footr>
      <div class="copyright">
               <p></p> <?php
		if($_SESSION['tipo'] == "adm"){
	?>
	
	
		<p> 
		<a href="P_inserir.php">Inserir, atualizar e deletar os jogos</a>
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