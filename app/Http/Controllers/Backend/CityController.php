<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

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
        return redirect()->back()->with('success', 'City saved successfully.');
    }

    public function cityData(){
        $data = DB::table('city')->get();
        return view('backend.citydata',['data' => $data]);
    }
    public function cityDelete($id){
        $data = Room::where('city_id', $id)->count();
        $city = City::where('id',$id)->first();
        if($data==0)
        {
            $city->delete();
        return redirect()->route('citydata')->with('success',"Deleted successfully");

        }

        return redirect()->back()->with('msg', 'Unable to delete City. '.$data.' active record are associated with it.');

    }
}
