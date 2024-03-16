<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // This method will show user registration page
    public function registration(){
        return view('front.account.registration');
    }

    // To save user data in database
    public function processRegistration(Request $request){
        $validator = Validator:: make($request-> all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required| min:8 |same:password2 ',
            'password2' => 'required|min:8',
        ]);
        if($validator -> passes()){

        }else{
            return response()->json([
                'status'=> false,
                'errors'=> $validator->errors()
            ]);
        }
    }

    // This method will show user login page
    public function login(){
        return view('front.account.login');
    }
}
