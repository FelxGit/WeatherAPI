<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        return User::with('weather')->paginate(5);
    }

    
    public function store(Request $request){
        $user = new User;
        $user->name_title = $request->name_title;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone;
        $user->street_name = $request->street_name;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->photo = $request->file('photo')->store('users/'.$request->phone);
        $user->save();

        return response()->json($user);
    }
}
