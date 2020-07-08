@extends('frontend.layouts.app')
@section('content')
<!-- Single Area -->
<section class="single_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				 <h2>{{$about->title}}</h2>
			</div>
		</div>	
	</div>
</section>
<!-- /Single Area -->
<!-- About Area -->
<section class="about-area">
    <div class="container">
       <div class="row">
           <div class="col-md-9 totaltest">
            {!!$about->body!!} 
            </div>
            @include('frontend.partials.sidebar') 
        </div>
    </div>
</section>
<!-- /About Area -->

<div class="clearfix"></div>

@include('frontend.partials.partner')