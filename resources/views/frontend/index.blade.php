@extends('frontend.layout.main')
@section('main-container')
<div  class="container">
   <!--Scrolling News Starts-->
   <marquee class="scroll">
      {!!$scrolling_news ?$scrolling_news['news']:""!!}
   </marquee>
   <!--Scrolling News Ends-->
   <div class="container">
      <div class="row">
         <!-- Top Slider Starts Here -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
            <div class="wrapper">
               <div class="ticker marg-botm">
                  <div class="ticker-wrap">
                     <div class="ticker-head up-case backg-colr col-md-2">Breaking News<i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                     <div class="tickers col-md-10">
                        <div id="top-news-slider" class="owl-carousel ">
                           @foreach ($breaking_news as $item)
                           <div class="item">
                              <a href="{{route('post-detail-page',[$item->slug])}}"> <img src="{{asset($item->image)}}" alt="news image"><span>{{$item->title}}</span></a>
                           </div>
                           @endforeach                    
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Slider Ends Here -->
         <!-- Big Slider Starts Here -->
         <div class="col-lg-8">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example" data-slide-to="1"></li>
                  <li data-target="#carousel-example" data-slide-to="2"></li>
               </ol>
               <div class="clearfix"></div>
               <div class="carousel-inner">
                  @foreach($recent_news as $key => $slide)
                  <div class="item {{ $key==0 ?'active':''}}">
                     <img style="width:1024px; height:527px;"src="{{asset($slide->image)}}">
                     <div class="carousel-caption d-none d-md-block">
                        <h5>{{$slide->title}}</h5>
                        <p>{!! \Illuminate\Support\Str::limit($slide->description, 150, $end='...') !!}</p>
                     </div>
                  </div>
                  @endforeach
                  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
               </div>
            </div>
         </div>
         <!-- Big Slider Ends Here -->
         <!--Featured Area Starts Here--> 
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
            <div class="slider-right">
               <ul>
                  @foreach ($featured_news as $item)
                  <li>
                     <div class="right-content">
                        <span class="category"><a class="cat-link" href="blog.html">{{$item->category->category_title}}</a></span> 
                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> {{$item->date}}</span>
                        <h3><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h3>
                     </div>
                     <div style="height:174.5px;width:100%" class="right-image"><a href="blog-single.html"><img src="{{asset($item->image)}}" alt="sidebar image"></a></div>
                  </li>
                  @endforeach
               </ul>
            </div>
         </div>
         <!--Featured Area Ends Here-->
      </div>
   </div>
   <!-- Slider Section end Here -->
