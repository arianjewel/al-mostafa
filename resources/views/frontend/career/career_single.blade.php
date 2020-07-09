@extends('frontend.layouts.app')
@section('content')

@if($career)
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>{{$career->title}}</h2>
    			</div>
    		</div>	
    	</div>
    </section>
    <!-- /Single Area -->
    <!-- About Area -->
    <section class="about-area">
        <div class="container">
           <div class="row">
               <div class="col-md-9">
                {!!$career->body!!}
                <a style="background-color: #0072c2; color: white;" class="btn btn-primary" @if($career->url) href="{{route('contact')}}" @endif >Apply Online</a>
               </div>
               @include('frontend.partials.sidebar')
            </div>
        </div>
    </section>
    <!-- /About Area -->
@endif

    <div class="clearfix"></div>
    
    @include('frontend.partials.partner')
    
    @endsection