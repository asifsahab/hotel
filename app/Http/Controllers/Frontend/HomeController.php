<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Area;
use App\Models\Room;

class HomeController extends Controller
{
    public function index(){

        $city = City::all();
        $room = Room::latest()->take(3)->get();
        $totalroom = Room::count();

        return view('frontend.index')
        ->with('city',$city)
        ->with('totalroom',$totalroom)
        ->with('room',$room);

    }

public function roomdetail(Request $request,$hotelname)
{
    $hotelname2 = $hotelname;
    $room = Room::where('hotelname', $hotelname2)->first();

    return view('frontend.roomdetail')
    ->with('room',$room);

}
public function roombooking(Request $request,$hotelname)
{
    $hotelname2 = $hotelname;
    $room = Room::where('hotelname', $hotelname2)->first();

    return view('frontend.booking')
    ->with('room',$room);

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
        $room = Room::all();
        return view('frontend.room')
        ->with('room', $room);
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
