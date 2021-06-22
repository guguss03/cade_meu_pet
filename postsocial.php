<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadê meu pet?</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Projeto Integrador">
    <meta name="keywords" content="Cadê meu Pet?">
    <meta name="author" content="Sidney">
    <link rel="shortcut icon" href="img/kdmeupet.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/postsocial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

</head>

<body>
    <div id="topo">
        
        <div class="logo">
            <img src="img/kdmeupet.jpeg" alt="" height="100%" width="88%">

        </div>
        <div class="kdmeupet">
            <span>CADÊ MEU PET?</span>
        </div>

        <div class="menu">
            <nav>

                <ul>
                    <a href="logado.php" ><li>Últimos anúncios</li></a>
                    <a href="postanuncio.php" ><li>Poste seu anúncio</li></a> 
                    <a href="redesocial.php"><li>Rede social</li></a>
                    <a href="postsocial.php"class="telaAberta"><li>Insira seu post</li></a>
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
    
    <div class="conteudo">
        <div class="fundodoconteudo">
            <div class="card">
                <div class="img-card">
                    <img  src="img/upload.jpg" alt="" width="100%" height="90%">
                    <div class="img-pet">Coloque fotos do seu pet!</div>
                </div>
            </div>
            <div class="desc-anuncio">
                <div class="span-desc">
                <span>MOSTRE SEU PET PRA TODO MUNDO!</span>
                </div>
                <form class="form">
                    <input class="inserir" placeholder="Nome do animal" type="text"> 
                    <input class="inserir" placeholder="Raça" type="text">
                    <input class="inserir" placeholder="Região" type="text">
                    <input id="inserir-desc" placeholder="Descrição (Conte-nos mais sobre seu pet!)" type="text">
                </form>
                <div class="botao-post">
                    <input value="Postar" type="submit" class="btn-postar" ></input>
                    <script>
                    alert('PRESTE ATENÇÃO NAS INSTRUÇÕES ABAIXO!\n - Coloque fotos em boa resolução e no modo retrato;\n - Seja breve na descrição.')
                    </script> 
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