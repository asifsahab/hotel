<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function admin(){
        return view('backend.index');
    }
    public function roomregister(){
        return view('backend.room');
    }
    public function city(){
        return view('backend.city');
    }
}
