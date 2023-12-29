<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category()
    {
        return view('backend.Category.category');
    }

    public function categoryData(Request $req){

        $name = $req['search'] ?? " ";

    if ($name != " ") {
        $data = Category::where('name', 'LIKE', "%$name%")->paginate(5);
    } else {
        $data = Category::paginate(5);
    }
        return view('backend.Category.categorydata',['data' => $data]);
    }

    public function categoryDelete($name){
        $category = Category::where('name', $name)->first();
        $id = $category->id;
        $category_data = Category::where('id',$id)->first();
        $data = Room::where('category_id', $id)->count();
        if($data==0)
        {
            $category_data->delete();
            return redirect()->route('categorydata')->with('success',"Deleted successfully");

        }

        return redirect()->back()->with('msg', 'Unable to delete Category. '.$data.' active record are associated with it.');

    }

    public function categorySubmit(Request $request)
    {
        $request->validate([
            'roomtype' =>'required'
        ],
    [
        'roomtype.required' =>'Please Enter Category....',
    ]);

        $category = new Category();
        $category->name = $request->roomtype;
        $category->save();
        return redirect()->back()->with('success', 'Category saved successfully.');
    }

    public function categoryUpdate($name){
        $category = Category::where('name', $name)->first();
        $id = $category->id;
        $data = Category::where('id',$id)->first();

        return view('backend.Category.updateCategory',['data' => $data]);
    }

    public function updated(Request $req, $name){

        $req->validate([
            'name' =>'required'
        ]);

        $category = Category::where('name', $name)->first();
        $id = $category->id;
        $data = Category::where('id',$id)->update(
            [
                'name' => $req->name,
            ]
        );
        if($data){
            return redirect()->route('categorydata')->with('success',"Updated successfully");
        }

        return redirect()->back()->with('msg', 'No Update. Please Update Your Data or Go Back');
    }
}
