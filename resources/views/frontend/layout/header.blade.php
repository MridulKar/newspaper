<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from rstheme.com/products/html/news24/news-magazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 18:48:17 GMT -->
<head>
    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Darpan | Home</title>    
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/fav.png')}}">



    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/others.css')}}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{asset('frontend/css/hover-min.css')}}">
      <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <!-- lightbox css -->
    <link href="{{asset('frontend/css/lightbox.min.css" rel="stylesheet')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('frontend/inc/custom-slider/css/nivo-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/inc/custom-slider/css/preview.css')}}" />
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!--while using tab-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- modernizr js -->
    <script src="{{asset('frontend/js/modernizr-2.8.3.min.js')}}"></script>
   <!--Toster-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
</head>

<body class="home">
    <style type="text/css">
        .error{
          color: red;
        }
        .hide_data{
          display: none;
        }
      </style>
	
	
    <!--Header area start here-->
    <header>
        <div class="header-top-area">
            <div class="container">
                <div style="margin-top:15px" class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <ul class="text-white" >
                                <li><span id="today"></span></li>
                                <li>01620249494</li>
                                <li>darpan@gmail.com</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social-media-area">
                            <nav>
                                <ul>
                                    @foreach (\App\Models\SocialMedia::all() as $item)
                                    <li><a href="{{$item->slug}}" class="active"><i class="fa fa-{{$item->title}}"></i></a></li>
                                    @endforeach                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle-area">
            <div class="container">
                <div class="row">
                    <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="{{route('homepage')}}"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="right-banner">
                          <!--  <img src="images/add/1.png" alt="add image">  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area" id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="navbar-header">
                            <div class="col-sm-8 col-xs-8 padding-null">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	                                <span class="sr-only">Toggle navigation</span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                                <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <div id="search-mobile" class="collapse search-box">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </div>    
                        </div>
                        <div class="main-menu navbar-collapse collapse">
                            <nav>
                                <ul>   
                                    @foreach (\App\Models\Category::all() as $item )
                                       <li>
                                           <a class="hvr-reveal" href="{{route('category-detail-page',[$item->category_slug])}}">{{$item['category_title']}}</a>
                                      </li> 
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <form action="{{route("search")}}" method="GET">
                        <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                            <a type="submit" href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <div id="search" class="collapse search-box">
                                <input type="text" name="query" class="form-control" placeholder="Search...">                          
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </header>
    <!--Header area end here-->