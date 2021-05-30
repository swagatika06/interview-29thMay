<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function saveUser(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        $user->contact = $request->contact;
        $user->save();
    
        return response()->json([
            "message" => "user record created"
        ], 201);
      }

     
            
}
