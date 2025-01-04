<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class AdminController extends Controller
{
    public function add_food(){
        return view('admin.otherpages.add_food');
    }

    public function upload_food(Request $request){

        $data = new Food;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->price = $request->price;

        $image = $request->img;
        $imageName = time() . '_' . $image->getClientOriginalName();
        $request->img->move('storage/foodImage',$imageName);
        $data->image = $imageName;

        $data->save();
        return redirect()->back()->with('success', 'Food item uploaded successfully!');
    }

    public function view_food(){
        $data = Food::all();
        return view('admin.otherpages.show_food',compact('data'));
    }
}
