<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Room;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Booking;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function admin(){
        $room = Room::count();
        $city = City::count();
        $booking = Booking::count();
        $today = Carbon::today();
        $totalcontact = Contact::whereDate('created_at', $today)->count();
        $totalbooking = Booking::whereDate('created_at', $today)->count();
        $contactdata = Contact::all();
        return view('backend.index')
        ->with('room',$room)
        ->with('totalcontact',$totalcontact)
        ->with('contactdata',$contactdata)
        ->with('totalbooking',$totalbooking)
        ->with('city',$city)
        ->with('booking',$booking);
    }

}
