<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class HomeController extends Controller
{
    public function index(){

        $city = City::all();
        return view('frontend.index')
        ->with('city',$city);

    }

    public function about(){
        return view('frontend.about');
    }
    public function booking(){
        return view('frontend.booking');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function room(){
        return view('frontend.room');
    }
    public function service(){
        return view('frontend.service');
    }
    public function team(){
        return view('frontend.team');
    }
    public function testimonial(){
        return view('frontend.testimonial');
    }
}
