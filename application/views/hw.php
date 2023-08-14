<!DOCTYPE html>
<html>
<head>
<title>MiniProject</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="logo.png" style="width:100%";  class="w3-round"><br><br>
    <h4><b>MENU</b></h4>
    
  </div>
  <div class="w3-bar-block">
    <a href="a.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
    <a href="a.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="a.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity" id="social"></i>
    <i class="fa fa-instagram w3-hover-opacity" id="social"></i>
    <i class="fa fa-snapchat w3-hover-opacity" id="social"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" id="social"></i>
    <i class="fa fa-twitter w3-hover-opacity" id="social"></i>
    <i class="fa fa-linkedin w3-hover-opacity" id="social"></i>
    <style>
        #social{
            margin-right: 24px;
        }
    </style>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left: 23%;margin-right: 2%;">
  <!-- Header -->
  <div class="container" style="background-color: white; padding: 0 3%;">
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="container">
    <h1 style="font-size: 100px; font-family: Georgia, 'Times New Roman', Times, serif;"><b>BEAST PHARM</b></h1>
     <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <a href="a.html"><button class="w3-button w3-black">ALL</button></a>
      <a href="wp.html"><button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>WHEY PROTEINS</button></a>
      <a href="hw.html"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-heart w3-margin-right"></i>HEALTH AND WELLNESS</button></a>
      <a href="bs.html"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>BEST SELLERS</button></a>
    </div> 
    </div>
  </header>
  <br>


        <script src="javasciptminiproj.js"></script>
</div>
<br>
  <!-- First Photo Grid-->
<div class="container"> 
  <div class="card-group">
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,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MpsMzi51r2tdtxx0Wu3jBrm5Hgdb25LWszfZPq7VSdNqbhuXOwecyTSz14nke5zgyONzLkXJNze5Wxwaaio8RoaqN1S6kpa+mqHb1se/LYzctysOUnhzCrbSbah3DmFsaKaNjJM7g0l/B3dxVdRK/Xta6+q2dbh+JU+GPxJ8+IYjT1shrI42RsZFvCGMLHcs3VqoGD4n+C6xsshd4LK3dVbR9k6CS35PFax1RT6fKNWKSWJzXWeCTpZY5uPTNjnFbqVvut5xd11stmi5a5haC0tNwQRcEFRatkNZT1FNPE10U7CxwcASOpzL8COSq+zON0zqQ0NbURwyUYaIJJ5ABLC4mzbu5t93ct9+EcJ/lCiudP4+P9q/K8nxubiciYpE+p9PpsWTFlx7tKDiFPJQxthcXPZu27uQ6l4a21z29apWLSkupdfrS/cuoVVRs/W0fg02JUIBaCx4njLo3gaEfsXK8Yp6mKpZAMs+5c8GSmcJYnXAIc17dNR6l+icLkWy0iLx7eFmpFbTp0PYo/jFJrxpZj7AuhrnGxD/AMbo2cxTThwPEHKNF0fVeg5xE1TVARNU1QETVNUBE1TVARNU1QEREBERAREQEREBERAVU22lMVDQ8bOqX3PIWjJVrVS29pJJsDdVRNc5+HytneG3PyLvEecoFzbQ+tByisqLvdqOJWtdLfmF4nlu469vFRHOOqCQZO5eC/jwUcvPavGe6CTnTMoufvTP3oJWZfc6iZ+9fc/egk50zntUbOe1M57UEneL6JNVFzlfc6CcHt5kelZmPZpw9S1zXrI15CTESdNsyUADh7FnbONLexalsp61mY93p6uvsTUR0bXrYmozbQ0Udx40FZ36RErra5R0a4fLUYlXYs+N3g1FAaSmkOjXVUtjJlPPK3Q/nLq6AiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgL45rXAtcAWuBDg4XBB0IIK+og5jtD0Y7+aWq2fqIYBI4udQ1N2wMNtdxIwEgdhB48QNFQMT2U2twlhkrsLnbCA28tO5lRGC4XsTESe/RfomWGGdhZKwObxsSR7lpqvZHZauv4TQF1xY5amqZ8EgQfnFxI0PHhbhr6V44f4hd2l6Lth5HEsgrob8oauQj/ahyjv6J9kHA5KnGGE9VTCQPXEg4jf2pddjk6IsEJO7xfE2jkHtp329TQsR6IMP+rjlYO+mhP9pByDVfbldeHRBQc8cqz3UsI/tJ+9Bh38uVn+rQf7yDkPpXxdf/egw7+W6z/Vof8AeQ9EGHW8XHKwHtpoSPUHBByC6+j++q66OiCg547V+iliH9pe29EGE/XxrECPyYoG++6DkQ9K9tJuP8V2WPol2VaBva3GJP8A34Gg+gRLOzor2Ka5pcMSktyfVgA9+RgPtQcow7BsdxRxGHYdV1OUtD3RsDY25jYXdIQFdMG6NMbqZA/G5Y6Cma4h0FNIyerlA6pGgxtB69T2BXik2E2No8phw+TMPrPq6tx/rLexb6moaKkbkp4gxt72zPdr1+MSg+UFBQ4ZSU9DRQshpoG5Y2M9ZLjxJPElSkRAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB9REQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH//2Q==" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>MuscleBlaze Fish Oil (1000 mg),<br> 90 capsules</b></p>
        <p><b><i>Rs 570</i></b></p>
        <p>MuscleBlaze Fish Oil 1000mg is now India's first & only certified Fish Oil for Purity & Accuracy by the reputed lab Labdoor- USA, keeping up with our commitment to provide the highest quality supplement</p>
        <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP.ZXNPKGVlIbGUafdOxG278wHaHg?w=217&h=220&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Norway" style="width:80%;" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>HealthKart HK Vitals Multivitamin,<br>90 tablets</b></p>
        <p><b><i>Rs 440</i></b></p>
        <p>HealthKart Multivitamin Is A Scientifically Formulated & Clinically Studied Product. <br>
          It May Help In Improving Focus, Concentration & Alertness
          It Comes Fortified With 9 Essential Amino Acids Which Body Cannot Synthesize On Their Own</p>
          <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,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" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>GNC Milk Thistle 250 mg,<br> 90 capsules</b></p> 
        <p><b><i>Rs 1100</i></b></p>
        <p>An Effective Herbal Supplement to protect your liver <br>
          Provides consistent amount of active component from Milk Thistle seed extract i.e. Silymarin <br>
          Regulates already damaged liver tissues and stimulates the production of new liver cells</p>
        <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
  </div>
  <!-- Second Photo Grid-->
  <div class="card-group"> 
  <div class="card text-center justify-content-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUyjaDTi85j07OpZFaXbczZnGL2G62mVE99w&usqp=CAU" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>Myfitness Chocolate Peanut Butter, 1.250 kg, Crunchy</b></p>
        <p><b><i>Rs 499</i></b></p>
        <p>Our delicious chocolate peanut butter spread contains unsweetened Belgian dark chocolate! This is in addition to the fact that it already contains the good kind of brown sugar and pink Himalayan salt
            Potential Antioxidants, Manages healthy fats, Helps regulate blood sugar levels
