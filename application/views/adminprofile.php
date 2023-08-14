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
<style>
  td{
    border: 0.1px  solid white;
    color: white;
    padding: 0.01px;
    font-size: 13.5px;
  }
  table{
    border-spacing: 0.1px;
    position: relative;
    top: 80px;
  }
</style>
<body class="w3-black">
 <h1 style="position: absolute;right: 100px;">Hello Admin :
  <?php
  foreach($b->result() as $row){
    print_r($row->name);
  }  ?>
</h1>
<a href="<?=base_url("Welcome/logout")?>" style=" position: absolute;right: 5px;top:70px;"><button class="w3-button w3-white w3-padding-large w3-hover-black">LogOut</button></a>

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <a href="#myprofile" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-user w3-xxlarge" style="font-size:48px;color:red" ></i>
    <p>My Profile</p>
  </a>
  <a href="#userdata" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>User Data</p>
  </a>
  <a href="#edit" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-edit w3-xxlarge" aria-hidden="true"></i>
    <p>Edit</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>
</nav>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">GYM TOWN</h1>
      <p>UNLEASH THE BEAST INSIDE YOU.</p>
    </header>
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="myprofile">
      <h2 class="w3-text-light-grey">My Profile</h2>
      <hr style="width:200px" class="w3-opacity">
      <h2>Name :
        <?php
        foreach($b->result() as $row){
          print_r($row->name);
        }  ?><button style="font-size: 15px;" onclick="changeadminname()" class="btn">EDIT</button>

      </h2>
      <h2>Password :
        <?php
        foreach($b->result() as $row){
          print_r($row->psw);
        }  ?><button style="font-size: 15px;" onclick="changeadminpsw()" class="btn">EDIT</button>

      </h2>
    </div>

    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="userdata">
      <h2 class="w3-text-light-grey">User Data
        <button style="position: absolute;right: 20px;">DOWNLOAD EXCEL FILE</button></h2>
        <hr style="width:200px" class="w3-opacity">
        
      </div>
      <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="edit">
        <h2 class="w3-text-light-grey">Edit Components</h2>
        <hr style="width:200px" class="w3-opacity">
        <h3>ABOUT
          <button style="font-size: 15px;" onclick="changeabout()" class="btn">EDIT</button></h3>
          <h3>franchise
            <button style="font-size: 15px;" onclick="changefranchise()" class="btn">EDIT</button></h3>
            <h3>machines
              <button style="font-size: 15px;" onclick="changemachines()" class="btn">EDIT</button></h3>
              <h3>upcoming_centres
                <button style="font-size: 15px;" onclick="changeupcomingcentres()" class="btn">EDIT</button></h3>
                <h3>happy_clients
                  <button style="font-size: 15px;" onclick="changehappyclients()" class="btn">EDIT</button></h3>
                  <h3>price1
                    <button style="font-size: 15px;" onclick="changeprice1()" class="btn">EDIT</button></h3>
                    <h3>price2
                      <button style="font-size: 15px;" onclick="changeprice2()" class="btn">EDIT</button></h3>
                    </div>
                    <div id="chngeformabout"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngeabout')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangeabout()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changeabout(){
                        var y = document.getElementById('chngeformabout');
                        y.style.display="block";
                      }
                      function closechangeabout(){
                        var x = document.getElementById('chngeformabout');
                        x.style.display="none";
                      }
                    </script>
                    <div id="chngeformmachines"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngemachines')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangemachines()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changemachines(){
                        var y = document.getElementById('chngeformmachines');
                        y.style.display="block";
                      }
                      function closechangemachines(){
                        var x = document.getElementById('chngeformmachines');
                        x.style.display="none";
                      }
                    </script>
                    <div id="chngeformupcomingcentres"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngeupcomingcentres')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangeupcomingcentres()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changeupcomingcentres(){
                        var y = document.getElementById('chngeformupcomingcentres');
                        y.style.display="block";
                      }
                      function closechangeupcomingcentres(){
                        var x = document.getElementById('chngeformupcomingcentres');
                        x.style.display="none";
                      }
                    </script>
                    <div id="chngeformfranchise"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngefranchise')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangefranchise()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changefranchise(){
                        var y = document.getElementById('chngeformfranchise');
                        y.style.display="block";
                      }
                      function closechangefranchise(){
                        var x = document.getElementById('chngeformfranchise');
                        x.style.display="none";
                      }
                    </script>
                    <div id="chngeformhappyclients"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngehappyclients')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangehappyclients()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changehappyclients(){
                        var y = document.getElementById('chngeformhappyclients');
                        y.style.display="block";
                      }
                      function closechangehappyclients(){
                        var x = document.getElementById('chngeformhappyclients');
                        x.style.display="none";
                      }
                    </script>
                    <div id="chngeformprice1"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top: 1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngeprice1')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangeprice1()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changeprice1(){
                        var y = document.getElementById('chngeformprice1');
                        y.style.display="block";
                      }
                      function closechangeprice1(){
                        var x = document.getElementById('chngeformprice1');
                        x.style.display="none";
                      }
                    </script>
                    <div id="chngeformprice2"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top:1000px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/chngeprice2')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="update" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangeprice2()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changeprice2(){
                        var y = document.getElementById('chngeformprice2');
                        y.style.display="block";
                      }
                      function closechangeprice2(){
                        var x = document.getElementById('chngeformprice2');
                        x.style.display="none";
                      }
                    </script>
                    <div id="changeformadminname"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top:400px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/updateadminname')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangename()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changeadminname(){
                        var y = document.getElementById('changeformadminname');
                        y.style.display="block";
                      }
                      function closechangeadminname(){
                        var x = document.getElementById('changeformadminname');
                        x.style.display="none";
                      }
                    </script>
                     <div id="changeformadminpsw"style="display:none;background-color: black;height: 100px;width: 1000px;border: 1px solid white;position: absolute;top:400px;right: 100px;"class="changeform">
                      <form action="<?=base_url('Welcome/updateadminpsw')?>" method="post">
                        <div class="container" style="position: absolute;left: 100px;top: 20px;">

                          <input type="text" placeholder="Update Detail" name="name" id="name"style="width: 500px;position: absolute;left: 80px;">
                          <button  type="submit" style="position: absolute;left: 670px;">Update</button>
                        </div>
                      </form>
                      <button onclick="closechangeadminpsw()" style="position:absolute;left:930px;top:10px;" ><i class="fa fa-close"></i></button>
                    </div>
                    <script>
                      function changeadminpsw(){
                        var y = document.getElementById('changeformadminpsw');
                        y.style.display="block";
                      }
                      function closechangeadminpsw(){
                        var x = document.getElementById('changeformadminpsw');
                        x.style.display="none";
                      }
                    </script>
                    <div id="contact" style="margin-left:50px;">
                      <h2 class="w3-text-light-grey">Send Email</h2>
                      <hr style="width:200px" class="w3-opacity">
                      <h3 class="w3-text-light-grey">*type all@gmail.com to send email to all users</h3>
                      <form action="data.php" method="post">
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
                    </div>
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

                  <!-- END PAGE CONTENT -->
                </div>
              </body>
              </html>
