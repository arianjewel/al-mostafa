@extends('frontend.layouts.app')
@section('content')

@if($post)
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>{{$post->title}}</h2>
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
                    {!!$post->body!!} 
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