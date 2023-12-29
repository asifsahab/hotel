<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    public function search(Request $request)
    {
        $city_id = $request->city;
        $room = Room::where('city_id','=',$city_id)->get();
       return view('frontend.room')->with('room',$room);
    }

    public function roomregister()
    {
        $city = City::all();
        $category = Category::all();
        return view('backend.room')
        ->with('city',$city)
        ->with('category',$category);
    }

    public function roomsubmit(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'category' => 'required',
            'hotelname' => 'required',
            'price' => 'required|integer|min:1',
            'room' => 'required|integer|min:1',
            'person' => 'required|integer|min:1',
            'checkin' => 'required',
            'checkout' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $room = new Room;
        $room->city_id = $request->input('city');
        $room->category_id = $request->input('category');
        $room->hotelname = $request->input('hotelname');
        $room->price = $request->input('price');
        $room->room = $request->input('room');
        $room->person = $request->input('person');
        $room->checkin = $request->input('checkin');
        $room->checkout = $request->input('checkout');
        $room->address = $request->input('address');
        $room->description = $request->input('description');

        $image = $request->file('image');

        $originalExtension = $image->getClientOriginalExtension();


        $fileName = 'image_' . time() . '.' . $originalExtension;
        //image_12151515.png//

        // Save the image to the storage disk
        $image->storeAs('images', $fileName, 'public');

        // Save the image file name to the room data
        $room->image = $fileName;

        // Save the room data to the database
        $room->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Room information saved successfully.');
    }

    public function roomData(Request $req){
    $name = $req['search'] ?? " ";

    if ($name != " ") {
        $data = Room::where('hotelname', 'LIKE', "%$name%")->paginate(5);
    } else {
        $data = Room::paginate(5);
    }

    return view('backend.roomdata', ['data' => $data]);
    }


    public function roomDelete($hotelname){
        $room = Room::where('hotelname', $hotelname)->first();
        $id = $room->id;
        $data = Room::where('id',$id)->first();
        if ($data) {

            $data->delete();
            return redirect()->back()->with('success', 'Room deleted successfully.');

        } else {
            return redirect()->back()->with('msg', 'Room not found or already deleted.');
        }
    }


    public function roomUpdate($hotelname){
        $room = Room::where('hotelname', $hotelname)->first();
        $id = $room->id;
        $data = Room::where('id',$id)->first();
        $city = City::all();
        $category = Category::all();
        if ($data) {
        return view('backend.updateRoom',['data' => $data,'city'=>$city,'category'=>$category]);
        }
    }

    public function roomUpdated(Request $req, $hotelname){

        $room = Room::where('hotelname', $hotelname)->first();
        $id = $room->id;
        $data = Room::where('id',$id)->update(
            [
                'city_id' => $req->city,
                'category_id' => $req->category,
                'hotelname' => $req->hotelname,
                'price' => $req->price,
                'room' => $req->room,
                'person' => $req->person,
                'checkin' => $req->checkin,
                'checkout' => $req->checkout,
                'address' => $req->address,
                'description' => $req->description,
                'image' => $req->image,
            ]
        );
        if($data){
            return redirect()->route('roomdata')->with('success',"Updated successfully");
        }

        return redirect()->back()->with('msg', 'No Update. Please Update Your Data or Go Back');
    }




}
