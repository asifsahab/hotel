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



    public function cityData(){
        $data = City::paginate(5);
        return view('backend.city.citydata',['data' => $data]);
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
    public function cityUpdate($id){
        //$data = DB::table('city')->where('id', $id)->get();
        $data = DB::table('city')->find($id);
        return view('backend.city.updateCity',['data' => $data]);
    }
    public function updated(Request $req, $id){
        $req->validate([
            'city' =>'required'
        ]);
        $data = DB::table('city')->where('id', $id)->update(
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
