@extends('frontend.layouts.app')
@section('content')
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>Events</h2>
    				
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
                @if($events)
                    @foreach($events as $event)
                    <div class="events">
                        @if($event->image)
                        <div class="col-md-3 eventimg">
                            <img src="{{asset($event->image)}}">
                        </div>
                        @endif
                        <div class="col-md-9 eventdetail">
                            <h4>{{$event->title}}</h4>
                            <p><b>Venue:</b> {{$event->venue}}</p>
                            <p><b>Time:</b> {{date('g:i A', strtotime($event->time))}}</p>
                            <p><b>Date:</b>  {{date('d-m-y', strtotime($event->time))}}</p>
                            <p><b>Status:</b> {{$event->status}}</p>
                            <a href="{{route('event.single', $event->slug)}}">read more</a>
                        </div>
                    </div>
                    @endforeach

                @endif          
               </div>
               @include('frontend.partials.sidebar') 
            </div>
        </div>
    </section>
    <!-- /About Area -->

    <div class="clearfix"></div>
    @include('frontend.partials.partner')
    
    @endsection