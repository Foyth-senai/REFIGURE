<?php
session_start();
include("conecta.php");
$logado = $_SESSION["logado"];
include("conecta.php");
$comando = $pdo->prepare("SELECT * FROM cadastro WHERE email_cliente = '$logado'");
$resultado = $comando->execute();
$logado = 0; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>Re:Figure</title>
    <link rel="stylesheet" type="text/css" href="css/pagamento.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="imagem/RE FIGURE.png">
</head>
<body>
    
<section id="cabecalho" class="cabecalho alinhamento m-0 p-0">

  <div class="cantologo col-md-4 d-flex justify-content-start align-itens-center text-align-center">

      <img style="cursor: pointer;" class="logo" id="logo" onclick="Logo1()" src="imagem/RE FIGURE.png">

  </div>
  <div class="nome canto col-md-4">
      <b>Re:Figure <i class="bi bi-tree"></i></b>
  </div>  
  <div class="canto col-md-4 justify-content-end align-itens-center text-align-center">

  </div>

</section>

  <section id="opcoes" class="opcoes m-0 p-0">

    <div class="alinhamento col-md-12">
      <b onclick="Logo1()" style="cursor: pointer;">Voltar</b>
    </div>

</section>

<section>
<div class="iphoneWrapper">
  <div class="iphoneInterface"></div>
  <div class="browserViewport">

    <div class="screenPayment">

      <div class="header">
        <div class="header-logo">DAILY UI</div>
        <div class="header-nav"></div>
      </div>

      <div class="pager">
        <div class="pager-nav type-S"><span class="pager-link"></span>3 / 4<span class="pager-link pager-link-isNext"></span></div>
        <h1 class="pager-headline type-XL">Payment</h1>
      </div>

      <div class="payment">
        <h2 class="payment-headline type-L">Payment method</h2>
        <div class="payment-tab">
          <div class="payment-radioGroup">
            <input id="paypal" name="cardType" type="radio" value="paypal">
            <label for="paypal">PayPal</label>
          </div>
          <p>You will be redirected to PayPal to complete your purchase securely.</p>
        </div>
        <div class="payment-tab payment-tab-isActive">
          <div class="payment-radioGroup">
            <input checked type="radio" name="cardType" id="creditCart" value="creditCard">
            <label for="creditCart">Add credit card</label>
          </div>
          <img class="payment-cardimg"
               src="//my-assets.netlify.com/codepen/dailyui-002/img_cards.svg">
          <div class="textInputGroup">
            <label for="nameOnCard">Name on card</label>
            <input id="nameOnCard"
                   name="nameOnCard"
                   required
                   type="text">
          </div>
          <div class="textInputGroup">
            <label for="cardNumber">Card number</label>
            <input id="cardNumber" name="cardNumber" placeholder="1234 - 5678 - 9876 - 5432" required type="text">
          </div>
          <div class="textInputGroup textInputGroup-halfWidth">
            <label for="expirationDate">Expiration Date</label>
            <input id="expirationDate" name="expirationDate" placeholder="MM / YY" required type="text">
          </div>
          <div class="textInputGroup textInputGroup-halfWidthRight">
            <label for="cvc">CVC</label>
            <input id="cvc" name="cvc" placeholder="XXX" required type="text">
          </div>
        </div>
      </div>

      <div class="billing">
        <h2 class="type-L">Billing address</h2>
        <div class="checkboxGroup">
          <input checked id="billingSameAsShipping" name="billingSameAsShipping" type="checkbox" value="billingSameAsShipping">
          <label for="billingSameAsShipping">My billing address is my shipping address.</label>
        </div>
      </div>

      <input class="buttonCheckout buttonCheckout-web" type="submit" value="Go to checkout">

    </div>

    <div class="screenEndofprototype">
      <div class="endMessage"></div>
    </div>

  </div>

</div>
<input class="buttonCheckout buttonCheckout-mobile" type="submit" value="Go to checkout">
</section>

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
                 $bairro = $linhas["bairro"]; // Nome da coluna XAMPP
                 $admin = $linhas["admin"]; // Nome da coluna XAMPP

             }?>

<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/pagamento.js"></script>
</body>
</html>