<br>
           </p>
           <a href="#" class="btn btn-dark justify-content-center">Buy Now</a>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP._H0cY5iEIvJ0M8VIEN_TcQHaHa?w=210&h=210&c=7&r=0&o=5&dpr=1.5&pid=1.7">
      <div class="card-body">
        <p><b>Himalayan Organics Nitric Oxide Supplement 1400mg, 60 capsules</b></p>
        <p><b><i>Rs 400</i></b></p>
        <p>Our delicious chocolate peanut butter spread contains unsweetened Belgian dark chocolate! This is in addition to the fact that it already contains the good kind of brown sugar and pink Himalayan salt
          Potential Antioxidants, Manages healthy fats, Helps regulate blood sugar levels
           </p>
           <a href="#" class="btn btn-dark justify-content-center">Buy Now</a>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP.aMXWTiH9ptiWTfDBgxhptwHaHg?w=207&h=209&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        
        <p><b>Upakarma Ayurveda Pure Shilajit, 30 g</b></p>
        <p><b><i>Rs 1400</i></b></p>
        <p>Help Well For A Post-Workout Recovery <br>
          The Benefits That Are Endless And Help To Provide A Healthy Body and Mind <br>
          Potent Source Of Vitamins & Minieral For Overall Development. <br></p><br><br>
          
            <a href="#" class="btn btn-dark justify-content-center">Buy Now</a>
      </div>
    </div>
  </div>
  <br>
  <style>
        .pagination > li > a
    {
        background-color: white;
        color: black;
    }

    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span:focus,
    .pagination > li > span:hover
    {
        color: black;
        background-color:white;
        border-color:white;
    }

    .pagination > .active > a
    {
        color: white;
        background-color:black !Important;
        border: solid 1px black!Important;
    }

    .pagination > .active > a:hover
    {
        background-color: black !Important;
        border: solid 1px black;
        color: white;
    }
  </style>
 

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script src="https://www.drv.tw/inc/wd.js?s=jyn6vsfzjjihpmw2oexzlw"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>