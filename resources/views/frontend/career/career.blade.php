@extends('frontend.layouts.app')
@section('content')
<style type="text/css">
  .pagination{
    float: right;
  }
</style>
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
                  <div class="text-center" id="category_all" style="margin-bottom: 2%;">
                      <button class="btn btn-lg btn-info career_category" data-id='0'>All</button>
                      @foreach(\App\CareerCategory::all() as $category)
                      <button class="btn btn-lg btn-success career_category" data-id='{{$category->id}}'>{{$category->name}}</button>
                      @endforeach
                    </div>
                    <div id="career_table">
                      
                    </div>



                    
                                        
{{--                <div id="Paris" class="tabcontent">
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
--}}



            </div>
        </div>
    </div>
   

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


@push('script')
<script type="text/javascript">
// function openCity(evt, cityName) {
//   var i, tabcontent, tablinks;
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " active";
// }
$(document).ready(function() {
  getCategoryJob();
  $('#category_all').on('click', '.career_category', function(e){
    e.preventDefault();
    let category = $(this).data('id');
    getCategoryJob(category);
  });
});
$('#career_table').on('click', '.pagination a', function(e){
  e.preventDefault();
  let url = $(this).attr('href');
  requestAjaxUrl(url);
});

function getCategoryJob(category = 0){
    let url = "{{route('career.category')}}" + '?category='+category;
    requestAjaxUrl(url);
  
}

function requestAjaxUrl(url){
    $.ajax({
      type: 'GET',
      url,
      success: function(response){
        $('#career_table').html(response.html);
      }
    });
}

</script>
@endpush