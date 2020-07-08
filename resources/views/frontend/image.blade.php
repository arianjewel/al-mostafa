@extends('frontend.layouts.app')
@section('content')
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2>Image Gallery</h2>
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
                    <div align="center">
                        <button class="btn btn-default filter-button filter" data-filter="all">All</button>
                        @foreach(\App\ImageCategory::has('images')->orderBy('name')->get() as $category)
                        <button class="btn btn-default filter-button filter" data-filter=".{{$category->slug}}">{{$category->name}}</button>
                        @endforeach
                    </div>
                    <br/>
                    <div class="items">
                        @foreach(\App\Image::latest()->get() as $image)
                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 mix {{$image->category->slug}}">
                                <img src="{{asset($image->image)}}" class="img-responsive">
                            </div>
                        @endforeach
                       
                    </div>
               </div>
               @include('frontend.partials.sidebar') 
            </div>
        </div>
    </section>
    <!-- /About Area -->















    <div class="clearfix"></div>
    @include('frontend.partials.partner') 
@push('script')
<script type="text/javascript">
$( document ).ready(function() {
    $('.items').mixItUp();       
});
</script>
@endpush
@endsection