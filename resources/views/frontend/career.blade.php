@extends('frontend.layouts.app')
@section('content')
    <!-- Single Area -->
    <section class="single_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				 <h2>Career</h2>
    				
    			</div>
    		</div>	
    	</div>
    </section>
    <section class="single_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('img/jobs-how-to-apply-hook_1.png')}}">
                </div>
            </div>  
        </div>
    </section>
     <div class="container">
        <div class="row">
            <div class="col-md-12" id="AvailableJobs">
                <h2 class="text-center title-color">
                    JOBS AT Al-Mostafa Group
                </h2>
                <div class="text-center title-seperator">
                </div>
            </div>
        </div>
     </div>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <div class="tab" style="margin-bottom: 2%;">
                      <button class="tablinks" onclick="openCity(event, 'London')">All</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">Marketing / Sales</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Account</button>
                      <button class="tablinks" onclick="openCity(event, 'Commercial')">Commercial</button>
                      <button class="tablinks" onclick="openCity(event, 'Administration')">Administration</button> 
                      <button class="tablinks" onclick="openCity(event, 'IT')">IT</button>
                    </div>
                    
                    <div id="London" class="tabcontent">
                      <h3>All</h3>
                          <table class="table">
    
                                <tbody class="text-center">
                                @foreach(\App\Job::latest()->take(6)->get() as $job)
                                <tr>
                                    <td class="w-75"><a href="{{route('career.single', $job->slug)}}" target="_blank">{{$job->title}}</a></td>
                                    <td class="text-white" style="background-color: #0072c2">
                                        <a style="color:white" @if($job->url) href="{{$job->url}}" @else href="{{route('career.single', $job->slug)}}" @endif >Apply Online</a>
                                    </td>
                                    <td>{{date('M d, Y', strtotime($job->created_at))}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div id="Paris" class="tabcontent">
                      <h3>Marketing / Sales</h3>
                      <p>Paris is the capital of France.</p> 
                    </div>
                    
                    <div id="Tokyo" class="tabcontent">
                      <h3>Account</h3>
                      <p>Tokyo is the capital of Japan.</p>
                    </div> 
                    <div id="Commercial" class="tabcontent">
                      <h3>Commercial</h3>
                      <p>Tokyo is the capital of Japan.</p>
                    </div>
                    <div id="Administration" class="tabcontent">
                      <h3>Administration</h3>
                      <p>Tokyo is the capital of Japan.</p>
                    </div>
                    <div id="IT" class="tabcontent">
                      <h3>IT</h3>
                      <p>Tokyo is the capital of Japan.</p>
                    </div>
            </div>
        </div>
    </div>
   

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<style>

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
    <!-- /Single Area -->
    <!-- About Area -->
    <section class="about-area">
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                
               </div>

            </div>
        </div>
    </section>
    <!-- /About Area -->

    <div class="clearfix"></div>
    @include('frontend.partials.partner')
    
    @endsection