@extends('frontend.layouts.app')
@section('content')
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>Contact US</h2>
    	
    			</div>
    		</div>	
    	</div>
    </section>
    <!-- /Single Area -->
    <!-- About Area -->
    <br/>
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                        </div>
                        <div class="card-body">
                            <form action="{{route('contact.send')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required value="{{old('name')}}">
                                </div>
                                <div class="form-group">
                                    <label for="number">Phone Number</label>
                                    <input type="text" class="form-control" id="number" name="phone" placeholder="Phone Number" required value="{{old('phone')}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="6" required>{{old('message')}}</textarea>
                                </div>
                                <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                        <div class="card-body">
                            <p>Lake View, House N0-12, Road No-137 </p>
                            <p>Gulshan 1, Dhaka-1200</p>
                            <p>Bangladesh</p>
                            <p>Email : info@almostafagroupbd.com</p>
                            <p>Tel. +88 09666-771313</p>

                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14604.151380962865!2d90.40253082255828!3d23.781666638961703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75e4a55b48b%3A0xa13a3aabc47316c8!2zUG9saWNlIFBsYXphIENvbmNvcmQgU2hvcHBpbmcgTWFsbCwgRGhha2EgKOCmquCngeCmsuCmv-CmtiDgpqrgp43gprLgpr7gppzgpr4p!5e0!3m2!1sbn!2sbd!4v1555073906388!5m2!1sbn!2sbd" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Area -->

    <div class="clearfix"></div>

    @include('frontend.partials.partner')
    
    @endsection