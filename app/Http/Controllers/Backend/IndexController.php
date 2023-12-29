<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Room;
use App\Models\Category;

class IndexController extends Controller
{
    public function admin(){
        $room = Room::count();
        $city = City::count();
        return view('backend.index')
        ->with('room',$room)
        ->with('city',$city);
    }

}
