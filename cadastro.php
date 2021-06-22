<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Cadê meu pet?</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="img/kdmeupet.jpeg" type="image/x-icon">
</head>
<body background="img/background.jpg">
    <div class="Conteudo" width="100%" heigth="100%">
        <div class="BlocoDeLogin">
            <div class="Dados_do_Usuario">
                <h1>Olá Amante de Pets,<br></h1><h1 style="margin-left: 10px;">Faça seu cadastro!</h1>
                <div class="Preencher_dados">
                <form method='POST' action='adicionar_action.php'>
                    <input type="text" placeholder="Digite seu nome..." size="30" name='name'><br><br>
                    <input type="email" placeholder="Digite seu email..." size="30" name='email'><br><br>
                    <input type="password" placeholder="Digite sua senha..."size="30" name='senha'><br><br>
                    </div>

                    <div class="botao"><input type="checkbox">
                    <label for="vehicle1"> Eu concordo com os termos de uso</label><br></div>
                
                    <input type="submit" name="acao" value="Entrar" class="btn-postar"/>
                
            </div>
                </form>
        </div>

    </div> 

    <div class="Conteudo2" width="100%" heigth="100%">
        <img src="img/semfundo.jpg" alt="semfundo.jpg" width="100%" height="100%">
    </div>
</body>
</html>