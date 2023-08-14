<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="<?=base_url("assets/style3.css")?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="<?=base_url("Welcome/purchase")?>" method="post">
        <div class="row">
          <div class="col-50">
            <h3>Billing Details</h3>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="adr" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <h3>CHOOSE MEMBERSHIP - </h3>
            <li class="options">
              <label for="html">BASIC</label><br>
              <input type="radio" id="html" name="membership" value="HTML">
              <label for="css">PREMIUM</label><br>
              <input type="radio" id="css" name="membership" value="CSS">
            </li>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnumb" >
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>
        </div>
        <button type="submit">PAY</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>