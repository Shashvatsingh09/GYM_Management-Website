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
  <h1 style="position: absolute;right: 100px;">HI
    <?php
    $var=$this->session->userdata('usersession');
    print_r($var['name']);
    ?>
  !</h1>
  <a href="<?=base_url("Welcome/logout")?>" style=" position: absolute;right: 5px;top:70px;"><button class="w3-button w3-white w3-padding-large w3-hover-black">LogOut</button></a>

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="<?=base_url("assets/gym logo.jpg")?>" style="width:100%">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#membership" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user-plus w3-xlarge" aria-hidden="true"></i>
      <p>MEMBERSHIP</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
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
        <h2 class="w3-text-light-grey">ABOUT</h2>
        <hr style="width:200px" class="w3-opacity">
        <p><?php 
        foreach($p->result() as $comp){
          print_r($comp->about);
        }
        ?>
      </p>
      <h3 class="w3-padding-16 w3-text-light-grey">FEATURES</h3>
      <hr style="width:200px" class="w3-opacity">
      <p class="w3-wide">EQUIPMENTS</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:100%"></div>
      </div>
      <p class="w3-wide">TRAINERS</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:100%"></div>
      </div>
      <p class="w3-wide">WASHROOMS</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:100%"></div>
      </div><br>

      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge"><?php 
          foreach($p->result() as $comp){
            print_r($comp->franchise);
          }
        ?>+</span><br>
        Franchise
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge"><?php 
        foreach($p->result() as $comp){
          print_r($comp->machines);
        }
      ?>+</span><br>
      Machines
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge"><?php 
      foreach($p->result() as $comp){
        print_r($comp->upcoming_centres);
      }
    ?>+</span><br>
    Upcoming Centres
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge"><?php 
    foreach($p->result() as $comp){
      print_r($comp->happy_clients);
    }
  ?>+</span><br>
  Happy Clients
</div>
</div>
<!-- Grid for pricing tables -->
<h3 class="w3-padding-16 w3-text-light-grey">Membership</h3>
<hr style="width:200px" class="w3-opacity">
<div class="w3-row-padding" style="margin:0 -16px" id="membership">
  <div class="w3-half w3-margin-bottom">
    <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
      <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
      <li class="w3-padding-16">24/7 Gym Access</li>
      <li class="w3-padding-16">Personalized Diet</li>

      <li class="w3-padding-16">
        <h2><?php 
        foreach($p->result() as $comp){
          print_r($comp->price1);
        }
      ?>/-</h2>
      <span class="w3-opacity">per month</span>
    </li>
    <li class="w3-light-grey w3-padding-24">
      <a href="<?=base_url('Welcome/payment')?>"><button class="w3-button w3-white w3-padding-large w3-hover-black">Buy Now</button></a>
    </li>
  </ul>
</div>

<div class="w3-half">
  <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
    <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
    <li class="w3-padding-16">24/7 Gym Access</li>
    <li class="w3-padding-16">Personalized Diet</li>
    <li class="w3-padding-16">Personal Trainer</li>
    <li class="w3-padding-16">Free Muscle Gainers</li>
    <li class="w3-padding-16">
      <h2><?php 
      foreach($p->result() as $comp){
        print_r($comp->price2);
      }
    ?>/-</h2>
    <span class="w3-opacity">per month</span>
  </li>
  <li class="w3-light-grey w3-padding-24">
    <a href="<?=base_url("Welcome/payment")?>"><button class="w3-button w3-white w3-padding-large w3-hover-black">Buy Now</button></a>
  </li>
</ul>
</div>
<!-- End Grid/Pricing tables -->
</div>
</div>
<div id="#photos">

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
    <p><input class="w3-input w3-padding-16" type="text" id="MESSAGE" name="MESSAGE" placeholder="Message"></p>
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
<script href="action.js"></script>

<!-- END PAGE CONTENT -->
</div>
</body>
</html>
