<?php
	//starta a sess�o
    session_start();
	ob_start();
	//resgata os valores das session em variaveis
	$id_users = isset($_SESSION['id_users']) ? $_SESSION['id_users']: "";	
	$nome_user = isset($_SESSION['nome']) ? $_SESSION['nome']: "";	
	$email_users = isset($_SESSION['email']) ? $_SESSION['email']: "";	
	$pass_users = isset($_SESSION['pass']) ? $_SESSION['pass']: "";	
	$logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";	
	//varificamos e a var logado cont�m o valos (S) OU (N), se conter N quer dizer que a pessoa n�o fez o login corretamente
	//que no caso satisfar� nossa condi��o no if e a pessoa sera redirecionada para a tela de login novamente
	if ($logado == "N" && $id_users == ""){	    
		echo  "<script type='text/javascript'>
					location.href='home.html'
				</script>";	
		exit();
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadê meu pet?</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Editora de Livros RPG da turma TI97">
    <meta name="keywords" content="Primeiro Site, Html, Técnico em informática, largo13, Senac, RPG, Editora">
    <meta name="author" content="Sidney">
    <link rel="shortcut icon" href="img/kdmeupet.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <div id="topo">
        
        
            <div class="logo">
                <img src="img/kdmeupet.jpeg" alt="" height="100%" width="100%">
            </div>
        
            
        <div class="kdmeupet">
            <span>CADÊ MEU PET?</span>
        </div>

        <div class="menu">
            <nav>

                <ul>
                    <a href="logado.php" class="telaAberta"><li>Últimos anúncios</li></a>
                    <a href="postanuncio.php" ><li>Poste seu anúncio</li></a> 
                    <a href="redesocial.php"><li>Rede social</li></a>
                    <a href="postsocial.php"><li>Insira seu post</li></a>
                    <div class="dropdown">
                        <button class="dropbtn">Minha conta</button>
                        <div class="dropdown-content">
                          <a href="meusanuncios.php">Meus Anúncios</a>
                          <a href="meusposts.php">Meus Posts</a>
                        </div>
                      </div>
                        
                    
                </ul>

            </nav>
        </div>
    </div>

    <div class="banner">
        <div class="imagem">
            <img src="img/dogs1.jpg" alt="" width="100%" height="100%">
            <div class="ajude">
             <span >Ajude-nos a encontrar nossos amiguinhos que estão perdidos!</span>   
            </div>
        </div>
    </div>

    <div class="conteudo">
        <div class="fundodoconteudo"> 
            <div class="card">
                <a href="anuncio.php">
                <div class="img-card">
                    <img src="https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg" alt="" width="100%" height="110%">  
                </div>
                </a>
                <div class="cont-card">
                    
                    <div class="cont-card-titulo">
                        NOAH
                        <div class="raca">Raça: Labrador</div>
                        <div class="regiao">Desapareceu em:  Tatuapé, São Paulo - SP</div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img src="https://cdn.pixabay.com/photo/2016/01/05/17/51/maltese-1123016_960_720.jpg" alt="" width="100%" height="110%">  
                </div>
                <div class="cont-card">
                    
                    <div class="cont-card-titulo">
                        KIARA
                        <div class="raca">Raça: Poodle</div>
                        <div class="regiao">Desapareceu em:  Jardim Varginha, São Paulo - SP</div>
                    </div>
                   
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img src="https://cdn.pixabay.com/photo/2012/11/26/13/58/cat-67345_960_720.jpg" alt="" width="100%" height="110%">  
                </div>
                <div class="cont-card">
                    
                    <div class="cont-card-titulo">
                        PITUXO
                        <div class="raca">Raça: Maine Coon</div>
                        <div class="regiao">Desapareceu em:  Grajaú, São Paulo - SP</div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img src="img/lilica.jpeg" alt="" width="100%" height="110%">  
                </div>
                <div class="cont-card">
                    
                    <div class="cont-card-titulo">
                        LILICA
                        <div class="raca">Raça: Vira-Lata</div>
                        <div class="regiao">Desapareceu em:  Embu-Guaçu - SP</div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img src="https://cdn.pixabay.com/photo/2016/09/18/22/41/cat-1679193_960_720.jpg" alt="" width="100%" height="110%">  
                </div>
                <div class="cont-card">
                    
                    <div class="cont-card-titulo">
                        CLAIRE
                        <div class="raca">Raça: Mau Egípicio</div>
                        <div class="regiao">Desapareceu em:  Campinas - SP</div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="img-card">
                    <img src="https://cdn.pixabay.com/photo/2019/07/30/05/53/dog-4372036_960_720.jpg" alt="" width="100%" height="110%">  
                </div>
                <div class="cont-card">
                    
                    <div class="cont-card-titulo">
                        GUTO
                        <div class="raca">Raça: Labrador</div>
                        <div class="regiao">Desapareceu em:  Parelheiros, São Paulo - SP</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</body>
<footer class="rodape2">
            <span class="quem-somos">Quem somos</span>

            <p class= "text1" id="rodape">Alunos da turma TI-97, do curso técnico em informática do Senac Largo Treze, desenvolvendo um projeto para o curso com foco em animais perdidos. 
			Somos nós: Gustavo Moraes, Gustavo Souza, Leonardo Loiola, Ricardo Rodrigues, Vinicius Soares, Yanara Nayane.
			</p>

			<br> <span class="text1">Endereço: Rua Dr. Antônio Bento, 393 - Santo Amaro, São Paulo - SP, 04750-000</span> <br>

			<br> <span class="text1">Nos siga nas redes sociais!</span> <br>

			<br> <a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-instagram"></a>
            
</footer>

</html>