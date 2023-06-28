<?php
session_start();
$logado = $_SESSION["logado"];
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM cadastro WHERE email_cliente = '$logado'");
$resultado = $comando->execute();
$logado = 0;
while ($linhas = $comando->fetch() )
     {
         $logado = $linhas["logado"]; // Nome da coluna XAMPP
     }
     include("conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>Re:Figure</title>
    <link rel="icon" href="imagem/RE FIGURE.png">
    <link rel="stylesheet" type="text/css" href="./css/tela_inicial2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<i class="bi bi-list menu-mobile"></i>

<aside id="aside"> <!--Menu lateral-->
    <section class="profile"> <!--Seção da foto de perfil, nome, e social-links-->
        <img src="./imagem/RE FIGURE.png" alt="Foto refigure"> <!--Foto pessoal-->
        <h1>Re:Figure</h1>
    </section>

    <nav id="navbar" class="nav-menu"> <!--navbar lateral-->
        <ul class="nav flex-column"> <!--Lista em column-->
            <li class="nav-item">
                <a class="nav-link" href="logado.php"><i class="bi bi-house"></i>Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="conta.php"><i class="bi bi-person"></i>Conta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrinho.php"><i class="bi bi-list-check"></i>Carrinho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorias.html"><i class="bi bi-collection"></i>Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="filamento.html"><i class="bi bi-recycle"></i>Filamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="termos.html"><i class="bi bi-newspaper"></i>Termos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suporte.html"><i class="bi bi-question-circle"></i>Suporte</a>
            </li>
        </ul>
    </nav>
</aside>
    
<section id="cabecalho" class="cabecalho alinhamento m-0 p-0">

    <div class="cantologo col-md-4 d-flex justify-content-start align-itens-center text-align-center">

        <img class="logo" id="logo" onclick="Logo1()" src="imagem/RE FIGURE.png">

    </div>
    <div class="nome canto col-md-4">
        <b>Re:Figure <i class="bi bi-tree"></i></b>
    </div>  
    <div class="canto col-md-4 justify-content-end align-itens-center text-align-center">

            <button name="botao" class="btn me-2" onclick="Conta()">
                <p class="paragraph mt-3"> Conta </p>
                <span class="icon-wrapper">
                    <i class="bi bi-person"></i>
                </span>
            </button>
            <button class="btn me-3" name="carrinho" onclick="carrinho()">
                <p class="paragraph mt-3"> Carrinho </p>
                <span class="icon-wrapper">
                    <i class="bi bi-cart2"></i>
                </span>
            </button>
    </div>

</section>

<section id="opcoes" class="opcoes m-0 p-0">

    <div class="alinhamento col-md-3">
        <b onclick="lancamentos()" style="cursor: pointer;">Lançamentos</b>
    </div>
     
    <div class="alinhamento col-md-2">
        <b onclick="categorias()" style="cursor: pointer;">Categorias</b>
    </div>
     
    <div class="alinhamento col-md-2">
        <b onclick="filamento()" style="cursor: pointer;">Filamento</b>
    </div>
     
    <div class="alinhamento col-md-2">
        <b onclick="termos()" style="cursor: pointer;">Termos</b>
    </div>
     
    <div class="alinhamento col-md-3">
        <b onclick="suporte()" style="cursor: pointer;">Suporte</b>
    </div>

</section>

<section id="product">
    <div class="container">
        <div class="row">
            <div class="esquerda col-md-8">
                <div class="reto col-md-3">
                    <div class="reto row">
                        <div class="reto col-md-12 mt-4">
                            <div class="outros1"> <img src="imagem/Urubu_diagonal.png" width="100%"></div>
                        </div>
                        <div class="reto col-md-12 mt-3">
                            <div class="outros2"> <img src="imagem/Urubu_Lateral.png" width="100%"></div>
                        </div>
                        <div class="reto col-md-12 mt-3">
                            <div class="outros3"> <img src="imagem/Urubu_costa.png" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 mt-4 d-flex justify-content-center">
                    <div class="imagemprincipal"><img src="imagem/Urubu Preto e Branco.png" name="img" width="100%"></div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>


    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/tela_inicial.js"></script>
</body>
</html>