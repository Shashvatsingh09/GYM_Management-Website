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
 <h1 style="position: absolute;right: 100px;">Name :
  <?php
  foreach($g->result() as $row){
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
        foreach($g->result() as $row){
          print_r($row->name);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        Age : 
        <?php
        foreach($g->result() as $row){
          print_r($row->age);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        Height : 
        <?php
        foreach($g->result() as $row){
          print_r($row->hgt);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        Weight : 
        <?php
        foreach($g->result() as $row){
          print_r($row->wgt);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        Membership : 
        <?php
        foreach($g->result() as $row){
          print_r($row->membership);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
        <h3>
        Password : 
        <?php
        foreach($g->result() as $row){
          print_r($row->psw);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
       <h3>
        Address : 
        <?php
        foreach($g->result() as $row){
          print_r($row->adr);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        City : 
        <?php
        foreach($g->result() as $row){
          print_r($row->city);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        State : 
        <?php
        foreach($g->result() as $row){
          print_r($row->state);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
      </h3>
      <h3>
        Zip : 
        <?php
        foreach($g->result() as $row){
          print_r($row->zip);
        }
        ?><button onclick="change()" style="font-size: 15px;" class="btn">EDIT</button>
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
      <form action="#" method="post">
        <p><input class="w3-input w3-padding-16" type="text" id="NAME" name="NAME" placeholder="Name"></p>
        <p><input class="w3-input w3-padding-16" type="text" id="EMAIL" name="EMAIL" placeholder="Email"></p>
        <p><input class="w3-input w3-padding-16" type="text" id="SUBJECT" name="SUBJECT" placeholder="Subject"></p>
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
    <div id="chngeform"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 450px;right: 100px;"class="changeform">
      <form action="<?=base_url('Welcome/updatedatafromlogin')?>" method="post">
        <div class="container" style="position: absolute;left: 100px;top: 20px;">

          <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
          <i class="fa fa-close" style="position:absolute;left:850px;"></i>
        </div>
      </form>
    </div>
    <script>
      function change(){
        document.getElementById('chngeform').style.display="block";
      }
      function close(){
        document.getElementById('chngeform').style.display="none";
      }
    </script>

    <!-- END PAGE CONTENT -->
  </div>
</body>
</html>
