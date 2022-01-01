@extends('frontend.layout.main')
@section('main-container')
    <!-- Inner Page Header serction start here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset('images/banner/3.jpg')}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Category</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>World</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                <br>alteration in some form, by injected humou</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->
 
   <!-- Category Page Start Here -->
    <div class="blog-page-area gallery-page category-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                       
                    <div class="row">
                        <ul>

                            @foreach (\App\Models\Post::all() as $item)
                            <li>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-images">
                                    <div class="carousel-inner">              
                                        <div class="blog-image">
                                            
                                            <a href="{{route('post-detail-page',[$item->slug])}}">
                                                <img src="{{asset($item->image)}}" alt="category photo">
                                            </a>
                                        </div>                           
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h3>
                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item->date}}</span>               <span class="like"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>  12 </a></span>
                                    <p>{{$item->description}}</p>
                                </div>
                            </li>                             
                            @endforeach

                        </ul>    
                    </div>

                    
                    
                    
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pagination-area">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">. . .</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                       
                </div>














                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>


































                       
                        <div class="add">
                            <img src="images/add/2.jpg" alt="Add">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection