@extends('frontend.layouts.app')
@section('content')
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>News</h2>
    				
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
                    <div id="news-slider8">

                    @foreach(\App\Post::all() as $post)
                        <div class="post-slide8">
                            <div class="post-img">
                                @if($post->image)
                                <img src="{{asset($post->image)}}" alt="{{$post->title}}">
                                @endif
                                <div class="over-layer"></div>
                                <div class="post-date">
                                    <span class="date">{{date('d', strtotime($post->created_at))}}</span>
                                    <span class="month">{{date('M', strtotime($post->created_at))}}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{route('news.single', $post->slug)}}">{{$post->title}}</a>
                                </h3>
                                <p class="post-description">
                                    {{Str::words(strip_tags($post->body), '25')}}
                                </p>
                                <a href="{{route('news.single', $post->slug)}}" class="read-more">read more</a>
                            </div>
                        </div>
                    @endforeach
<!-- paginate korte hobe -->
                    </div>                
               </div>
               @include('frontend.partials.sidebar')
            </div>
        </div>
    </section>
    <!-- /About Area -->

    <div class="clearfix"></div>
    
    @include('frontend.partials.partner')
    
    @endsection