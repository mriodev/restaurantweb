<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.user", compact("data"));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = Food::all();
        return view("admin.foodmenu", compact("data"));
    }
    public function deletemenu($id)
    {

        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatemenu($id){
        $data = food::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request, $id){
        $data = food::find($id);
        $data = new food;
        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->foodname;
        $data->price = $request->price;
        $data->description = $request->desc;
        $data->save();

        return redirect()->back();
    
    }

    public function uploadfood(Request $request)
    {
        $data = new food;
        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->foodname;
        $data->price = $request->price;
        $data->description = $request->desc;
        $data->save();

        return redirect()->back();
    }

    public function reservation(Request $request)
    {
        $data = new Reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();

        return redirect()->back();
    }

    public function viewreservation(){
        $data=Reservation::all();
        return view('admin.adminreservation', compact("data"));
    }

    public function viewchef(){
        $data=Foodchef::all();
        return view('admin.adminchef', compact("data"));
    }

    public function insertchef(Request $request){
        $data = new Foodchef;
        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();

        return redirect()->back();

    }

    public function updatechef($id){
        $data=foodchef::find($id);
        return view("admin.updatechef", compact("data"));
    }
}