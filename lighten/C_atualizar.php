<?php
$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");

$c="select * from console where codConsole='$_GET[codC]'";

$rc = mysqli_query($lig, $c) or die("3");

$lc =mysqli_fetch_assoc($rc);



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

	<form class="main_form" action="#" method="post" enctype="multipart/form-data">


	<div class=" col-md-12">
	<label><font size="5"> Codigo: </font></label><br>
	<input  class="form-control" type="text" name="cod" value="<?php echo $lc[codConsole]; ?>" readonly>
	</div>
	
	<div class=" col-md-12">
	<label><font size="5"> Nome: </font></label><br>
	<input  class="form-control" type="text" name="nome" value="<?php echo $lc[nome_console]; ?>">
	</div>

					
<br><button class="send" type="submit">Inserir</button><br>

<button class="send" type="reset">Limpar</button><br>



</form>

</div>
</div>
</div>
</div>






</body>
</html>

