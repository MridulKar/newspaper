@extends('frontend.layout.main')
@section('main-container')

<!-- Category Page Start Here -->
<div class="blog-page-area gallery-page category-page">
    <div class="container">
        <div class="row">


            
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!--Breaking News Area / Slider Starts Here-->
                <div>
                    <ul>
                        <li>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="news-Carousel1" class="carousel carousel-top-category slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev">
                                        <a class="left news-control" href="#news-Carousel1" data-slide="prev">
                                            <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                        </a>
                                        <a class="right news-control" href="#news-Carousel1" data-slide="next">
                                            <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ( $recent_news as $key => $item )
                                        <div class="item {{ $key==0 ?'active':''}}">
                                            <div class="blog-image">
                                                <a href="{{route('post-detail-page',[$item->slug])}}">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                    <img class="width:150%" src="{{asset($item->image)}}" alt="category photo" />
                                                </a>
                                            </div>
                                            <div class="dsc">
                                                <h3><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h3>
                                                <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item->date}}</span>
                                                <span class="like">
                                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12 </a>
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Breaking News Area / Slider Ends Here-->
            
                <!--Category Detail Starts Here-->
                <div class="row">
                    <ul>
                        @foreach ($category_detail_page as $item)
                        <li>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-images">
                                <div class="carousel-inner">
                                    <div class="blog-image">
                                        <a href="{{route('post-detail-page',[$item->slug])}}">
                                            <img style="width: 200%;" src="{{asset($item->image)}}" alt="category photo" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h3>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item->date}}</span>
                                <span class="like">
                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12 </a>
                                </span>
                                <p>{!! \Illuminate\Support\Str::limit($item->description, 350, $end='...') !!}</p>
                            </div>
                        </li>
                        @endforeach {{$category_detail_page->links('frontend.paginator')}}
                    </ul>
                </div>
                <!--Category Detail Ends Here-->
            </div>
            







            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-area">
                    <!--Third Advertisement Starts Here-->
                    <div class="add">
                        <img style="margin-top: -27px; height: 423px;" src="{{asset($third_advertisement->image)}}" alt="Add" />
                    </div>
                    <!--Third Advertisement Ends Here-->

                    <!--Recent News Area Starts Here-->
                    <div class="recent-post-area hot-news">
                        <h3 class="title-bg">Recent Post</h3>
                        <ul class="news-post">
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
                        </ul>
                    </div>
                    <!--Recent News Area Ends Here-->

                    <!--Featured News Area Starts Here-->
                    <div class="trending-post-area">
                        <h3 class="title-bg">Featured</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Featured News Area Ends Here-->
                </div>
            </div>









        </div>
    </div>
</div>
@endsection
