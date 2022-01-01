@extends('frontend.layout.main')
@section('main-container')

    <!-- Inner Page Header serction start here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset($breaking_news_detail['banner_image'])}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                        <div class="header-page-title">
                            <h1>{{$breaking_news_detail['title']}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->
 
   <!-- Blog Single Start Here -->
    <div class="single-blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="single-image">
                        <img src="{{asset($breaking_news_detail['image'])}}" alt="breaking-news">
                    </div>
                    <h3><a href="#">{{$breaking_news_detail['title']}}</a></h3>
                    <p>{!!$breaking_news_detail['description']!!}</p>
                    <ul class="cercle">
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i>  List one is awesome. Adding list item is very easily.</li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> List one is awesome. Adding list item is very easily.</li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> List one is awesome. Adding list item is very easily.</li>
                    </ul> 
                     <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                <span class="author"> 
                                    {{$breaking_news_detail['author']}}
                                <span class="comment"> 
                                <a href="#"> 
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{$breaking_news_detail['date']}} 
                                </span>
                                <span class="cat">
                                    <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> {{$breaking_news_detail['category']}} </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="share-section share-section2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <span> You Can Share It : </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li class="hvr-bounce-to-right"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6>button</h6>
                        </div>
                    </div>
                    <div class="author-comment">
                        <h3 class="title-bg">Recent Comments</h3>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span></span>
                                        <div class="dsc-comments">
                                            <h4>Thesera Minton</h4>                                            
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor incidi dunt ut labore et dolore magna aliquat enim ad minim veniam ad minim veniam.</p>
                                            <a href="#"> Reply</a>
                                        </div>    
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span></span>
                                        <div class="dsc-comments">
                                            <h4>Thesera Minton</h4>                                            
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor.</p>
                                            <a href="#"> Reply</a>
                                        </div>    
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"><span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span></span>
                                        <div class="dsc-comments">
                                            <h4>Thesera Minton</h4>                                            
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor incidi dunt ut labore et dolore magna aliquat enim ad minim veniam ad minim veniam.</p>
                                            <a href="#"> Reply</a>
                                        </div>    
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                       <div class="leave-comments-area">
                            <h4 class="title-bg">Leave Comments</h4>
                            <form>
                                <fieldset>
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="website" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Post Comment</button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>                                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- Blog Single Sidebar Start Here -->
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="recent-post-area hot-news">
                            <h3 class="title-bg">Recent</h3>
                            <ul class="news-post">
                                

                                <!--Recent Starts-->
                                @foreach (\App\Models\Post::where('title','Recent')->latest()->limit(4)->get() as $item)
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="{{route('post-detail-page',[$item->slug])}}"><img src="images/popular/1.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item['title']}}</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item['date']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>                                                                     
                                @endforeach
                                <!--Recent Ends-->
                                  

                            </ul>
                        </div>
                        <div class="trending-post-area">
                            <h3 class="title-bg">Featured</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul>


                                        <!--Featured Starts-->
                                        @foreach (\App\Models\Post::where('title','Featured')->latest()->limit(4)->get() as $item)
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                    <div class="item-post">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                                <a href="{{route('post-detail-page',[$item->slug])}}"><img src="images/popular/1.jpg" alt="" title="News image" /></a>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item['title']}}</a></h4>
                                                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item['date']}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>                                                                     
                                        @endforeach
                                        <!--Featured Ends-->
                                        

                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Blog Details Page end here -->
@endsection