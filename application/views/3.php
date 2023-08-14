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
<link rel="icon" href="logo-icon.ico">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body style="min-height: 100vh; overflow-x:hidden;">
<style>
  .container{
    max-width: 1276px;
  }
</style>


<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="logo.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">BeastPharm</h4>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                home
            </a>
    </li>
    <li class="nav-item">
      <a href="#page" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                About Us
            </a>
    </li>
    <li class="nav-item">
      <a href="#contact" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Contact
            </a>
    </li>
    
  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Products</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="wp.html" class="nav-link text-dark">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                Whey Protien
            </a>
    </li>
    <li class="nav-item">
      <a href="hw.html" class="nav-link text-dark">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Health and Wellness
            </a>
    </li>
    <li class="nav-item">
      <a href="bs.html" class="nav-link text-dark">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Best Sellers
            </a>
    </li>
  </ul>
</div>
<style>
   .vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
}
.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
} 
#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}
.text-uppercase {
  letter-spacing: 0.1em;
}
.nav-link{
    text-transform: capitalize;
}
.nav-link:hover{
    background:#f3f2f2;
}
.text-primary{
    color:#000000 !important;
}
@media (max-width: 768px) {
  #sidebar {
    margin-left: -17rem;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
    margin-left: 17rem;
    width: calc(100% - 17rem);
  }
}
</style>
<!-- End vertical navbar -->

<!-- !PAGE CONTENT! -->

<div class="container page-content" id="content">
  <!-- Header -->
  <div class="container" style="background-color: white; padding: 0 3%;">
    <br>
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4" style="margin: 40px 0;"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">MENU</small></button>
  <header id="portfolio">
    <a href="#"><img src="" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
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
  <style>
    * {box-sizing: border-box;}
    body {
      font-family: Verdana, sans-serif;
      background-color: #f8f8f8;
    }
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    .carousel .carousel-item{
        height: 45vh;
    }
    .carousel-item img{
        position:absolute;
        top:0;
        left:0;
        min-height: 45vh;
        object-fit: fit;
        object-position: center;
        height: 45vh;
        width:100%;
    }
    </style>
   <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
        <div class="carousel-inner" >
            <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1552508744-1696d4464960?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vdGl2YXRpb25hbCUyMHF1b3Rlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60">
        </div>
        
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1516383740770-fbcc5ccbece0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzF8fG1vdGl2YXRpb25hbCUyMHF1b3Rlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60">
        </div>
        
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1544764200-d834fd210a23?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Z3ltJTIwcXVvdGVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
    </div>
        <br>
        
</div>
  <!-- First Photo Grid-->
