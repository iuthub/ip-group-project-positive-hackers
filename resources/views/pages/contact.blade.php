<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Positive Hackers</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 100%;
    }
    </style>
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
 <!--================Header Menu Area =================-->
 <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{route('primary')}}"> <img src="{{asset('vendors/img/logo.png')}}"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item"><a class="nav-link" href="{{route('primary')}}"><i class="ti-home"></i> Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('pages.archive')}}"><i class="fas fa-newspaper"></i> Post</a></li>
              <li class="nav-item active"><a class="nav-link" href="{{route('pages.contact')}}"><i class="far fa-address-card"></i> Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
             <li><a href="https://www.facebook.com/profile.php?id=100005243956916"><i class="ti-facebook"></i></a></li>
              <li><a href="https://t.me/akrom_numonov"><i class="fab fa-telegram"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
  <!--================ Hero sm banner start =================-->
  <section class="mb-30px">      
       <div id="demo" class="carousel slide" data-ride="carousel">          
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>                
            </ul>  
          <!-- The slideshow -->
            <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="images"><img src="{{asset('vendors/img/inha_1.jpeg')}}" alt="inha_1" width="1100" height="500">
            </div>
            </div>
          <div class="carousel-item">
            <div class="images">
              <img src="{{asset('vendors/img/inha_3.jpg')}}" alt="Inha" width="1100" height="500">
            </div>
          </div>
          <div class="carousel-item">
            <div class="images">
            <img src="{{asset('vendors/img/city.jpg')}}" alt="Inha" width="1100" height="500">
          </div>
          </div>
          <div class="carousel-item">
            <div class="images">
            <img src="{{asset('vendors/img/city1.jpg')}}" alt="Inha" width="1100" height="500">
          </div>
        </div>
          <div class="carousel-item">
            <div class="images">
            <img src="{{asset('vendors/img/tosh.jpeg')}}" alt="Inha" width="1100" height="500">
          </div>
          </div>
          </div>
      </div>  
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </section>  
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 0px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }

        </script>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.636136126279!2d69.33234131485534!3d41.338524979268676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef48a8ed4d0e9%3A0x3772abeffc72e7b8!2sInha%20University%20in%20Tashkent!5e0!3m2!1sen!2s!4v1588525193092!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></script>

      </div>


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Inha University</h3>
              <p>Our office</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">+998 99 000 53 03</a></h3>
              <p>Everyday</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:akyprog@gmail.com">team@gmail.com</a></h3>
              <p>Send email to us</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->




  <footer class="footer-area section-padding">
    <div class="container">      
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20" align="center">Instagram Pictures</h6>
            <ul class="instafeed d-flex flex-wrap">              
              <li><a href="https://www.instagram.com/alisher_6040"><img src="{{asset('img/instagram/alisher.jpg')}}" alt=""></li></a>
              <li><a href="https://www.instagram.com/keb_normok"><img src="{{asset('img/instagram/komron.jpg')}}" alt=""></li></a>    
              <li><a href="https://www.instagram.com/ulugbek__alimjanovich"><img src="{{asset('img/instagram/ulug.jpg')}}" alt=""></li></a>    
              <li><a href="https://www.instagram.com/odil_969"><img src="{{asset('img/instagram/odil.jpg')}}" alt=""></li></a>                  
            </ul>
          </div>
        </div>        
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0">Copyright &copy;2020 "Positve Hackers" All rights reserved</p>
      </div>
    </div>
  </footer>
 <!-- 
  these are the scripts for the frontend
  -->
  <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
