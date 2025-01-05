<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth::user()->usertype;

            if($usertype == 'user'){
                $data = Food::all();
                return view('home.index',compact('data'));
            }else{
                return view('admin.index');
            }
        }
    }

    public function myhome(){
        $data = Food::all();
        return view('home.index',compact('data'));
    }

    public function add_cart(Request $request, $id){
        if(Auth::id()){
            $food = Food::find($id);
            $cart_title = $food->title;
            $cart_detail = $food->detail;
            $cart_price = Str::remove('$',$food->price);
            $cart_image = $food->image;

            $data = new Cart;
            $data->title = $cart_title;
            $data->detail = $cart_detail;
            $data->price = $cart_price * $request->quantity;
            $data->image = $cart_image;
            $data->quantity = $request->quantity;
            $data->userid = Auth::id();

            $data->save();
            return redirect()->back()->with('success', 'Added successfully!');

        }else{
            return redirect('login');
        }
    }

    public function my_cart(){
        return view ('home.my_cart');
    }
}
