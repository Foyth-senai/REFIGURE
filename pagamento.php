<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" type="text/css" href="./css/pagamento.css">
</head>
<body>
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
<script src="js/pagamento.js"></script>
</body>
</html>