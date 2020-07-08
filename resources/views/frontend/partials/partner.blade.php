<!-- Partner Area -->
<section class="partner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section_head3">
                <h2>Our Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="partner-carousel owl-carousel owl-theme">
                @foreach(\App\Partner::all() as $partner)
                    <div class="item">
                        <div class="single-partner-img">
                            <img style="height:150px" src="{{asset($partner->image)}}" alt="{{$partner->name}}">
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Partner Area -->