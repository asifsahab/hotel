<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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

    public function registerData(){
        $data = DB::table('room')->get();
        return view('backend.roomdata',['data' => $data]);
    }

    public function roomDelete($id){
        $data = DB::table('room')->where('id', $id);

        if ($data) {

            DB::table('room')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Room deleted successfully.');

        } else {
            return redirect()->back()->with('msg', 'Room not found or already deleted.');
        }
    }




}
