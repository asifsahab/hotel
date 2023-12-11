<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class RoomController extends Controller
{
    public function index()
    {
        return view('backend.category');
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
        return redirect()->back();
    }
    public function roomsubmit(Request $request){
        dd($request->all());
    }
}
