<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Category;

class IndexController extends Controller
{
    public function admin(){
        return view('backend.index');
    }
    public function roomregister()
    {
        $city = City::all();
        $category = Category::all();
        return view('backend.room')
        ->with('city',$city)
        ->with('category',$category);
    }
    public function city()
    {
        return view('backend.city');
    }
}
