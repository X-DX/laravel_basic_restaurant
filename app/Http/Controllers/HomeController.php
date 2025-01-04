<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

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
        
    }
}
