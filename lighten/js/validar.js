function ForcaSenha(){
	
	var senha = document.getElementById('senhaforca').value;
	var forca = 0;
	
	if((senha.length >= 4) && (senha.length <= 7)){
		
		forca += 10;
	
	}else if(senha.length > 7){
		forca += 25;	
	}
	
	if((senha.length >= 5) && (senha.match(/[a-z]+/))){
		forca += 10;
		
	}
	
	if((senha.length >= 6) && (senha.match(/[A-Z]+/))){
		forca += 20;
		
	}
	
	if((senha.length >= 7) && (senha.match(/[@&$#*%]/))){
		forca += 25;
		
	}
	
	mostraForca(forca);
}

function mostraForca(forca){
	
	document.getElementById("iForcaSenha").innerHTML = "Para uma senha segura tem que apresentar letras minúsculas, maiúsculas e caracteres especiais (@&$#*%).";
	if(forca < 30){
		
		document.getElementById("erroForcaSenha").innerHTML = "<font size="6"><span style='color: #ff0000'>Fraca</span></font>";
		
		
	} else if((forca >= 30) && (forca < 50)){
		
		document.getElementById("erroForcaSenha").innerHTML = "<span style='color: #ffd700'>Média</span>";
		
		
	} else if((forca >= 50) && (forca < 70)){
		
		document.getElementById("erroForcaSenha").innerHTML = "<span style='color: #7fff00'>Forte</span>";
		
		
	}else if((forca >= 70) && (forca < 100)){
		
		document.getElementById("erroForcaSenha").innerHTML = "<font size="6"><span style='color: #008000'>Excelente</span></font>";
		
		
	}
	
}

				
 