<div class="container"> 
  <div class="card-group">
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP._H0cY5iEIvJ0M8VIEN_TcQHaHa?w=210&h=210&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>Himalayan Organics Nitric Oxide Supplement 1400mg, 60 capsules</b></p>
        <p><b><i>Rs 400</i></b></p>
        <p>2X POWER WITH DUO AMINO ACIDS: For the proper balance of nitric oxide, your body needs two amino acids: L-arginine and L-citrulline. Himalayan Organics Nitric Oxide has a perfect balance of these two amino acids that support various bodily functions</p>
        <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP.EbpfNqiXy3HVnzoSvjLVrAAAAA?w=172&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>XLR8 Isotonic Re Hydration Drink, 2.2 lb, Orange</b></p>
        <p><b><i>Rs 400</i></b></p>
        <p> Complex blend of amino acids, nutrients and minerals <br>
          Helps avoid cramps and ensures prolonged muscle performance <br>
          Supports muscle recovery by preventing muscle breakdown <br>
          </p>
          <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP.iP_UlZDNxT-dgHyUfNAubQAAAA?w=174&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>MuscleBlaze Carb Blend, 6.6 lb, Tangy Orange</b></p>
        <p><b><i>Rs 1470</i></b></p>
        <p>MuscleBlaze Carb Blend 6.6 lb Orange is an instant energy formula that aids in the prevention of energy shortage or 'hitting the wall' condition.
          Far superior to sugar, the mix of carbohydrates helps to provide a longer-lasting fuel to athletes, marathon runners and weight trainers</p>
          <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>  
      </div>
    </div>
  </div>
  <!-- Second Photo Grid-->
  <div class="card-group"> 
  <div class="card text-center justify-content-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://th.bing.com/th/id/OIP.GpSokt3Z5gudG2fmuchkBgHaGD?w=259&h=212&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <br><br><p><b>RONNIE COLEMAN L-Carnitine XS 3000, 473 ml, Mixed Berry</b></p>
        <p><b><i>Rs 2400</i></b></p>
        <p>Break down fat - your body can use l-carnitine to help break down fat stores and burn them for energy <br>
          No stimulants - these fat store burning properties work without the use of stimulants so it can be combined with any other fat burning aid you may be using as part of your daily supplement regimen</p>
            <a href="#" class="btn btn-dark justify-content-center">Buy Now</a>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,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">
      <div class="card-body">
        <p><b>Morpheme Remedies Forskolin (500 mg), 60 veggie capsule(s)</b></p>
        <p><b><i>Rs 599</i></b></p>
        <p><br> Maintains blood pressure level <br>
          Reduces extra fat from your body <br>
          Free from harmful contaminants,
          Helps in maintaining lean muscle
           </p><br><br>
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
    .card:hover{
      transform: scale(1.03);
    }
    .card{
      transition: transform 0.5s;
    }
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
  <!-- Pagination -->
  <nav aria-label="page">
    <ul class="pagination pagination-lg justify-content-center" id="page">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item active" aria-current="page"><a href="a.html" class="page-link">1</a></li>
        <li class="page-item"><a href="2.html" class="page-link">2</a></li>
        <li class="page-item"><a href="3.html" class="page-link">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
    </ul>
  </nav>
</div>
<br><br><br><br><br>
  <!-- About us-->
<div class="container" id="about">
  <div class="row justify-content-md-center">
    <div class="col-lg-6 text-center text-white head py-4">
      about us
    </div>
  </div> 
  <div class="row py-5">
    <div class="col-7">
      <div class="row">
        <p>Hello!
        We're BeastPharm- a great place for people serious about health and fitness.
        We're a young start-up of around 400 people that work for your needs in fitness and well-being. We deliver everything from genuine protein supplements to vitamins smoothly at honest prices.</p>
           <!-- <p>We do what's right by you. We value authenticity over everything else.We sell consumables that you need rather than want. In such cases, the authenticity of the product matters. Half the supplement market is flooded with fakes pumped with steroids. And that's why when you shop whey from us, be sure it is 100% genuine, without any junk. Whenever you see this logo next to our product, it's just our way of telling you that we've sourced the product directly and test it before sending it out to you. It is to tell you that what you are having is safe.
          </p> -->
          <p>Good health delivered to your doorstep, every time.You no longer have to hunt for your supplements or a ton of nutrition stores to find the supplement you need. We have over 200 brands & authorized vendors listed on our website. All just to make sure what you get is right.
          </p> 
      </div>
      <!-- <button class="btn btn-dark">Learn More</button> -->
    </div>  
    
    <div class="col-5">
      <div class="row">
        <div class="col">
          <img src="https://static1.hkrtcdn.com/hknext/static/media/aboutUs/authenticity-about.webp" alt="Norway" style="width:50%; height:100%; margin-left: 75px;" class="w3-hover-opacity" >
        </div>
      </div> 
      <!-- <div class="row">
          <img src="https://static1.hkrtcdn.com/hknext/static/media/aboutUs/screen.webp" alt="Norway" style="width:80%" class="w3-hover-opacity">
      </div> -->
    </div>
  </div> 
  

  <hr> 
</div> 
<style>
  #about{
    margin:0;
    list-style: none;
    width:100%;
    /* padding:50px; */
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0, 0, 0, 0.22);
    border-radius: 30px;
  }
  #about h1{
    font-size:72px;
  }
</style>
    <br><br><br><br>
<!-- about us End -->

