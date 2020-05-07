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
  <!--Header -->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">          
              <a class="navbar-brand logo_h" href="{{route('primary')}}"> <img src="{{asset('vendors/img/logo.png')}}"> 
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav justify-content-center">
                  <li class="nav-item active"><a class="nav-link" href="{{route('primary')}}"><i class="ti-home">   </i> Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('pages.archive')}}"><i class="fas fa-newspaper"></i> Posts</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('pages.contact')}}"><i class="far    fa-address-card"></i> Contact us</a></li>
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
  <main class="site-main">    
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
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </section>    
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
            @foreach ($posts as $post)
            <div class="card blog__slide text-center">
              <div class="blog__slide__img">
                <img class="card-img rounded-0" src="{{asset('vendors/post_images/'.$post->image)}}" alt="image" style="width:350px;height:230px">
              </div>
              <div class="blog__slide__content">
                <a class="blog__slide__label" href="{{route('posts.show',$post->id)}}"><i class="fas fa-hand-point-down"></i> {{$post->category->name}}</a>
                <h3><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></h3>
                <p>{{$post->created_at->diffForHumans()}}</p>
              </div>
            </div>
            @endforeach

        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              @foreach ($posts as $post)
              <div class="single-recent-blog-post">
                <div class="post">
                <div class="thumb">
                  <div class="post"></div>
                  <a href="{{route('posts.show',$post->id)}}">
                    <h3>{{$post->title}}</h3>
                  </a><br>
                <img class="img-fluid" src="{{asset('vendors/post_images/'.$post->image)}}" alt="post image">
                  <ul class="thumb-info">
                    <li><a href="#"><i class="ti-user"></i>{{$post->user->name}}</a></li>
                    <li><a href="#"><i class="ti-notepad"></i>{{$post->created_at->format('Y.m.d')}}</a></li>
                    <li><a href="{{route('posts.show',$post->id)}}"><i class="ti-themify-favicon"></i>2 Comments</a>
                      </li>
                  </ul>
                </div>
                <div class="details mt-20"><a class="button" href="{{route('posts.show',$post->id)}}">Read More <i class="ti-arrow-right"></i></a>
                </div>
                </div>
              </div>
              @endforeach
            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                    {{$postsP->links()}}
                  </nav>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="single-sidebar-widget__title">Category</h4>
                  <ul class="cat-list mt-20">
                      @foreach ($categories as $category)
                      <li>
                        <a href="" class="d-flex justify-content-between">
                          <p>{{$category->name}}</p>
                          <p>({{$category->posts->count()}})</p>
                        </a>
                      </li>
                      @endforeach
                  </ul>
                </div>

                <div class="single-sidebar-widget popular-post-widget">
                  <h4 class="single-sidebar-widget__title">Latest Post</h4>
                  <div class="popular-post-list">
                      @foreach($latest as $item)

                      <div class="single-post-list">
                        <div class="thumb">
                          <img class="card-img rounded-0" src="{{asset('vendors/post_images/'.$item->image)}}" alt="">
                          <ul class="thumb-info">
                            <li><a href="{{route('posts.show',$post->id)}}">{{$item->user->name}}</a></li>
                            <li><a href="{{route('posts.show',$post->id)}}">{{$item->created_at->format('Y.m.d')}}</a></li>
                          </ul>
                        </div>
                        <div class="details mt-20">
                          <a href="{{route('posts.show',$item->id)}}">
                            <h6>{{$item->title}}</h6>
                          </a>
                        </div>
                      </div>
                      @endforeach
                  </div>
                </div>

                  <div class="single-sidebar-widget tag_cloud_widget">
                    <h4 class="single-sidebar-widget__title">Tags</h4>
                    <ul class="list">
                        @foreach ($tags as $tag)

                        <li>
                            <a href="#">{{$tag->name}}</a>
                        </li>
                        @endforeach

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
  </main>

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
        <p class="footer-text m-0">Copyright &copy; 2020 "POSITIVE HACKERS" All rights reserved</p>
      </div>
    </div>
  </footer>
 <!-- 
  these are the scripts for the front-end
  -->
  <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
