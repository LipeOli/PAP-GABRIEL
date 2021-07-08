<?php
	session_start();
	
	$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
	$sql="SELECT * FROM Utilizadores WHERE email='".$_SESSION['emailU']."'";
	
	
	
	$res=mysqli_query($lig, $sql);
	
	$linha = mysqli_fetch_assoc($res);
	
	
	$comp="SELECT * FROM Compras WHERE email='".$_SESSION['emailU']."'";
	
	$res2=mysqli_query($lig, $comp);

	
	
?>	
	<html>
	
	<head>
<title> Perfil </title>
	
	

<!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>GEEK</title>
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
	
	
	<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Perfil</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	
	<table>
	<tr>
     <td>
		<div> <button type="button"><a class="btn btn-outline-dark" style="background-color: #ff6666;" role="button" href="perfil.php"><font size="5" >Perfil</font></a></button></div>
     <td>
	 <td>
		<div><button type="button"><a class="btn btn-outline-dark active" style="background-color: #ff6666;" role="button" href="historicoC.php"><font size="5" >Compras Efetuadas</font></a></button></div>

	 </tr>
	</tr> 

	
	</table>
    </div>
  </div>
</nav>


	<div class="contact">
		<div class="container">
			<div class="col-md-12">
	

	
	
	
	
	
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<div class="col-md-12">
	

	
	
	
	
	
			</div>
		</div>
	</div>
	
	<div class="contact">
		<div class="container">
			<div class="col-md-12">
	
					

					
										
					
					
					<table id='customers' style="width:100%">
						<tr>
							<th>Quantidade de jogos</th>
							<th>Data da compra</th>
							<th>Hora da compra</th>
							<th>Total pago</th>
						
						</tr>
						<?php while ($linhaC = mysqli_fetch_array($res2)){ ?>													
					
					
					
						<tr>
						
							<td><?php echo $linhaC["quantidade"]; ?></td>
							<td><?php echo $linhaC["data_comp"]; ?></td>
							<td><?php echo $linhaC["hora_comp"]; ?></td>
							<td><?php echo $linhaC["total_comp"];?>€</td>
						
						
						</tr>
					
					
					
						<?php } ?>					

					
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
	  
	  <div class="contact">
		<div class="container">
			<div class="col-md-12">
	

	
	
	
	
	
			</div>
		</div>
	</div>
	
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
