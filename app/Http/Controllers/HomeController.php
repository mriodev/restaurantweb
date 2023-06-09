<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\User;
use App\Models\Foodchef;
class HomeController extends Controller
{
    public function index()
    {
        $data=Food::all();
        $data2=Foodchef::all();
        return view ("home", compact("data","data2"));

    }

    public function redirects(){
        $data=Food::all();
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else{
            return view('home', compact('data'));
        }
    }
}
