<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url("assets/style.css")?>">
  <title>GYM TOWN</title>
</head>
<body class="w3-black">
 <h1 style="position: absolute;right: 100px;">
  HELLO 
  <?php
  foreach($i->result() as $row){
    print_r($row->name);
  }
  ?>
!</h1>
<a href="<?=base_url("Welcome/logout")?>" style=" position: absolute;right: 5px;top:70px;"><button class="w3-button w3-white w3-padding-large w3-hover-black">LogOut</button></a>

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="<?=base_url("assets/gym logo.jpg")?>" style="width:100%">
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#membership" class="w3-bar-item w3-button" style="width:25% !important">MEMBERSHIP</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">GYM TOWN</h1>
      <p>UNLEASH THE BEAST INSIDE YOU.</p>
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
      <h2 class="w3-text-light-grey">My Profile</h2>
      <hr style="width:200px" class="w3-opacity">
      <h3>Name : 
        <?php
        foreach($i->result() as $row){
          print_r($row->name);
        }
        ?>
        <button onclick="changename()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>Password : 
        <?php
        foreach($i->result() as $row){
          print_r($row->psw);
        }
        ?>
        <button onclick="changepsw()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
       <h3>Email : 
        <?php
        foreach($i->result() as $row){
          print_r($row->email);
        }
        ?>
        <button onclick="changeemail()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        Age : 
        <?php
        foreach($i->result() as $row){
          print_r($row->age);
        }
        ?>
        <button style="font-size: 15px;" onclick="changeage()" class="btn">EDIT</button>
      </h3>
      <h3>
        Height : 
        <?php
        foreach($i->result() as $row){
          print_r($row->hgt);
        }
        ?>
        <button style="font-size: 15px;" onclick="changehgt()" class="btn">EDIT</button>
      </h3>
      <h3>
        Weight : 
        <?php
        foreach($i->result() as $row){
          print_r($row->wgt);
        }
        ?>
        <button style="font-size: 15px;" onclick="changewgt()" class="btn">EDIT</button>
      </h3>
      <h3>
        Address : 
        <?php
        foreach($i->result() as $row){
          print_r($row->adr);
        }
      ?><button onclick="changeadr()" style="font-size: 15px;" class="btn">EDIT</button>
    </h3>
    <h3>
      City : 
      <?php
      foreach($i->result() as $row){
        print_r($row->city);
      }
    ?><button onclick="changecity()" style="font-size: 15px;" class="btn">EDIT</button>
  </h3>
  <h3>
    State : 
    <?php
    foreach($i->result() as $row){
      print_r($row->state);
    }
  ?><button onclick="changestate()" style="font-size: 15px;" class="btn">EDIT</button>
</h3>
<h3>
  Zip : 
  <?php
  foreach($i->result() as $row){
    print_r($row->zip);
  }
?><button onclick="changezip()" style="font-size: 15px;" class="btn">EDIT</button>
</h3>
</div>


<!-- Contact Section -->
<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
  <h2 class="w3-text-light-grey">Contact Us</h2>
  <hr style="width:200px" class="w3-opacity">

  <div class="w3-section">
    <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Jaipur,Rajasthan</p>
    <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +91 9871761025</p>
    <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: yash.bhambhani02gmail.com</p>
  </div><br>
  <p>Let's get in touch. Send us a message:</p>
  <form action="<?=base_url("Welcome/contact2")?>" method="post">
    <p><input class="w3-input w3-padding-16" type="text" id="MESSAGE" name="msg" placeholder="Message"></p>
    <p>
      <button class="w3-button w3-light-grey w3-padding-large" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </p>
  </form>
  <!-- End Contact Section -->
</div>

<!-- Footer -->
<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <!-- End footer -->
</footer>
<div id="chngeformname"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatename')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangename()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changename(){
    var y = document.getElementById('chngeformname');
    y.style.display="block";
  }
  function closechangename(){
    var x = document.getElementById('chngeformname');
    x.style.display="none";
  }
</script>
<div id="chngeformage"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updateage')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangeage()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changeage(){
    var y = document.getElementById('chngeformage');
    y.style.display="block";
  }
  function closechangeage(){
    var x = document.getElementById('chngeformage');
    x.style.display="none";
  }
</script>
<div id="chngeformhgt"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatehgt')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangeage()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changehgt(){
    var y = document.getElementById('chngeformhgt');
    y.style.display="block";
  }
  function closechangehgt(){
    var x = document.getElementById('chngeformhgt');
    x.style.display="none";
  }
</script>
<div id="chngeformwgt"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatewgt')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangewgt()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changewgt(){
    var y = document.getElementById('chngeformwgt');
    y.style.display="block";
  }
  function closechangewgt(){
    var x = document.getElementById('chngeformwgt');
    x.style.display="none";
  }
</script>
<div id="chngeformadr"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updateadr')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangeadr()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changeadr(){
    var y = document.getElementById('chngeformadr');
    y.style.display="block";
  }
  function closechangeadr(){
    var x = document.getElementById('chngeformadr');
    x.style.display="none";
  }
</script>
<div id="chngeformcity"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatecity')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangecity()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changecity(){
    var y = document.getElementById('chngeformcity');
    y.style.display="block";
  }
  function closechangecity(){
    var x = document.getElementById('chngeformcity');
    x.style.display="none";
  }
</script>
<div id="chngeformstate"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatestate')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangestate()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changestate(){
    var y = document.getElementById('chngeformstate');
    y.style.display="block";
  }
  function closechangestate(){
    var x = document.getElementById('chngeformstate');
    x.style.display="none";
  }
</script>
<div id="chngeformzip"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatezip')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangezip()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changezip(){
    var y = document.getElementById('chngeformzip');
    y.style.display="block";
  }
  function closechangezip(){
    var x = document.getElementById('chngeformzip');
    x.style.display="none";
  }
</script>
<div id="chngeformpsw"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
  <form action="<?=base_url('Welcome/updatepsw')?>" method="post">
    <div class="container" style="position: absolute;left: 100px;top: 20px;">

      <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
      <button  type="submit" style="position: absolute;left: 670px;">Update</button>
    </div>
  </form>
  <button onclick="closechangepsw()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
</div>
<script>
  function changepsw(){
    var y = document.getElementById('chngeformpsw');
    y.style.display="block";
  }
  function closechangepsw(){
    var x = document.getElementById('chngeformpsw');
    x.style.display="none";
  }
</script>
</body>
</html>
