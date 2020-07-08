@extends('frontend.layouts.app')
@section('content')
<!-- Hero Area -->
<section class="hero-area wow fadeInUp">
    <div class="alm-hero-slider">
        <div class="almhs-carousel owl-carousel owl-theme">
            @foreach(\App\Slider::all() as $slider)
            <div class="item">
                <div class="single-hSlider">
                    <div class="shs-img">
                        <img src="{{asset($slider->image)}}" alt="{{$slider->name}}">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</section>
<!-- /Hero Area -->
<!-- About Area -->
<section class="about-area wow fadeInUp">
    <div class="container">
       <div class="row">
           <div class="col-md-6 wow fadeInLeft" style="margin-bottom:2%">
                {!!CRUDBooster::getSetting('about')!!}
           </div>
           <div class="col-md-6 wow fadeInRight" style="height:250px">
                <iframe width="100%" height="280" src="https://www.youtube.com/embed/{{CRUDBooster::getSetting('youtube_video_embed_code')?CRUDBooster::getSetting('youtube_video_embed_code'):'Dh76jet4D5s'}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
       </div> 
    </div>
</section>
<!-- /About Area -->
<!-- Facilities Area -->
<!-- style="background:url({{ asset('img/banner1.png') }});background-repeat: no-repeat;background-size: 100% 690px;" -->
<section class="facilities-area wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section_head">
                <h2> Group <strong> Concerns</strong></h2>
            </div>
            @foreach(\App\Group::all() as $group)
            <div class="col-md-2">
                <div class="serviceBox">
                    <a href="{{$group->url}}" target="_blank">
                        <div class="service-content">
                            <img style="height:175px;width:100%" src="{{asset($group->image)}}" alt="{{$group->name}}">        
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Facilities Area -->
<!-- GLOBAL Area -->
<!--<section class="global-area wow fadeInUp">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 section_head">-->
<!--                <h2>GLOBAL NETWORK</h2>-->
<!--            </div>-->
<!--            <div class="col-md-6 award wow fadeInRight">-->
<!--                <div class="col-md-6">-->
<!--                    <p><i class="fa fa-th-list" aria-hidden="true"></i></p>-->
<!--                    <h4 class="counter">451</h4>-->
<!--                    <p>BUSINESS GROWTH</p>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <p><i class="fa fa-eraser" aria-hidden="true"></i></p>-->
<!--                    <h4 class="counter">300</h4>-->
<!--                    <p>TOTAL PRODUCT</p>-->
<!--                </div>-->
<!--              <div class="col-md-6">-->
<!--                    <p><i class="fa fa-calendar" aria-hidden="true"></i></p>-->
<!--                    <h4 class="counter">250</h4>-->
<!--                    <p>TOTAL EMPLOYEE</p>-->
<!--              </div>-->
<!--              <div class="col-md-6">-->
<!--                <p><i class="fa fa-thumbs-up" aria-hidden="true"></i></p>-->
<!--                <h4 class="counter">9</h4>-->
<!--                <p>TOTAL OFFICE</p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 wow fadeInLeft">-->
<!--                <img src="{{ asset('img/maps.png') }}">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- /GLOBAL Area -->
<div class="clearfix"></div>
<!-- Blog Area -->
<section class="blog-area wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-6 section_head2 bdmaps wow fadeInRight">
                <h2>DISTRIBUTION NETWORK</h2>
               <img src="{{ asset('img/bdmaps.png') }}">
            </div>
            <div class="col-md-6 section_head2 wow fadeInLeft">
                <h2>NEWS & EVENTS</h2>
                <div id="news-slider2" class="owl-carousel">
                @foreach(\App\Post::latest()->take(3)->get() as $post)
                <div class="post-slide2">
                    @if($post->image)
                    <div class="post-img">
                        <a href="{{route('news.single', $post->slug)}}">
                            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                        </a>
                    </div>
                    @endif
                    <div class="post-content">
                        <h3 class="post-title"><a href="{{route('news.single', $post->slug)}}">{{ $post->title }}</a></h3>
                        <p class="post-description">
                            {{Str::words(strip_tags($post->body), '25')}}
                        </p>
                        <ul class="post-bar">
                            <li><i class="fa fa-calendar"></i>{{date('M d, Y', strtotime($post->created_at))}}</li>
                        </ul>
                        <a href="{{route('news.single', $post->slug)}}" class="read-more">read more</a>
                    </div>
                </div>
                @endforeach
                @foreach(\App\Event::latest()->take(3)->get() as $event)
                <div class="post-slide2">
                    @if($event->image)
                    <div class="post-img">
                        <a href="{{route('news.single', $event->slug)}}">
                            <img src="{{ asset($event->image) }}" alt="{{ $event->title }}">
                        </a>
                    </div>
                    @endif
                    <div class="post-content">
                        <h3 class="post-title"><a href="{{route('news.single', $event->slug)}}">{{ $event->title }}</a></h3>
                        <p class="post-description">
                            {{Str::words(strip_tags($event->body), '25')}}
                        </p>
                        <ul class="post-bar">
                            <li><i class="fa fa-calendar"></i>{{date('M d, Y', strtotime($event->created_at))}}</li>
                        </ul>
                        <a href="{{route('news.single', $event->slug)}}" class="read-more">read more</a>
                    </div>
                </div>
                @endforeach
                </div>
                <h2>CERTIFICATES</h2>
                <br/>
                <div class="col-lg-12 col-md-12 col-sm-12 certifacat">
                <div class="certifacat-carousel owl-carousel owl-theme">
                    @foreach(\App\Certificate::all() as $certificate)
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="{{asset($certificate->image)}}" alt="{{$certificate->name}}">
                            </div>
                        </div>
                    @endforeach
                    </div>


<!--                     <img src="{{ asset('img/award-icon.png') }}">
                
                     <img src="{{ asset('img/excellence.png') }}">
                     <img src="{{ asset('img/Awards.png') }}"> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Blog Area -->
@include('frontend.partials.partner')

@endsection