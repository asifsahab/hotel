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
    public function category()
    {
        return view('backend.category');
    }
    public function categoryData(){

        $data = DB::table('categories')->get();
        return view('backend.categorydata',['data' => $data]);
    }
    public function categoryDelete($id){
        $data = Room::where('category_id', $id)->count();
        $category = Category::where('id',$id)->first();
        if($data==0)
        {
            $category->delete();
            return redirect()->route('categorydata')->with('success',"Deleted successfully");

        }

        return redirect()->back()->with('msg', 'Unable to delete Category. '.$data.' active record are associated with it.');

    }

    public function searchhotel(Request $req)
    {
        $name = $req->search;
        $data = Room::where('hotelname','%LIKE%',$name)->first();
        return redirect()->back()->with('data',$data);

    }


    public function search(Request $request)
    {
        $city_id = $request->city;
        $room = Room::where('city_id','=',$city_id)->get();
       return view('frontend.room')->with('room',$room);
    }



    public function submitcategory(Request $request)
    {
        $request->validate([
            'roomtype' =>'required'
        ],
    [
        'roomtype.required' =>'Please Enter Room Type....',
    ]);

        $category = new Category();
        $category->name = $request->roomtype;
        $category->save();
        return redirect()->back()->with('success', 'Category saved successfully.');
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

    public function registerData(Request $req){
        $name = $req['search'] ?? " ";

        if($name != " ")
        {
        $data = Room::where('hotelname','LIKE',"%$name%")->get();
        return view('backend.roomdata',['data' => $data]);
        }
        else{

        $data = Room::all();
        return view('backend.roomdata',['data' => $data]);
        }
    }

    public function roomDelete($hotelname){
        $data_room = Room::where('hotelname', $hotelname)->first();
        $data2=$data_room->id;
        $data = Room::where('id',$data2)->first();
        if ($data) {

            $data->delete();
            return redirect()->back()->with('success', 'Room deleted successfully.');

        } else {
            return redirect()->back()->with('msg', 'Room not found or already deleted.');
        }
    }

    public function categoryUpdate($id){
        $data = DB::table('categories')->find($id);
        return view('backend.updateCategory',['data' => $data]);
    }
    public function updated(Request $req, $id){

        $req->validate([
            'name' =>'required'
        ]);

        $data = DB::table('categories')->where('id', $id)->update(
            [
                'name' => $req->name,
            ]
        );
        if($data){
            return redirect()->route('categorydata')->with('success',"Updated successfully");
        }

        return redirect()->back()->with('msg', 'No Update. Please Update Your Data or Go Back');
    }


    public function roomUpdate($id){
        $data = DB::table('room')->find($id);
        $city = City::all();
        $category = Category::all();
        return view('backend.updateRoom',['data' => $data,'city'=>$city,'category'=>$category]);
    }




}
