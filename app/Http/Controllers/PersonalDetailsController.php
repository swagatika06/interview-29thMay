<?php

namespace App\Http\Controllers;
use App\Models\PersonalDetails;

use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{

    public function Login($data)
      {
         
          $user = Auth::user();
          $user = User::where('email' ,$data->email)->where( 'password' , $data->password)->first();
          if($user){
              $success['token'] =  $user->createToken('Token')->accessToken;
              return response(['user' => [
                    'email'=>$data->email
                  ],'Token' => $success['token']], "200");
          }else{
              return response(['error'=>'Unauthorised'], 401);
          }

    public function saveUserDetails(Request $request) {
        $userDetails = new PersonalDetails;
        $userDetails->name = $request->name;
        $userDetails->email = $request->email;
        $userDetails->contact = $request->contact;
        $userDetails->PresentLocation = $request->PresentLocation;
        $userDetails->PreferedLocation = $request->PreferedLocation;
        $userDetails->EducationDetails = $request->EducationDetails;
        $userDetails->collageEducation = $request->collageEducation;
        $userDetails->stream = $request->stream;
        $userDetails->passedOutYear = $request->passedOutYear;
        $userDetails->cgp = $request->cgp;
        $userDetails->collegeName = $request->collegeName;
        $userDetails->city = $request->city;
        $userDetails->save();
    
        return response()->json([
            "message" => "userDetails record created"
        ], 201);
      }
      
      public function getUserDetails() {
        $user = PersonalDetails::get()->toJson(JSON_PRETTY_PRINT);
        return response($user, 200);
      }
      
    
}
