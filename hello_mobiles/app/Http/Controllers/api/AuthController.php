<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //register

    public function register(Request $request)
    {
        # code...



        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|string|max:255|min:6|confirmed',
            'phoneNumber' => 'required',
            'city'=>'required',
            'area'=>'required',
            'ward'=>'required',
            // 'address'=>'required',
        ]);
        

        if ($validator->fails()) {
            return response(['message' => $validator->errors(), 'code'=> 422]);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phoneNumber;
        $user->password = Hash::make($request->password);
        $user->city = $request->city;
        $user->area = $request->area;
        $user->ward = $request->ward;
        $user->address = $request->address;
        $user->save();

        return response()->json(
            [
                'message' => 'Account Created',
                'code' => 200
            ]

        );
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|',
            'password' => 'required|string',
            'oneSignal' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'errors' => [$validator->errors()],
                    'code' => 422
                ]
            );
            // return response(['error' => $validator->errors()], status: 422);
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {


            return response()->json(
                [
                    'message' => 'Login Unathorized',
                    'code' => 500,
                ]
            );
        }

        $user = $request->user();

        // $user = User::where('email',$request->email)->first();

        $tokenResult = $user->createToken('authToken')->plainTextToken;
        $user->onesignal = $request->oneSignal;
        $user->update();

        return response()->json(
            [
                'token' => $tokenResult,
                'code' => 200
            ]
        );
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete;
        return response()->json(
            [
                'message' => 'Successfully Logout',
                'code' => 200
            ]
        );
    }


}
