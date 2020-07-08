@extends('frontend.layouts.app')
@section('content')
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row titleproduct">
    			<div class="col-md-6">
    				<h1><i class="fa fa-quote-left fa-4x"></i> {{$business->title}} <i class="fa fa-quote-right fa-4x"></i></h1>
    			</div>
                <div class="col-md-6">
                    @if($business->image_1)
                    <div class="alm-hero-slider">
                        <div class="almhs-carousel owl-carousel owl-theme">
                            
                            @if($business->image_1)
                            <div class="item">
                                <div class="single-hSlider">
                                    <div class="shs-img">
                                        <img src="{{asset($business->image_1)}}" alt="{{$business->title}}">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($business->image2)
                            <div class="item">
                                <div class="single-hSlider">
                                    <div class="shs-img">
                                        <img src="{{asset($business->image2)}}" alt="{{$business->title}}">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($business->image_3)
                            <div class="item">
                                <div class="single-hSlider">
                                    <div class="shs-img">
                                        <img src="{{asset($business->image_3)}}" alt="{{$business->title}}">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($business->image_4)
                            <div class="item">
                                <div class="single-hSlider">
                                    <div class="shs-img">
                                        <img src="{{asset($business->image_4)}}" alt="{{$business->title}}">
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
    		</div>	
    	</div>
    </section>
    <section>
        @if($business->promo)
        <div class="container">
            <div class="row textslider">
                <div class="col-md-12 text-center">
                    <h1><a href="" class="typewrite" data-period="2000" data-type='[{{$business->promo}}]'><span class="wrap"></span></a></h1>
                </div>
            </div>
        </div>
        @endif
    </section>
    <!-- /Single Area -->
    <!-- About Area -->
    <section class="about-area">
        <div class="container">
           <div class="row">
               <div class="col-md-9">
                    <h2 class="text-left">Details</h2>
                    {!!$business->body!!}
                </div>
                @include('frontend.partials.sidebar') 
            </div>
        </div>
    </section>
    <!-- /About Area -->

    <div class="clearfix"></div>

    @include('frontend.partials.partner')
@endsection