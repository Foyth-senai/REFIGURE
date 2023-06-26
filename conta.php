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
    <title>Re:Figure</title>
    <link rel="stylesheet" type="text/css" href="css/conta.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
    
    <div class="cabecalho">
        <div class="divvoltar"><a href="logado.php"><img src="imagem/botaovoltar.png" class="botaovoltar"></div></a>
        <a href="logado.php">
        <img class="logo" src="imagem/RE FIGURE.png"></a>
        <div class="invisivel"></div>
    </div>

    <?php
    $comando = $pdo->prepare("SELECT * FROM cadastro where logado = 1");
    $resultado = $comando->execute();
        while ($linhas = $comando->fetch() )
             {
                 $nome = $linhas["nome_cliente"]; // Nome da coluna XAMPP
                 $cpf = $linhas["cpf_cliente"]; // Nome da coluna XAMPP
                 $email = $linhas["email_cliente"]; // Nome da coluna XAMPP
                 $celular = $linhas["celular_cliente"]; // Nome da coluna XAMPP
                 $rua = $linhas["rua"]; // Nome da coluna XAMPP
                 $numero = $linhas["numero_local"]; // Nome da coluna XAMPP
                 $complementos = $linhas["complementos"]; // Nome da coluna XAMPP
                 $estado = $linhas["estado"]; // Nome da coluna XAMPP
                 $cidade = $linhas["cidade"]; // Nome da coluna XAMPP
                 $pais = $linhas["pais"]; // Nome da coluna XAMPP

             }?>

<div class="informacao">
    <form class="area">
        <div class="minhaconta"><h1 ><ion-icon class="icone" name="person-circle-outline"></ion-icon><b>Minha Conta</b></h1></div>
        <div class="informacoes">
        <h2><b>Informações de Acesso</b></h2>
        <h3><?php echo($nome); ?></h3>
        <h4><?php echo($email); ?></h4>
        </div>
        <div class="botoesalterar">
        <button class="btn1"><b>Editar</b></button>
        <br>
        <button class="btn1"><b>Mudar Senha</b></button>
        </div>
        <br> <br> <br>
        <div class="enderecotitulo"><ion-icon class="icone" name="location-outline"></ion-icon><b>Endereços Cadastrados</b><button class="btn2"><b>Gerenciar Endereços</b></button></div>
        <br>
        <div class="enderecos">
            <h1><b>Endereço de Cobrança Padrão</b></h1>
            <h2><?php echo($nome); ?></h2>
            <h2>(<?php echo($rua); ?>, <?php echo($numero); ?>, <?php echo($complementos); ?>)</h2>
            <h2>(<?php echo($cidade); ?>, <?php echo($estado); ?>, <?php echo($pais); ?>)</h2>
            <h2>Tel: <?php echo($celular); ?></h2>
        </div>
        <br>
        <div class="meuspedidostitulo"><ion-icon class="icone" name="list-outline"></ion-icon><b>Meus Pedidos</b></div>
        <br>
        <table class="tabela">
        <tr>
            <td><b>#</b></td>
            <td><b>Data</b></td>
            <td><b>Método</b></td>
            <td><b>Valor Total</b></td>   
            <td><b>Status</b></td>
        </tr>

        <tr>
            <td>(id)</td>
            <td>(Data e Hora)</td>
            <td>(Método de Pagamento)</td>
            <td>(R$ 000,00)</td>   
            <td>Enviado</td>
        </tr>
        <tr>
            <td>(id)</td>
            <td>(Data e Hora)</td>
            <td>(Método de Pagamento)</td>
            <td>(R$ 000,00)</td>   
            <td>Entrege</td>
        </tr>
        <tr>
            <td>(id)</td>
            <td>(Data e Hora)</td>
            <td>(Método de Pagamento)</td>
            <td>(R$ 000,00)</td>   
            <td>Cancelado</td>
        </tr>
    </table>
    <div class="invisivel"></div>
    </form>
</div>
<div class="rodape">
    <img class="logo_rodape" src="imagem/RE FIGURE.png">
    <div class="quadradosuporte">
        <div class="div45"><ion-icon class="icone2" name="time-outline"></ion-icon><span style="color:#FFFFFF"><b>Atendimento Loja Virtual</b><br> Segunda a sexta 8h às 12h e das14h às 18h</span></div>
        <div class="div24"><ion-icon class="icone2" name="call-outline"></ion-icon><span style="color:#FFFFFF"><b>(47) 9 8823-0585</b></span></div>
        <div class="div30"><ion-icon class="icone2" name="mail-outline"></ion-icon><span style="color:#FFFFFF"><b>refigurecontato@gmail.com</b></span></div>
    </div>
    <ul>
      <a href="filamento.html"><li>Filamento</li></a>
      <a href="lancamentos.html"><li>Lançamentos</li></a>
      <a href="termos.html"><li>Termos</li></a>
    </ul>
    <ul>
        <li>Desenvolvedores:</li>
        <li>Cauê Marchi Foyth</li>
        <li>Jônatas Rocha dos Santos</li>
        <li>Lucas Giovani Fruck</li>
      </ul>
      <div class="contatos">
        <ul>
          <a href="https://instagram.com/caue_foyth" target="_blank"><li><ion-icon name="logo-instagram"></ion-icon>Cauê</li></a>
          <a href="https://instagram.com/arcaro_jonatas" target="_blank"><li><ion-icon name="logo-instagram"></ion-icon>Jônatas</li></a>
          <a href="https://instagram.com/lucasgiovanifruck" target="_blank"><li><ion-icon name="logo-instagram"></ion-icon>Lucas</li></a>
        
        
      </ul>
    </div>
    </div> 

</body>
</html>