</div>
<div class="all-news-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--Tab/District News Starts-->
            <div role="tabpanel">
               <ul class="tab-style nav nav-tabs" role="tablist">
                  @foreach ($box as $item)
                  <li role="presentation" class="{{ $item->id == 1 ? 'active' : '' }}">
                     <a href="#home{{ $item->id }}" aria-controls="home" role="tab" data-toggle="tab">
                        <h5 style="color:white">{{ $item->title }}</h5>
                     </a>
                  </li>
                  @endforeach
               </ul>
               <div class="tab-content">
                  @foreach ($box as $item)
                  <div role="tabpanel" class="tab-style tab-pane {{ $item->id == 1 ? 'active' : '' }}" id="home{{ $item->id }}" class="active">
                     <ul>
                        @foreach ($item->sub_boxes as $element)
                        <li id="tab-list">
                           <img id="tab-image" src="{{asset($element->image)}}" alt="box">
                           <h5 class="title"><i class="fa fa-calendar-check-o"></i> {{$element->date}}</h5>
                           <a href="{{route('tab-detail-page',[$element->slug])}}">
                              <h4  class="title">{{$element->title}}</h4>
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </div>
                  @endforeach
               </div>
            </div>
            <!--Tab/District News Ends-->
            <!--First Advertise Starts-->
            <div class="add-section separator-large2">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img style="height:100px;width:100%;margin-top:40px" src="{{asset($first_advertise?$first_advertise['image']:"")}}" alt="Advertisement">
                     </div>
                  </div>
               </div>
            </div>
            <!--First Advertise Ends-->  
            <div class="trending-news separator-large">
               <div class="mt-5 pb-5 row">
                  <!--Fashion & Media Starts-->
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <h3 class="title-bg">Fashion & Media</h3>
                     <ul class="news-post">
                        @foreach ($fashion_media_news as $item )
                        <li>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                 <div class="item-post">
                                    <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                          <a href="{{route('post-detail-page',[$item->slug])}}"> <img style="height:100%;width:100%;" src="{{asset($item->image)}}" alt="" title="Trending image"></a>
                                       </div>
                                       <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                          <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}} </a></h4>
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
                  <!--Fashion & Media Ends-->
                  <!--Jobs Start-->
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <h3 class="title-bg">Sports</h3>
                     <ul class="news-post">
                        @foreach ($sports_news as $item )
                        <li>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                 <div class="item-post">
                                    <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                          <a href="{{route('post-detail-page',[$item->slug])}}"> <img style="height:100%;width:100%;" src="{{asset($item->image)}}" alt="" title="Trending image"></a>
                                       </div>
                                       <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                          <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item['title']}} </a></h4>
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
                  <!--Jobs End-->
                  <!--Jobs Start-->
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <h3 class="title-bg">Jobs</h3>
                     <ul class="news-post">
                        @foreach ($jobs_news as $item )
                        <li>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                 <div class="item-post">
                                    <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                          <a href="{{route('post-detail-page',[$item->slug])}}"> <img style="height:100%;width:100%;" src="{{asset($item->image)}}" alt="" title="Trending image"></a>
                                       </div>
                                       <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                          <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item['title']}} </a></h4>
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
                  <!--Jobs End-->
               </div>
            </div>
            <!-- Fetuered Videos Starts-->
            <div class="fetuered-videos">
               <div class="container">
                  <div class="row">
                     <div class="view-area">
                        <div class="col-sm-12">
                           <h3 class="title-bg">Fetuered Videos</h3>
                        </div>
                     </div>
                  </div>


                  <!-----------Client Slider Starts Here-------------->
 
      <section class="client-card">
          <div class="container">
            <input type="radio" name="dot" id="one">
            <input type="radio" name="dot" id="two">
            <div class="main-card">
              <div class="cards">
                
               
               @foreach ($featured_video as $item)
               <div class="card">
                  <div class="content">
                    <div class="img">
                      <img src="{{asset($item->image)}}" alt="">
                    </div>
                    <div class="details">
                      <div class="name">{{$item->title}}</div>
                      
                    </div>
                    <div class="media-icons">
                      
                    </div>
                  </div>
                  </div>
               @endforeach
              
                
                
              </div>
              
            </div>
            <div class="button">
              <label for="one" class=" active one"></label>
              <label for="two" class="two"></label>
            </div>
          </div>
      </section>
     




               </div>
            </div>
            <!--Fetuered Videos Ends-->
         </div>
         <div class="trending-news separator-large">
            <div class="mt-5 pb-5 row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div id="news-Carousel" class="carousel carousel-news slide" data-ride="carousel">
                     <div class="next-prev-top">
                        <div class="row">
                           <div class="col-sm-9 col-xs-9">
                              <div class="view-area">
                                 <h3 class="title-bg">Tech</h3>
                              </div>
                           </div>
                           <div class="col-sm-3 next-prev col-xs-3">
                              <a class="left news-control" href="#news-Carousel" data-slide="prev">
                              <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                              </a>
                              <a class="right news-control" href="#news-Carousel" data-slide="next">
                              <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--Tech Starts-->
                     <div class="carousel-inner">
                        @foreach ($tech_news as $key => $item)
                        <div class="item {{ $key==0 ?'active':''}}">
                           <a href="#"><img style="height:233px;width:415px;" src="{{asset($item['image'])}}" alt="" title="#slider-direction-1" /></a>
                           <div class="dsc">
                              <span class="date">
                              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                              {{$item['date']}}
                              </span>
                              <span class="comment">
                              <a href="{{route('post-detail-page',[$item->slug])}}"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                              </a>
                              </span>
                              <h4><a href="{{route('post-detail-page',[$item->slug])}}"> {{$item->title}}</a></h4>
                              <p>{!! \Illuminate\Support\Str::limit($item['description'], 150, $end='...') !!}</p>
                           </div>
                        </div>
                        @endforeach  
                     </div>
                     <!--Tech Ends-->
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div id="news-Carousel-2" class="carousel carousel-news slide" data-ride="carousel">
                     <div class="next-prev-top">
                        <div class="row">
                           <div class="col-sm-9 col-xs-9">
                              <div class="view-area">
                                 <h3 class="title-bg">Business</h3>
                              </div>
                           </div>
                           <div class="col-sm-3 next-prev col-xs-3">
                              <a class="left news-control" href="#news-Carousel-2" data-slide="prev">
                              <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                              </a>
                              <a class="right news-control" href="#news-Carousel-2" data-slide="next">
                              <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--Business Starts-->
                     <div class="carousel-inner">
                        @foreach ($business_news as $key => $item)                                             
                        <div class="item {{ $key==0 ?'active':''}}">
                           <a href="#"><img style="height:233px;width:415px;" src="{{asset($item->image)}}" alt="" title="#slider-direction" /></a>
                           <div class="dsc">
                              <span class="date">
                              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                              {{$item['date']}}
                              </span>
                              <span class="comment">
                              <a href="{{route('post-detail-page',[$item->slug])}}"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                              </a>
                              </span>
                              <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}}</a></h4>
                              <p>{!! \Illuminate\Support\Str::limit($item['description'], 150, $end='...') !!}</p>
                           </div>
                        </div>
                        @endforeach   
                     </div>
                     <!--Business Ends-->
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div id="news-Carousel-3" class="carousel carousel-news slide" data-ride="carousel">
                     <div class="next-prev-top">
                        <div class="row">
                           <div class="col-sm-9 col-xs-9">
                              <div class="view-area">
                                 <h3 class="title-bg">Art</h3>
                              </div>
                           </div>
                           <div class="col-sm-3 next-prev col-xs-3">
                              <a class="left news-control" href="#news-Carousel-3" data-slide="prev">
                              <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                              </a>
                              <a class="right news-control" href="#news-Carousel-3" data-slide="next">
                              <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <!--Art Starts-->
                     <div class="carousel-inner ">
                        @foreach ($art_news as $key => $item)                               
                        <div class="item {{ $key==0 ?'active':''}}">
                           <a href="#"><img style="height:233px;width:415px;" src="{{asset($item->image)}}" alt="" title="#slider-direction-1" /></a>
                           <div class="dsc">
                              <span class="date">
                              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                              {{$item['date']}}
                              </span>
                              <span class="comment">
                              <a href="{{route('post-detail-page',[$item->slug])}}"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                              </a>
                              </span>
                              <h4><a href="{{route('post-detail-page',[$item->slug])}}"> {{$item->title}}</a></h4>
                              <p>{!! \Illuminate\Support\Str::limit($item['description'], 150, $end='...') !!}</p>
                           </div>
                        </div>
                        @endforeach   
                     </div>
                     <!--Art Ends-->
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 paddimg-left-none sidebar-latest">
            <!--Newsletter Starts-->
            <div class="newsletter-info">
               <form action="{{route('create-newsletter')}}" method="POST">
                  @csrf
                  <fieldset>
                     <div class="form-group">
                        <h4>Subscribe to Newsletter</h4>
                        <div class="newsletter">
                           <input  type="text" name="email" class="form-control" placeholder="Email address...">
                           @if($errors->has('email'))
                           <div class="error">{{ $errors->first('email') }}</div>
                           @endif
                           <button type="submit" class="btn-send">Subscribe</button>
                           <p>Get the latest news stories in your inbox</p>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
            <!--Newsletter Ends-->
         </div>
      </div>
   </div>
