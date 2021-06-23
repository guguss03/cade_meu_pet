<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cadê meu pet?</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
	<link rel="shortcut icon" href="img/kdmeupet.jpeg" type="image/x-icon">
</head>
<body background="img/background.jpg">
    <div class="Conteudo" width="100%" heigth="100%">
        <div class="BlocoDeLogin">
            <div class="Dados_do_Usuario">
                <h1>Olá Amante de Pets,<br></h1><h1> Bem vindo de volta!</h1>
				<form name="form_pesquisa" id="form_pesquisa" method="post" action="">
                	<div class="Preencher_dados">
                		<input name="email" type="email" placeholder="Digite seu email..." size="30" title="Username" value=""><br><br>
                		<input name="pass" type="password" placeholder="Digite sua senha..." size="30" title="Password" value=""><br><br>
                	</div>
                
                    
					<input type="submit" name="acao" value="Logar" class="btn-postar"/>

					

				</form>

				<div class="concordo">
				<a href="cadastro.php">NÃO TEM CONTA? CADASTRE-SE, É RAPIDINHO!</a>
				</div>

				<div class="concordo2">
				<a href="recsenha.php">ESQUECI A SENHA!</a>
				</div>

            </div> 
        </div>
    </div>

    <div class="Conteudo2" width="100%" heigth="100%">
        <img src="img/semfundo.jpg" alt="semfundo.jpg" width="100%" height="100%">
    </div>

</div>        
</body>
</html>
<?php
$action = isset($_POST['acao']) ? trim($_POST['acao']) : '';
	if(isset($action) && $action != ""){ 
		
		switch($action){
			case 'Logar':
				require_once('class/Autentica.class.php');
				$Autentica = new Autentica();
				$Autentica->email	= $_POST['email'];
				$Autentica->pass	= $_POST['pass'];
				if($Autentica->Validar_Usuario()){
				   echo  "<script type='text/javascript'>
							location.href='logado.php'
						</script>";
				  }else{
				   echo  "<script type='text/javascript'>
							alert('ATENÇÃO, Login ou Senha inválidos!');location.href='index.php'
						</script>";
				  }
			break;
		}	
	}
?>