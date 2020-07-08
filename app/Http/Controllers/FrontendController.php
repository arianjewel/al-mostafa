<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Business;
use App\Facility;
use App\Event;
use App\Post;
use App\Job;

class FrontendController extends Controller
{
    public function index(){
     	return view('frontend.home');
    }     

    public function news(){
     	return view('frontend.news');
    }    
    public function contact(){
        return view('frontend.contact');
    }     

    public function newsSingle($slug){
        $post = Post::where('slug',$slug)->first();
     	return view('frontend.news_single' ,compact('post'));
    }

    public function aboutSingle($slug){
        $about = About::where('slug',$slug)->first();
        return view('frontend.about', compact('about'));
    }    

    public function businessSingle($slug){
        $business = Business::where('slug',$slug)->first();
        return view('frontend.business', compact('business'));
    }    

    public function facilitySingle($slug){
        $business = Facility::where('slug',$slug)->first();
        return view('frontend.business', compact('business'));
    }    

    public function event(){
        $events = Event::latest()->paginate(10);
        return view('frontend.event', compact('events'));
    }    

    public function eventSingle($slug){
        $event = Event::where('slug',$slug)->first();
        return view('frontend.event_single', compact('event'));
    }    

    public function gallery(){
        return view('frontend.image');
    }    

    public function career(){
        return view('frontend.career');
    }

    public function careerSingle($slug){
        $career = Job::where('slug',$slug)->first();
        return view('frontend.career_single', compact('career'));
    } 

}
