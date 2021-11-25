<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        $validator = Validator::make($request->all(), [
            'name' =>  ['string', 'max:255', 'min:4'],
            'current_password' => [new MatchOldPassword],
            'new_password' => ['string', 'min:8'],
            // 'new_confirm_password' => ['same:new_password'],
        ]);
        $user = User::find($id);

        if ($validator->fails()) {
            return response()->json(
                [
                    'message' => $validator->errors(),
                    'code' => 422
                ]
            );
            // return response(['message' => $validator->errors(), 'code' => 422]);
            // return response(['error' => $validator->errors()], status: 422);
        }
        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('new_password')) {

            $user->password = Hash::make($request->new_password);
        }


        if ($request->hasFile('profile_image')) {
            foreach ($request->profile_image as $image){
//                $data = $request->profile_image;
                $newName = time() . $image->getClientOriginalName();
                $image->move('profileImage', $newName);
                $user->profile_image =  $newName;
            }
        }
        $user->update();
        return response()->json(
            [
                'message' => 'profile updated',
                'code' => 200
            ]
        );
        
        // return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
