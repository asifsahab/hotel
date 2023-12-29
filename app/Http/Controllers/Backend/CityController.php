<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function city()
    {
        return view('backend.City.city');
    }

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



    public function cityData(Request $req){
        $name = $req['search'] ?? " ";

    if ($name != " ") {
        $data = City::where('city', 'LIKE', "%$name%")->paginate(5);
    } else {
        $data = City::paginate(5);
    }

    return view('backend.City.citydata', ['data' => $data]);
    }




    public function cityDelete($city){
        //$data = Room::where('city_id', $id)->count();
        //$city = City::where('id',$id)->first();
        $city = City::where('city', $city)->first();
        $id = $city->id;
        $city_data = City::where('id',$id)->first();
        $data = Room::where('city_id', $id)->count();
        if($data==0)
        {
            $city_data->delete();
        return redirect()->route('citydata')->with('success',"Deleted successfully");

        }

        return redirect()->back()->with('msg', 'Unable to delete City. '.$data.' active record are associated with it.');

    }
    public function cityUpdate($city){
        $city = City::where('city', $city)->first();
        $id = $city->id;
        $data = City::where('id',$id)->first();
        return view('backend.city.updateCity',['data' => $data]);
    }
    public function updated(Request $req, $city){
        $req->validate([
            'city' =>'required'
        ]);
        $city = City::where('city', $city)->first();
        $id = $city->id;
        $data = City::where('id',$id)->update(
            [
                'city' => $req->city,
            ]
        );
        if($data){
            return redirect()->route('citydata')->with('success',"Updated successfully");
        }

        return redirect()->back()->with('msg', 'No Update. Please Update Your Data or Go Back');
    }

}
