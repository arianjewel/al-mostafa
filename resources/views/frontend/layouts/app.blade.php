<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Al Mostafa Group</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('img/favicon.png') }}" type="image/x-icon" >

    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <!-- Main StyleSheet CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Favicon -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
   <div id="loader-wrapper">
  <div id="loader"></div>
</div>
    <!-- Header Area -->
    <header class="al-mostafa-header" id="top">
        <div class="amf-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="amh-logo">
                            <a href="{{route('home')}}">
                            <img src="{{ CRUDBooster::getSetting('logo')?asset(CRUDBooster::getSetting('logo')):asset('img/logo.png') }}" alt="{{ CRUDBooster::getSetting('appname') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="amh-contact">
                            <ul>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{\CRUDBooster::getSetting('contact_email')}}" target="_top"> {{\CRUDBooster::getSetting('contact_email')}} </a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{\CRUDBooster::getSetting('contact_number')}}" target="_top">  {{\CRUDBooster::getSetting('contact_number')}} </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 iso">
                        <a href="" data-toggle="modal" data-target="#myModal"><img class="img-responsive" src="{{ asset('img/isoertificat.jpg') }}"></a>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="main-menu" id="navbar">
            <div class="container menu">
                <ul>
                    <li class="{{Request::url() == route('home') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">About <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu">
                            <li>
                                <ul>
                                @foreach(\App\About::all() as $about)
                                    <li class="{{Request::url() == route('about.single', $about->slug) ? 'active' : '' }}"><a href="{{route('about.single', $about->slug)}}">{{$about->title}}</a></li>
                                    <li class="{{Request::url() == route('about.single', $about->slug) ? 'active' : '' }}"><a href="boarddirectors.html">Our Management</a></li>
                                @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Our Business <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu menu3">
                            <li>
                                <ul>
                                @foreach(\App\Business::all() as $business)
                                    <li class="{{Request::url() == route('business.single', $business->slug) ? 'active' : '' }}"><a href="{{route('business.single', $business->slug)}}">{{$business->title}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Manufacturing Facilities<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu menu4">
                            <li>
                                <ul>
                                @foreach(\App\Facility::all() as $facility)
                                    <li class="{{Request::url() == route('facility.single', $facility->slug) ? 'active' : '' }}"><a href="{{route('facility.single', $facility->slug)}}">{{$facility->title}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Media <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu menu5">
                            <li>
                                <ul>
                                    <li class="{{Request::url() == route('gallery') ? 'active' : '' }}"><a href="{{route('gallery')}}">Image</a></li>
                                    <li class="{{Request::url() == route('news') ? 'active' : '' }}"><a href="{{route('news')}}">News</a></li>
                                    <li class="{{Request::url() == route('event') ? 'active' : '' }}"><a href="{{route('event')}}">Event</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="{{Request::url() == route('career') ? 'active' : '' }}"><a href="{{route('career')}}">Career</a></li>
                    <li class="{{Request::url() == route('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    @include('frontend.partials.alert')
    <!-- end header Area -->
    @yield('content')
    <!-- Start footer area -->
    <footer id="dk-footer" class="dk-footer wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="{{route('home')}}" class="footer-logo">
                            <img src="{{ asset('img/logo.png') }}" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text" style="height: 30px;">
                          
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us:</h3>
                            <ul>
                                <li>
                                    <a href="{{ \CRUDBooster::getSetting('facebook') }}" @if(\CRUDBooster::getSetting('facebook')) target="_blank" @endif }}>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ \CRUDBooster::getSetting('twitter') }}" @if(\CRUDBooster::getSetting('twitter')) target="_blank" @endif }}>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ \CRUDBooster::getSetting('linkedin') }}" @if(\CRUDBooster::getSetting('linkedin')) target="_blank" @endif }}>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ \CRUDBooster::getSetting('youtube') }}" @if(\CRUDBooster::getSetting('youtube')) target="_blank" @endif }}>
                                        <i class="fa fa-youtube" ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
        
                </div>
                 <div class="clearfix"></div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    {!! \CRUDBooster::getSetting('company_address') !!}
                                </div>

                                {{--
                                <div class="contact-info">
                                    <h3>Lake View  </h3>
                                    <p>House N0-12, Road No-137, Gulshan 1 Dhaka -1212, Bangladesh.</p>
                                </div>
                                --}}

                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>{{\CRUDBooster::getSetting('contact_number')}}</h3>
                                    <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li><a href="http://almostafagroupbd.com/about/company-profile">Company Profile</a></li>
                                     
                                    <li><a href="http://almostafagroupbd.com/news">News</a></li>
                                </ul>
                                
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                     <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li><a href="http://almostafagroupbd.com/career">Career</a></li>
                                    <li><a href="http://almostafagroupbd.com/contact">Contact</a></li>
                                </ul>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2020, All Right Reserved Almostafa Grpup</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="text-right">
                             <span>Design By : <a href="https://softitsecurity.com">Soft IT Security</a></span>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
<!--         <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div> -->

        <!-- To top -->
        <a href="#top" id="toTop" style="display: block;"><i class="fa fa-angle-up"></i><span id="toTopHover" style="opacity: 1;"></span></a>

        <!-- End Back to top -->
    </footer>

    <!-- The Modal -->
  <div class="modal fade am-modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <a data-fancybox="gallery" href="{{ asset('img/licence 1.jpg') }}"><img src="{{ asset('img/licence 1.jpg') }}" class="thumbnail zoom"></a>
        <a data-fancybox="gallery" href="{{ asset('img/licence 2.jpg') }}"><img src="{{ asset('img/licence 2.jpg') }}" class="thumbnail zoom"></a>
        </div>
        
       
      </div>
    </div>
  </div>

    <!-- Scripts -->
    <!-- jQuery Plugin -->
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <!-- Owl Carousel Plugin -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Main Counterup Plugin-->
    
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>

    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mixitup.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!--For smoth-scrolling-->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>

    <!--For wow animate.css effects-->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('js/theme.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
           

// $(function(){
//     var current = location.pathname;
//     $('#navbar .menu a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.addClass('active');
//         }
//     })
// })

              $('#news-slider2').owlCarousel({

            loop:true,
            margin:0,
            autoplay:true,
            autoplayTimeout:6000,
            autoplayHoverPause:true,
            dots:false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            nav: false,
            responsiveClass:true,
            navText: [
               "<i class='fa fa-angle-left effect-1'></i>",
               "<i class='fa fa-angle-right effect-1'></i>"
            ],
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });
});


        $(document).ready(function() {
 
          // Fakes the loading setting a timeout
            setTimeout(function() {
                $('body').addClass('loaded');
            },);
         
        });








        /*global $ */
$(document).ready(function () {

    "use strict";

    $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
    //Checks if li has sub (ul) and adds class for toggle icon - just an UI


    $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
    //Checks if drodown menu's li elements have another level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

    $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Main Menu</a>");

    //Adds menu-mobile class (for mobile toggle menu) before the normal menu
    //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    //Done this way so it can be used with wordpress without any trouble

    $(".menu > ul > li").hover(function (e) {
        if ($(window).width() > 943) {
            $(this).children("ul").stop(true, false).fadeToggle(150);
            e.preventDefault();
        }
    });
    //If width is more than 943px dropdowns are displayed on hover

    $(".menu > ul > li").click(function () {
        if ($(window).width() <= 943) {
            $(this).children("ul").fadeToggle(150);
        }
    });
    //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".menu-mobile").click(function (e) {
        $(".menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
    });
    //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});


//made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

@stack('script')
</body>

</html>
