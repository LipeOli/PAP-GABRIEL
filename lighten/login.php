<?php
	
	$lig=mysqli_connect("localhost","root","12345678","GEEK") or die("erro na conexao");
	
		$email=$_POST["email"];
		
		$senha=$_POST["senha"];
		
		$sql="SELECT * FROM Utilizadores WHERE email='$email' AND senha_user='$senha'";
		
		$res=mysqli_query($lig, $sql);
		
		$linha=mysqli_affected_rows($lig);
		
		if($linha > 0){
			
			$l=mysqli_fetch_assoc($res);
			
			session_start();
			
			
			$_SESSION['emailU']=$email;
			$_SESSION['tipo']=$l['tipo_user'];	
			$_SESSION['nomeU']=$l['nome_user'];
			$_SESSION['dataN']=$l['data_de_nascimento'];
			$_SESSION['sexo']=$l['sexo_user'];
			$_SESSION['pass']=$senha;
			
			header("Location:index.php");			
			
		}else {
				
			echo "Erro no login <br/>";
			echo "<a href='entrar.php'>Voltar</a>";
		}
	
	
	
	
	
	
	
	
	mysqli_close($lig);



?>