@extends('frontend.layouts.app')
@section('content')
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>Board of Directors</h2>
    			
    			</div>
    		</div>	
    	</div>
    </section>
    <!-- /Single Area -->
    <!-- About Area -->
    <section class="about-area">
        <div class="container">
           <div class="row" style="margin-bottom: 10px;">
               <div class="col-md-9">
               		@if($members)
               		<div class="row">
                    @foreach($members as $member)
                    <div class="col-md-4">
                    	<div class="board_box text-center">
                    		<h3>{{$member->name}}</h3>
                    		@if($member->image)
                    		<span><img src="{{asset($member->image)}}"></span>
                    		@else
                    		<span><img src="{{asset('/img/no_image.jpg')}}"></span>
                    		@endif

                    		<p class="seederail">{{$member->title}}</p>
                    	</div>
                    </div>
                    @endforeach
                    <div class="col-md-12 d-flex justify-content-center">
                    	{{$members->links()}}
                    </div>
                    </div>
                    @endif
                    {{--
                    <div class="col-md-4">
                    	<div class="board_box text-center">
                            <h3>Sarowar Khan</h3>
                            <span><img src="assets/img/person.png"></span>
                            <p class="seederail">CEO</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="board_box text-center">
                            <h3>Sarowar Khan</h3>
                            <span><img src="assets/img/person.png"></span>
                            <p class="seederail">CEO</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="board_box text-center">
                            <h3>Sarowar Khan</h3>
                            <span><img src="assets/img/person.png"></span>
                            <p class="seederail">CEO</p>
                        </div>
                    </div>
                    --}}
               </div>
               <div class="col-md-3">
                   <div class="side_bar1 text-center">
	                   	<h4> Head Office</h4>
	                   	<p>Police Plaza, Level-9, Gulshan 1,
	                   	Dhaka-1200, Bangladesh</p>
	                   	<P>Phone: 01719131305</P>
	                   	<p>Email: your@gmail.com</p>

                   </div>
                   <div class="side_bar2">
                   	 	<iframe width="100%" height="250" src="https://www.youtube.com/embed/Dh76jet4D5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- /About Area -->
    

    <div class="clearfix"></div>

    <!-- Partner Area -->
    <section class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section_head3">
                    <h2>Our Partners</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent1.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent2.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent3.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent4.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent5.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent6.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent7.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent8.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-partner-img">
                                <img src="assets/img/partner/clent9.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection