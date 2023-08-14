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
      <img loading="lazy" src="<?=base_url("assets/logo.png")?>" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
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
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,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" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>ON (Optimum Nutrition) Gold Standard 100% Whey Protein, 5 lb, Double Rich Chocolate</b></p>
        <p><b><i>Rs 5400</i></b></p>
        <p>Gold Standard 100% Whey Blend - 24g blended protein consisting of whey protein isolate, whey protein concentrate, and whey peptides/hydrolysates to support muscle recovery. Primary protein source is Isolate, they don't call it the Gold Standard of quality for nothing.</p>
        <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,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" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>MuscleBlaze Fish Oil (1000 mg) India's Only Labdoor USA Certified for Purity & Accuracy, 90 capsules</b></p>
        <p><b><i>Rs 400</i></b></p>
        <p>MuscleBlaze Fish Oil 1000mg is now India's first & only certified Fish Oil for Purity & Accuracy by the reputed lab Labdoor- USA, keeping up with our commitment to provide the highest quality supplement
            Tested and cleared by Labdoor for heavy metals.</p><br>
          <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRptMWJhkf-TsGzWp-ahjMABA7xa_d4Pe_n5A&usqp=CAU" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>HealthKart HK Vitals Multivitamin with Multimineral,Taurine & Ginseng Extract, 90 tablet(s), Unflavoured</b></p>
        <p><b><i>Rs 370</i></b></p>
        <p>HealthKart Multivitamin Is A Scientifically Formulated & Clinically Studied Product
            It Is Enriched With The Goodness Of Herbs & Amino Acids Along With Vitamins & Minerals
            It Comes Fortified With 9 Essential Amino Acids .</p><br><br>
          <div class="container text-center"><a href="#" class="btn btn-dark justify-content-center">Buy Now</a></div>  
      </div>
    </div>
  </div>
  <!-- Second Photo Grid-->
  <div class="card-group"> 
  <div class="card text-center justify-content-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSEBQVFhUWGBUWGBUVGBoWFhYXFhUXFhUaFRYaHSggGBonHRUVIjEiKCkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGzAlHyU3Ky0rLS0yLS0tNTEtLS0tLS0tLS0rLy0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS8tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcDBAUCCAH/xABPEAACAQMCAgYGBQYMAwcFAAABAgMABBESIQUxBhMiQVFxBzJhgZGxFCNCUsEVYoKh0fAWFyQlM1Ryc5KTwtJDU7I0NaLD4ePxRIOUo7P/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAMxEAAgECBAQDBgUFAAAAAAAAAAECAxEEITFBEhNRYSJxkTJCUoGhwRQkseHwBSOS0fH/2gAMAwEAAhEDEQA/ALxpSlAKUpQClKUApSlAKUrj8e6QwWgTrmJeQ6YoUwZZW8EUkDvGWJCjIyRQHYpVN9OPSzPC4hs441ILh5JAZBlTpIjwVBwwZS2CuVIBODiKWvSPilypmvb+eG3HIx4haVttKxCJQ5Ugk6wCBpOfGgPo+sbyqPWYDzIFfOtzbXvEIGNvC/0ZesYmSYu8hiDMQzuSxJ04AGQG2LYrfsOH8OiBisLc3szpLG1y2sQRo+dXWSr2Q2k6cqAR1mkuKAvn6Sn31/xCsisDy3r40uUj1uUVQuptIGSAuTpALbkYxud/GuhwfgUs3biQgLqbrCSigKAWKkbsQGXZQThgcY3oD69pXzBPxKSBVW14ldyzl12jkk6sruAqrqIYlsd7Z2wBmu9YdM+PwwG6ZuthAVh9IiXtKSQWUx6XIGNyTsCDQH0DSqh6Oem+FyEv4TDnA62I9ZHnvLLjWo8tVWvaXKSoskTK6MAyupDKwPIgjYigM9KUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFUp0tPWcSkLFQ7FreOUnS1vHb4uLiVWOykRMApO2tjV11Q3pIuF+kXEbbIzEylV7awo7OEVjsDNMwXu/od8jAoCLcSu7Z3EzxKkEKItrbquDcr1jgu5J1CMlHyxB3OSCSVbefhwi03PFXPWBgqWSAFFSKaJWtwoYldUbNpC4A09onIBht67yszsMauQJ2VcYVR7AoA5d1TtuLx2QjvY8zXlwit1spbDLIhL9lToUxSJGugY7LINsEkDo8VtMATX7pBYzuv8AJLV8sB9HKo+UXt4MMSlACnbLbbmtO66RXEkWizAs7PGhWY/WOERiEQ5bT2Ymxjcuh+sLHTUfsmt4okurlhO2gxxQSMzjsaRGpLZBRVzlfVAOB2lrk8S411zapOrx3Kowo3J5fabLMSxySWY53oDpW8dt1ixWUMl3cyZVVcEICc50qNLZC5PdpO4kOjLdOThFzcolxfXaJFJ1EjjcLHFM3Vwvo7MZYHAIJyilGJI5Rbgl+0dzFJAyiTVpXO6jrAYzkDfGHPKpK62EL5vpmuoytwgjwyaJY5I0+pClQsbEykY0rhAu+k5A3rL6OUmtOHWn0qTD9TdOFjdVeFe2sjgFpFZmYKFXsIrA5yaydOeuFu73d4rSkKq2kX1UaltjIADmULHkdrI+s54wG5tz0qv7qOJFIhES6ut1FGaTqXjZus2ChxI4AVQBrG/M1x3nghbKgXEuos8jtqRm1KQQO/I17ksQxByaA59jwuSUa/ViGS0rYCgDnjJGo9wHInbI3xenoObFtMkZYwK6GMvnOpl+tx4DIU4AHrHvJqpUsjcxrcXtwI4RkqiDAVUkKOAOSts2nAYkn3G6fRJLqgcqnVRARLHFp0kBQyu7L9lnYE49gP2qAsClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUryxA3OwoD1VB9OeFXknELm3RcmYqxLHSgjR9ccmfADs4+9qq65r88oxn848vcO/8AVWq9rrIaTDEZAJAyAcZA8BsPgKAprh3o0iIBuJ5ZD3rCuhf8RBPyqQ2fo/shj+SF8cusdmxuTsC225J99WbHaDwrYS3FAQS26JW6gBbOAY/MX9ldCLgCDlbQjyRf2VMFiFewgoCHNwNf6vD/AIV/ZWrP0Xhb1rWA/oL+yp3pFfhjFAVnf9CrZ9ntEPlgfI1G7/0bWp9WKaM+KMxHwORV2tCKwvbCgPnu86HPCMwhZsKyhJ9QIDHLaR6ufDGnck88Ysb0QG4k+k3M7O3WGNdbbKSgbKoncFBAJ8T4g1M5rFTzAPmM14t1aEBY8BF2CYAAHsxjFAdqlalteq2x7LeB7/I99bdAKUpQClKUApSlAKUpQClKUApSlAKUpQHh3ABJ5CuVNIZDvsvcv7fbWa/lydPcP1mvEYoD3HHWxGteUFZ0FAfqrXsCgr9oBSlKAUpSgFfhFftKAwstYHSts1idaA580VZ7O5OdD7+B/A1+yLWrItAdmla9nLqXfmNjWxQClKUApSlAKUpQClKUApSlAK8s2BmvVaHGL1IYHlkzpUZOkZJycAAeJJFAa3M58azRiqk4z6V7nUVsrNCB9ty8xH9pY9IQ/pGo/P0941Idpo4h4Ri3UD/Hqf8AXUNpal405Syim/JXPoSMVnAr5ofivEZM9ZxGTJ+7PKg+EagV0ej/AEVvL5mjW9zpUMdckzjBONsgZ+FV5sG7Jq50SwOJhFznTkorVtNfqfQrOBzIHntWB+IQjnLGPN1H41Ta+g2U87mAf/YZvm4rMvoLP9djHla/+9VzkLXfjlqOdxAPOVB+NYj0msRzu7b/ADo/91VtF6D1BBN5nytwPnIa2/4mo/623+Uv+6hJOf4XcO/r1p/+RF/urKvSWxPK7tj5TR/7qrb+IyP+uP8A5K/7q8N6C07r0++BT/roC1I+MWx9WeE+Uin8azpdxnk6HyYH8aqE+gzbAvV99rn/AM6sL+gt+67hPnbEf+aaEF1V4YVSS+hW6Q5iuLcHxCyRn4jND6NuOJ/R3Y/QvLlT8CgH66AuWQVquKqH8kdKoDiOSZx/fwzf/wBjqNYm6W9JLfa4tWkx9qS1LD3vbkCgLosmw2PH/wCa6NVf0M9JK3UiRzwdU7MFyja1ByRhlYBk3/tVaFAKUpQClKUApSlAKUpQClKUArWvrdJEKSqGQkZUjIOCCMjvGQK2a17sZX3j5+R+VAQP0slPyWRGoVVliGkacDfPJdhXPHo14bDgXF4wYjIDPDGT7QGUnFb/AKWT/Njb5+ui78/6jj9XlX5wW/400MbXNrDco6q2kskUmCMjWD2c47tNYTUXPxK+SPUw86sMPHlz4fE75qN8o7vLL7mZOhXB4tLM6jUA6lp1XUNiGUjGRy3Fc30WKovLoR+qAwXfO3WLp379u+u9xC1s7hB9NtJYBGulSy4SNQO54WKKgx9rAFcD0Uxot1cqhyoVgDnOQHUKcjntjesXFKrCyX8W+R3U6sqmBruc5t2WucfaWju8+uSOGOmF9BevNLO8lrHdNE6EDAVmlwvZXJwkbke1AM71KfSJx2VpYLKykKyODM7o5Q6NLFBqX7OFkc78kXnmsPBehs0icUiuo2iFxIGhcsrdpJZnjcaWJABKHBxsSPGv3oJ0RuYkuJruMrO0XURIXR8KIwucqxUeqiDfYR+BrtPnSE3HHbtuEJILq4En0m4XrOukD4EKlQWDZIBOcVe/EciKQg4Oh9xzHZPKqotfR9eNwzqHVUmS5klCMynXG8SoQHUkK2eXl3ZyOg0vSV43jeGIZBXUOpD4Ixn+lK6vdj2UBBrDpJejgTSC5nLtfCJ5WlYusf0VXCiUktGpfHLxx316gvrMxjHH78S6dwVutIfHI6WO2fAnzNTHh/QbiVrwvqLSZEuWuDPIqkFTGYxH1Ss6kEgKjZIAznfka0ZLDjhGluD8MfI3ZooSxPi38oAJ7+VAeoOkl5DwRpBex3Ev0gRLcRszvHGQGKydait1mzjtDOGU1scC6J8Ylt4p/wAqOvWosgRmkcqHUMoZteCcHfA+POsHCPRxeLwyeBygneaOZELA5EahCHcDAYjVuMjON+eNiwv+ktvHHCljE6RqqAv1ZfSg0rkpcgE4A3xQHi74pxq14deG7dkkjkt/o85ELlleTTIMAEFRgEFgG7e/KrF6JXbzWNrNKdUklvBI7YAyzxKzHAAA3J5VW1xwPjM9heC7V3eWS2MMDOhZAkxeUjB0quCuBqJ7HlnPwjpHxq1to4DwkusMaRLhiWZY0CqTp1bkAUB74h0u4w/Eby0sIrWVYCmFlGl8OikYPWoGOc1KOA8Sv3hkfiFqtvKjYVEfUrrgdrKF8bk8s1V/S3hQ/Kl5Ld8MvLqJ3QxtEsqBfqk1Mrqul84xjO2mpj6P4rZbO5Ftb3NunWDVHd+tnSMFM/Zx499AS6N4ZlUyRKzp2lbsuVIOQQR2l94FSCozw5souDqAA79QHuDyAfBfOpNQClKUApSlAKUpQClKUApSlAKw3A7Pw9vf5H5VmrDcDs/ufwPyoCA+l3/uxv72L9+Z/DyqRXdhf6y8F1EqELphkt8hMKAe2rgnJBPLbOKj3pd/7sb++ipa9CoIMJ+UrqI4BCidYzj2L4VlL2n8ux3QS5EbveW19o+hJLJb8SAXAtHiOQTH1iuOycdhsqd8DnyNQz0WwBLu6UclDAeSyAD5VMrXhRTGL+5OQCNTQPkebRHPnUR9GX/bbvfPr7+P1o8Nqymv7kL9X+h14eSeExPC1bhjoraS1+py+K3d0Z7kJPNpiklYqJZBpQTaBpAbbBZfIVY/RjiwuLZJWI1DsSex19Y+wEYbyYVE+jMCycRvY3GVdbpWHiDcKCPga4k9zLZG6tASRIAmeXZzs49rRls45E/m1lTm6fiejvf+ep6uMw0MX+XgkpxUJLa6kkpednZ9eh46ScVmnknnjdhHGBjBYDR1ixocA8yW1e8+FTT0XSM1ipZmY65d2JJ2bA3NcS84V1HBZS2zzdS7eIHXR6F9wOceLNWTolxlbPgz3Lb6Gm0r95y+lF97EeQya0pJqV5bq/1OP+oyp1MNw0VlGagur4Y697tvPc4npP43JcX0XD7VmyhVTpJXM8uAuSPsohzn89s+rXvoLxCWy4hJZXLMQ7dXlixGsbxONR2DBuX5y+FRDobc3iXBvorSS6cmTtiN2QSucyNlFI1YYjHdrNdbpVcXdxILqezktyqhGbRIqnDdglmUAMCcA9+R4VFSVvGtft+hfC4dS/LO3C1Zu8b8XW1767WLO9Il/LBZs0LMrMyJqXZgCSTpPcSBjPdnaoTwDgklzEJvygI2JYGNnZnGCQNR6wEE4zy5EVIbnpDBc8LWW6RnBZY5QhCssq76gcjTnCsPYwFcLh3BOFToJDdSRbkGOaSEOMHHLTuCN8jxqanjnfXLS9imDvQw0oyTjJSaclBT2WWf/O5luuBcTgZHtLl7jvOiTZSMYEkbuQ4OfbyPLasnpI45eC4t7a3lMBkjiY6To7csjRjW/NVXSOXiedcHpJwm2turazuxMxY5CspKYGQdUfq77ePhyNdPphJZTiyF686TyW1uzTRiMx6ZM7yB2BwG1tkDYMefdWLtdLLTe6L1Y35VWVprx58HDK9tXHRpdu5+3PRnpHErPHfLIFBOkSOztgZwqvFjJ7t6kXRfi11Pw9nv0eOZGeNjKnUFlAVlcqxQLs2MgqMqeVQeb0d2qhng4xApUFsdgchndkm25c8V3/RbxOaXh03XSO5jlKozsS4UojadeoHAJOO0MZx7K6Y5P97njVrSg5Jp2a91xef0JlZbqu5bZd8l8beOqTHxHnUjrgRIdsgnGNyCce8q3/UPOu/WhxilKUApSlAKUpQClKUApSlAKw3A7P7n8D8qzVhuB2f3P4H5UBAfS2P5sbbH10Xdj/SPlUe4d02v0gQ8RtPpFu4GJXiKZVtgSdJQ5HIEDPjvmu96W0xwx9sfWx92O4/mLUnliuGkETQwPZnRg62EqhVVhqjK6W7a7YPLFYyi3J2dtD0qNWEKEVOCkrvVtP3dGt33yIvNc8I4iERme2aNdCo2ISq7YUZzGRywK1PRTAEurlAchVYA+IV1AO3lUsm46T2biwusZ2IjSdRjvOhjj4VFfRY+q7umGQCGOCMEZkBwR3EVg0ubB7+Vtj0KcpvA4iKuoWjZOSkr8S0sl9/XWW2nD4IZ5ZYI5GkJcOwOVzIwkYDUeeQDtyrzxbhcE8iyz20rMoAyDzUHUAyq/aGSdjnma7fDkIVs97ufixNZTMfuN+r9tdfDG1rZHhrEVVPj43fS93e2lr9LZGnf2kN1CUkGuJ9JwCVzpYMu4II3UfCuDP0a4eyLYtE5iRy4HWSBRIwJwWD5JwTsfGpNEVWPsDA3AX25NYxZL1egncnUW79ec6qlxT2KRqzjHhTdtbd+pj4VwyG0gENumiNAxC5LHclmyWOSSSeZrW4jPDNF1UsbtHMnaHgpON8HIIONxy2rqI+UOeYBBrBAi5UbeoR7s1Nit3e+5y7DopZxxyRJGTHKF1KzOytp3VhknS2/MYOw8BXMm6BWAbHVy7hjtIcdnu3qUPIIR2jhM8/u58fZX5c3ChlGeaOw8gN/nVHTg9kdEcbiYtuNSSb1zef1IpD0HsNj1M7DnhnIB88MMiuhx/ovaXgXr4XUxrpRkPVkLt2Rg4I8ARtviu1bXDsisiqVIBB1YyCNu6sXELx44pJJFVVVSchs8iO7FSoRWSRE8XXnJSlOTa0u27EGf0RcPPfeD9NPxSpDwzgEFnbNBaqwUksSxLOznAJYgc8ADYd3Kuq/EZP6tP8A/r/31px3JmWXKlSrhTGRl0wqsNQ0sDnOoYDDBHulRS0RnOtUnlKTfme44znJU+ZU/Mw/6hUgqOwW+DnTj9DH6/o6/MVIqkzFKUoBSlKAUpSgFKUoBSlKAVhuB2f3P4H5VmrDcDs/ufwPyoCAelsY4Y23/Gi7sf6R8q6YsriOER2188lzGiao5mjkDsVBOsFesTOcjDeHOuZ6XB/Njf30VfvDemXBZ5UnIWOccpJYtMmQujtSoCPV23blWMmuN3fQ76cJyw8XCLlZy2v8OvbUk0zX0alvqLjAzoVXgdsDcLlnBPhyqFeimfrLu5kIxqVjjnjMinGffUs4JY2vWLJaXcjqM5iW466NtQ+0rFiCMg7EGol0DRvpN+sRw+iQIfBtfZ2PtxWU78yD8++x2YXg/C4mNs7Rztb3lk19131yLKdJAToK4O+Gzt8KxsLju6oe3tHHurS4BxQS2scjetjS+du2nZbPhuM++tg8QP3XPkoHzOa35sLJ31PKnQqRnKDWabT+TsZUtG1LqYFFXl3s55k92PZWc2qfdHwrVt+JIx08m+6w0n3Z2PxrfVgeVWjJSV0ZSi4uzRzHspBKWjZRGyFWQ5yG30suPgR76w8N4ZMjws7qQkJjYDPafUDqHswDXbpViDHLGGBVgCCCCDyIPMGoxb9G5klys+qFUmWNGBLp1qjbXntKCNu/FSusU0oVSzHCqCSfAAZJoCO2HDuIxRpEs9qVRVQFopCSFGBk9YN69XvCr2eGaGeaDEkbIpjidSrEjBOZDkYzttWx/Cuz/wCb7dkkO3jstYX6aWQwTK+DggiGYg5xggiPluPjVeOPU3WGrv3Jej/0duZsAk8gMn3DwFciK3Gq5kB1CQocFcadKCLByCG3Ru7blWCbpfZkFQ8mTlf6CbZvVwQUHeQK88CmtzDMLbUqhixDq8Z1Oxcn61gSCSe8Daikm8mZzo1oZyi0u6aM8EIzkKPPQPmIRj4ipDUfgAJBAB9oAP6wrY+I86kFWKClKUApSlAKUpQClKUApSlAKw3A7J/f8DWasNx6v7/sNAQD0un+bGx/zo/x9p/DyqSNeRyIs0EMd1GftRGMvnvwr6V28NWfZUb9LR/mx98/XRd+f9R/Dyqq4Bf8PkyBNbvnGSGVWxnAORokHPxFc9SpwSeXQ9fCYP8AE0ElJJpysnvlHpn6XLo4pxLh0PVfSrdEMqCQK8CsyjbIbSDhgSM4zUf9Fkqtd3LJ6pViu2OyZAV27tsV56M9PHvGW1u7VZdWcaQvaKrqP1ch0tsGOQw5bCuf0L4xFaXNyWR9J1qqoBlQH2GGI7tqwlUi6kZ3Vs9rbbndHC1KOExFKpGXHaPvJprjystV89bbE14SAlxcwj75njH9vZ/IBgFrnS9LFk0KjaJN9UK4aQtkBFJI+rjPaYyEAAJXT4dcJJK747WW0k+sFOCUP/hPnnFacvRO21Su2rD5IGQBEWYPIybc2KrnORhccialWTZ5c6iqPiks7K/mlZv56mtY9J1uJ2t+od0AOJ0DFHYPpBVsYXI7QGdsHepHaXDRtoc5A3DH7Scjq/OXIOe9c+FVD9EuxcrY9dLII2TdNZVc4kB2IOTrznYL4nFWrxQjY/2x7ijA+7FWfhkpRKNXjwknpUVj6eWWBl3zjf6tuff3U/h9Y/ek/wADVvzqfxI5uRU+F+hKq5/HR/Jp/wC6l/6DXFPT2z8Zf8s1p8Z6a27W8yiOftRyLkx4ALKQMknap5sOqI5NToykrbpHckoZbqVVx2nHbZVIBOlRjJOkbcs4zyqSXvDJ0TLXkqfWNGHlCiHTHLImSRsp0xjGplBYhcDINRCz4ZK8etELIuQzAHSCqhmBY7ZAIOPAjxrehha2HWXVuJEYoAJSOyxBcAqGJUsobZgMjON6ngj0NedW+N/5fudHilq0aTsLt2ZOrZY+tjLhZDFqMwU5ZiZSRoGOxkkk1N/Q3MzWl4WZieuG5Y5H1Sd+pcd/2hVQF4yxwwBJY6VUAAk5IAzsN6t/0J/9jvMZ/pl9h/ok8N6sktkUnObVpSb+dyb2zZ7w3vDfr1SfMedSGo9bNk4JyR7dWPcZJCPgvuqQ1JiKUpQClKUApSlAKUpQClKUArDOOz+/7DWauH0yYizmIJBAUgg4IIkXBBHI0BFfS0c8LO+frou/P69TfOuZwj0vIy6Ly2I2ALREFD49h8YH6RqL8e41czQmCaZniyrYbTnK8j1hXUfiaiU8Wgahv5rj9ZI+VYVFU4rwPUwlTBuly8TfVtNX3t08uhevCOJcFklSeEwxSrnDaTb7lSp56VbIY+POof0c4Kbu6uFSQLgu2SNQIMuNsGqytOK6jpEZH9l/2JU56D9LY7J5XlimcOmlerCsc5zntsm3lWLhOcoqccux6EquDo4eq6FZyk0klJPK0k90u7tYmFve6JHkA2LcvI8we471IrS+Vl+rIOeYP+327+POq0/hfbkAFJl8dQi3ydyMSHI+VeYOlVsDnUw9wPyap4JdDyOOFtS0V6oMz6QGO2rGG0jkCx+Wa0uI2c90jC30BfVJYkDB9bSQpye492+2eYr1unNk7qsk7hBzJjkPP2Ab4FTu09JvCERUWZwFGB/J5+7nyjq0aN/aKTrcPsmvccHvYkUySWiIukapHYgdjqlxrUqhxgdkLk+ZzidLonP0myBQ6v6WXbLliTnOoageecAdnTisd5084dLITJes0BxiFrOVgrYTSctEdW6sd/veVcyXpfw3qgpu0ZwAdbcPbTjsAgJo7Kko/jjX34rTkR6v1M+dJ7L0OibS5Dq/0iyDqulXJkYhAMEEuhBGBgk5PaIJya9cS6MXhtZNc0LRhNf22OEhVVwxGfVjTzOTzJrm3PTrhgOXuRjUTpFlnDZzJhiO8lsnH2jSL0mWXUSwieWbMbxoogWEKGQKi+sBhcNvjk2/IVPIj39Rz5dvQhXA3uordQts7CQvIjMXVD1sIz1kZIVxoi1DOAQud8CvXEZ7pow3UJHHFliYzt2F0Meq68hwNQyyqcHIyO0K1bfpG6pEi26poVFLJIyFykJgDM0TBs4Y4JJ5nGxrxedJJ3B1Rwq2kx6yJjIiHTlCxLAk6QSzAsck53rVq6zIhU4JJrLvn66nlOlE6RrCHAVUSMdkK2hFCgMc78h+5ObM9EM7y21/JJlnknDkkbsWiQk4VDz9imqgXpVcRjqoyqgE7qELZOc9ojPs591SLgXTO8hSVVeJuvYO7SR9okKEGM9jGAO6oRWTWiLyiPawc7b4JJx7dJY489C+dd+qR6P8buZ54Fmmdl6yPsYEaeuOcaAKeXhV3VJQUpSgFKUoBSlKAUpSgFKUoBXO45w/6RBJDq0lxgNjOCCCMjvGRyro1+GgKQ450I4jEezAJxv2oXXOO7Kvhs+QNQLjcM0anrra4ixzMkLgD9JwK+qUlBr3mgPjWwuUDbtj+1qA/wDCK7H0qI/bTfxAyfMswwfKvqa94TbygiaGKQHmHjVwfMEb1yZegvC252Nr+jEi/wDSBQHzitwnc6/4ol2zvyzp8u+vRl22I7vt7Y7tlXl4DuNX3ceizg7nLWaj+w8qfqRxWtJ6H+DHlbMPKab8XNAfOLEmTvznxJPt3xz8a7SZwPJf+djnt7s+r7edXY3oX4Qf+FKPKVvxrx/Enwn7s/8Amn9lAUuwO/k3PrvHfPs+97cYoc57+f3pQ2dPljVj3afbVz/xJ8J8J/8AN/8ASvQ9C/CPuTf5rUBRHEydPdyHJnx34wGHq+A5jfNa3DZcE5bH6Sjz9YfHx5V9CD0PcGH/AAHPnNJ+DVl/im4KP/pM+c0/4SUBQhnTvdO7n1Td/dhhny+zXhr2Jdta7bdnWPDZSMjHnvX0VD6P+Ep6tlB+kC//AFE1uQdHLCMhorO1RhyZYIww/S05oD5XncSPpi1OScBVXVn+yuAalPBOj/EZABHY3J/Odeqj+MuFPxFfRqyBRhAFHgoC/KsMlx7aAgnQ7oTcRyRSXRjj0srdWh6xiQQcEjsqPImrZrh8POuQeAyT8h+s/qruUApSlAKUpQClKUApSlAKUpQClKwzTYoDn8QYxnV9hj/hb2+w/P3Uivwe+tbiPEtiCMg7EHkR7ahlzxjqm79Pt30/tFAWGt6KyC6FQO26Qqw2bPvreTjI8aAmAuhX79JFRReLjxr3+VR40BKPpIrz9JFRr8qDxr8/KY8aAkn0kVjN1Ud/KY8a8NxMeNASJ7qsLXVR1uKDxrC/FR40BInuq13uxUdl4sPGtObjQHfQEmkvB41pz8QA+XtJPID21EbvpEo2zv4DnW1wfiPa1ndu783y9vtoCy+B23Vpl/Xbdh93wX3b+8mupUX4TfFsVJYzkUB7pSlAKUpQClKUApSlAKUpQCsM0OazUoDh3nCyajnEujhbO1T+vJUUBSt/0McEmIsh/N/EcjXLk4dxGPkVcD7wKn4j9lX20CnmBWB+GxnmooChW4pep69ux/sMG+eK8/wokHrxTL+hn5Zq9H4FCe6tZ+jEJ7h8KApQdM17xIPNHH4V6/hpH94/A/sq4n6IQH7I+FYW6FQfdX4CgKiPTSP736jWNumaeLHyVj+FXB/AmD7q/AV6HQuD7q/AUBTB6X59VZD+g37K8HpBO3qQSn3AfM1d6dEYR9kfAVnTozCPsigKJEt/J6sWn2sSf1AfjWeHo5eyf0jkDwUYHx51e8fA4h3Cs6cNjHcKAp7hfQpl3IJPidz8alfD+jJXG1T1bVR3VkEQoDicP4ZprtxrgV6Ar9oBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoD//2Q==" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>Labrada Muscle Mass Gainer, 6.61 lb, Chocolate</b></p>
        <p><b><i>Rs 3400</i></b></p>
        <p>Labrada Muscle Mass Gainer 6 lb Chocolate helps to supply protein and other essential nutrients for muscle growth
            It aids to provide right calories for weight gain and helps in building your muscle tone and mass
            It aids in the stimulation of your immune system and metabolic rate</p>
            <a href="#" class="btn btn-dark justify-content-center">Buy Now</a>
      </div>
    </div>
    <div class="card text-center">
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUyjaDTi85j07OpZFaXbczZnGL2G62mVE99w&usqp=CAU">
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
      <img style="width: 80%;float: none;margin: 0 auto;" class="card-img-top" src="data:image/jpeg;base64,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GwzORnpZgOsWY5bniGHG9wRIgxtd0LNUp01z5SGZzr1Qb3IXS9r94A5yuIca19axzAqcxcaG1x1jpwHtPuju3iHNyAPM3P0kXmkSXT412s2eIqUrlauNLDjaitgQAT2tdeHrNHsrZhxNcIlwpbVm+VSeJPDNblzM32D3Jc2zXP0Eumwt1ilrC0g5OTtsuUUlSVHStm7RTIqIOqqhR5AWE2iVwZXdnYEqBN1Sp2kTpMDTOaeaifYEA+rwJgCfUAREQBERAMWi0zEA+cs+Wpgz0iARXwinlItXZKHkJtIgFfqbvIeQkV91kPyy1RAKY+56H5RItTclD8svsxaAc5qbhofkHsJ5f2DQcFt5CdLtMZRAOancNCLFbi97HUX77Qm4FP8AAv8ASJ0rKIyiAc/p7jIPkHsJKp7noPll3tFoBUqe6iDlJdPdxBylimYBpqexkHKS6eAUcpOiAeCUQJ6BZ9xAMWi0zEAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAP//Z" alt="Norway" style="width:80%" class="w3-hover-opacity">
      <div class="card-body">
        <p><b>Doctor'S Choice EAA (Essential Amino Acids), 0.66 lb, Lightning Lime, 30 Servings</b></p>
        <p><b><i>Rs 1600</i></b></p>
        <p>Maximum Muscle Recovery <br>
            Pro Hydrating Electrolytes<br>
            Build Lean Muscle Mass<br>
            Helps in Muscle Recovery<br>
            Muscle Protien Synthesis. <br></p>
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