</div>
<div class="hot-news">
   <div class="container">
      <div class="row">
         <div class="trending-news separator-large">
            <div class="mt-5 pb-5 row">
               <!--National Starts-->
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <h3 class="title-bg">National</h3>
                  <ul class="news-post">
                     @foreach ($national_news as $item )
                     <li>
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                              <div class="item-post">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                       <a href="{{route('post-detail-page',[$item->slug])}}"> <img style="height:100%;width:100%;" src="{{asset($item->image)}}" alt="" title="Trending image"></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                       <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item->title}} </a></h4>
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
               <!--National Ends-->
               <!--International Start-->
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <h3 class="title-bg">International</h3>
                  <ul class="news-post">
                     @foreach ($international_news as $item )
                     <li>
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                              <div class="item-post">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                       <a href="{{route('post-detail-page',[$item->slug])}}"> <img style="height:100%;width:100%;" src="{{asset($item->image)}}" alt="" title="Trending image"></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                       <h4><a href="{{route('post-detail-page',[$item->slug])}}">{{$item['title']}} </a></h4>
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
               <!--International Ends-->
               <!--Featured Start-->
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                  <h3 class="title-bg featured-title">Featured News</h3>
                  <div class="sidebar">
                     <ul>
                        <!--Down Side/Featured News Starts-->
                        @foreach ($featured_news as $item)
                        <li>
                           <a href="#" class="category-btn hvr-bounce-to-right">{{$item->category->category_title}}</a>
                           <div style="height:156px;" class="post-image"><a href="{{route('post-detail-page',[$item->slug])}}"><img src="{{asset($item['image'])}}" alt="News image" /></a></div>
                           <div class="content">
                              <a href="{{route('post-detail-page',[$item->slug])}}">
                                 <h4 style="color:white">{{$item->title}}</h4>
                              </a>
                              <span class="date"> 
                              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$item->date}} 
                              </span> 
                           </div>
                        </li>
                        @endforeach
                        <!--Down Side/Featured News Ends-->
                     </ul>
                     <div class="categories-home separator-large3">
                        <h3 class="title-bg">Categories</h3>
                        <ul>
                           <!--Category Names Starts-->
                           @foreach ($category as $item)
                           <li>
                              <a href="{{route('category-detail-page',[$item->category_slug])}}">
                                 <i class="fa fa-angle-right" aria-hidden="true"></i> {{$item['category_title']}} 
                                 <span>
                                    <!--count-->
                                 </span>
                              </a>
                           </li>
                           @endforeach
                           <!--Category Names Ends-->
                        </ul>
                     </div>
                  </div>
               </div>
               <!--Featured Ends-->
            </div>
         </div>
      </div>
   </div>
</div>
<!--Down Photo Slider-->
<div class="cards container">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
      <h3 class="title-bg featured-title">National News</h3>
      <div class="tab-content">
         <ul>
            @foreach ($national_news as $element)
            <li id="tab-list">
               <img id="tab-image" src="{{asset($element->image)}}" alt="box">
               <h5 class="title"><i class="fa fa-calendar-check-o"></i> {{$element->date}}</h5>
               <a href="{{route('tab-detail-page',[$element->slug])}}">
                  <h4  class="title">{{$element->title}}</h4>
               </a>
            </li>
            @endforeach
         </ul>
      </div>
   </div>
</div>
<!--Down Photo Slider Ends-->
<!--Second Advertise Starts-->
<div class="add-section separator-large2">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img style="height:100px;width:100%;margin-top:40px" src="{{asset($second_advertise?$second_advertise['image']:"")}}" alt="Advertisement">
         </div>
      </div>
   </div>
</div>
<!--Second Advertise Ends-->  
@endsection