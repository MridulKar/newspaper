<!-- Footer Area Section Start Here -->
<footer>
    <div class="footer-top-area">
        <div class="d-flex justify-contet-center container">
            <div class="row">
                <!-- Footer About Section Start Here -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer footer-one">       
                        <div id="foots" class="footer-logo"><img src="{{asset('images/footer-logo.png')}}" alt="footer-logo"></div> 
                       
                        <div class="foot">
                        <div class="footer-social-media-area">
                            <nav>
                                <ul>
                                    @foreach (\App\Models\SocialMedia::all() as $item)
                                    <li><a href="{{$item->slug}}"><i class="fa fa-{{$item->title}}"></i></a></li>  
                                    @endforeach                      
                                </ul>
                            </nav>                                
                        </div>          
                       
                       </div>

                </div>
                </div>
                <!-- Footer About Section End Here -->

                <!-- Footer Popular Post Section Start Here -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-footer footer-one">
                        <h3>About</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, incidunt. Tempore modi, necessitatibus voluptas eius minima dolorem nisi est ratione. Optio, unde tempora fugiat eos blanditiis quod incidunt dolore aspernatur. Autem suscipit expedita qui sapiente odio! Eos atque molestiae ipsum!/p>
                    </div>
                </div>
                <!-- Footer Popular Post Section End Here -->

                <!-- Footer From Flickr Section Start Here -->
                
                <!-- Footer From Flickr Section End Here -->
            </div>
        </div>
    </div>
    <!-- Footer Copyright Area Start Here -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-bottom">
                        <p> &copy; Copyrights {{ date('Y') }} All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyright Area End Here -->
</footer>

<!-- Start scrollUp  -->
<div id="return-to-top">
    <span>Top</span>
</div>
<!-- End scrollUp  -->

<!-- Footer Area Section End Here -->

<!-- all js here -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- jquery latest version -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
 <!-- jquery-ui js -->
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
<!-- wow js -->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- magnific-popup js -->
<script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>

<!-- jquery.counterup js -->
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<!-- jquery light box -->
<script src="{{asset('frontend/js/lightbox.min.js')}}"></script>
<!-- Nivo slider js -->
<script src="{{asset('frontend/inc/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/inc/custom-slider/home.js')}}" type="text/javascript"></script>
<!-- main js -->
<script src="{{asset('frontend/js/main.js')}}"></script>




@yield('script')


<script type="text/javascript">
    @if(session()->has('success'))
    toastr.success("{{session()->get('success')}}");
    @endif
  
    @if(session()->has('error'))
    toastr.error("{{session()->get('error')}}");
    @endif
  
  </script>


<!--Social Share-->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61b6e1fb884ca6f3"></script>
</body>


<!-- Mirrored from rstheme.com/products/html/news24/news-magazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 18:49:30 GMT -->
</html>