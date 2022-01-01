@extends('frontend.layout.main')
@section('main-container')

    <!-- Inner Page Header serction start here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset($post_detail_page['banner_image'])}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                        <div class="header-page-title">
                            <h1>{{$post_detail_page['title']}}</h1>
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
                        <img src="{{asset($post_detail_page['image'])}}" alt="breaking-news">
                    </div>
                    <h3><a href="#">{{$post_detail_page['title']}}</a></h3>
                    <p>{!!$post_detail_page['description']!!}</p>
                    
                     <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                <span class="author"> 
                                    {{$post_detail_page['author']}}
                                <span class="comment"> 
                                <a href="#"> 
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{$post_detail_page['date']}} 
                                </span>
                                <span class="cat">
                                    <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> {{$post_detail_page['categories->title']}} </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!--Share Section Starts-->
                    <div class="share-section share-section2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <span> You Can Share It : </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    @foreach ( $social_share as $key=> $value ) 
                                       <li class="hvr-bounce-to-right"><a href="{{$value}}" target="_blank">{{ucfirst($key)}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Share Section Ends-->


                    <!--Recent Comments Starts-->
                    <div class="author-comment">
                        <h3 class="title-bg">Recent Comments</h3>
                        <ul>
                            @foreach ($post_detail_page->comments as $item)
                            <li>
                                <div class="row">
                                    
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"> <span class="date"><i class="fa fa-user" aria-hidden="true"></i>{{$item->name}}</span></span>
                                        <div class="dsc-comments">
                                            <p style="font-size: 18px; font-style: italic;">"{{$item->comment}}"</p>
                                        </div>    
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Recent Comments Ends-->

                    <!--Leave Comment Area Starts-->
                    <div class="leave-comments-area">
                            <h4 class="title-bg">Leave Comments</h4>
                            <form action="{{route('create-comment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="post_title" value="{{$post_detail_page['title']}}">
                                <input type="hidden" name="post_id" value="{{$post_detail_page['id']}}">

                                <fieldset>
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                    @if($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                    @if($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea name="comment" cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>
                                    @if($errors->has('comment'))
                                        <div class="error">{{ $errors->first('comment') }}</div>
                                    @endif
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Post Comment</button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--Leave Comment Area Ends--> 
                    
                    
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- Blog Single Sidebar Start Here -->
                    <div class="sidebar-area">
                         <!--Third Advertisement Starts Here-->
                         <div class="add">
                            <img style="margin-top: -27px; height: 423px;" src="{{asset($third_advertisement->image)}}" alt="Add">
                        </div>
                        <!--Third Advertisement Ends Here-->
                        
                        <div class="recent-post-area hot-news">
                            <h3 class="title-bg">Recent</h3>
                            <ul class="news-post">
                                

                                <!--Recent Starts-->
                                @foreach ($recent_news as $item)
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="{{route('post-detail-page',[$item->slug])}}"><img src="{{asset($item->image)}}" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item->date}}</span>
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
                                        @foreach ($featured_news as $item)
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                    <div class="item-post">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                                <a href="{{route('post-detail-page',[$item->slug])}}"><img src="{{asset($item->image)}}" alt="" title="News image" /></a>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h4>
                                                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item->date}}</span>
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