<!-- Progress bars / Skills -->
    <div class="satisfaction">
      <div class="row justify-content-md-center">
        <div class="col-lg-6 text-center text-white head py-4">
          Customer Satisfaction
        </div>
      </div>  
      <li>
          <h3>Authenticity-100%</h3>
          <span class="bar"><span class="aut"></span></span>
      </li>
      <li>
        <h3>Express Delivery-90%</h3>
        <span class="bar"><span class="exp"></span></span>
    </li>
    <li>
      <h3>Customer Support-95%</h3>
      <span class="bar"><span class="csup"></span></span>
  </li>
    </div>
    <style>
      .satisfaction{
        margin:0;
        list-style: none;
        width:100%;
        padding:20px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0, 0, 0, 0.22);
        border-radius: 30px;
      }
      .satisfaction h2{
        text-align:center;
        font-weight: bolder;
        text-transform: uppercase;
      }
      .satisfaction h3{
        margin: 5px;
      }
      .satisfaction li{
        margin: 20px 0;
        padding:10px;
        
      }
      .bar{
        background:rgb(210, 209, 209);
        display: block;
        height: 20px;
        border:1px solid rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12),0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
      }
      .bar:hover{
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0, 0, 0, 0.22);
      }
      .bar span{
        height: 20px;
        float:left;
        background: linear-gradient(135deg,rgb(87, 85, 85)0%,rgb(161, 152, 158)100%);
      }
      .aut{
        width:100%;
        animation: aut 5s;
      }
      .exp{
        width: 90%;
        animation: exp 5s;
      }
      .csup{
        width:95%;
        animation: csup 5s;
      }
      @keyframes aut{
        0%{
          width:0%;
        }
        100%{
          width:100%;
        }
      }
      @keyframes exp{
        0%{
          width:0%;
        }
        100%{
          width: 90%;
        }
      }
      @keyframes csup{
        0%{
          width:0%;
        }
        100%{
          width:95%;
        }
      }
    </style>
<!-- progress bar end -->
    <br><br><br><br><br>

<!-- Contact Section -->
  <!-- <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Gurgaon,Harayana</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
  <div class="w3-black w3-center w3-padding-24">Made by SHASHVAT SINGH</div> -->
<!-- End page content -->
<!-- contact section -->
<div class="container satisfaction">
  <div class="row justify-content-md-center">
    <div class="col-lg-6 text-center text-white head py-4">
      Contact
    </div>
    <div class="row py-3" id="contact">
      <div class="row my-5">
        <div class="col-lg-6">
          <input type="text" class="effect1 textbox" placeholder="First name">
          <span class="focus-border"></span>
        </div>
        <div class="col-lg-6">
          <input type="text" class="effect1 textbox" placeholder="Last Name">
          <span class="focus-border"></span>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-12">
          <input type="text" class="effect1 textbox" placeholder="Email">
          <span class="focus-border"></span>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-12">
          <input type="text" class="effect1 textbox" placeholder="Message">
          <span class="focus-border"></span>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-6">
          <p><input type="checkbox">I'm not a robot</p>
          <span class="focus-border"></span>
        </div>
        <div class="col-lg-6 justify-content-center">
          <button class="btn btn-dark">SEND MESSAGE</button>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .head{
    background: #000000;
    border-radius: 5px;
    margin-top:-40px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0, 0, 0, 0.22);
    text-transform: uppercase;
    font-weight: 900;
    font-size: x-large;
  }
  .textbox{
    width:100%;
    background-color: inherit;
  }
  .effect1{
    border:0;
    outline:none;
    width:100%;
    padding:7px 0;
    border-bottom:1px solid #ccc;
  }
  .effect1  .focus-border{
    position: absolute;
    bottom: 0;
    left:50%;
    width:0;
    height: 2px;
    background-color: black;
    transition:0.4s;
  }
  .effect1:focus  .focus-border{
    width:100%;
    transition:0.4s;
    left:0;
  }
</style>
<br><br><br><br><br>
<!-- end contact section -->
</div>
<script src="https://www.drv.tw/inc/wd.js?s=jyn6vsfzjjihpmw2oexzlw"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
  $(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>
</body>
</html>