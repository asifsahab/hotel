<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'city' =>'required'
        ]);


        $table = new City;
        $table->City = $request->city;
        $table->save();
        return redirect()->back();
    }
}
