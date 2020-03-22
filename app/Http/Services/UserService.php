<?php


namespace App\Http\Services;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserService
{
    static function create(Request $request){
        $modelUser=new User();
        $modelUser->name=$request->input('name');
        $modelUser->email=$request->input('email');
        $modelUser->password= Hash::make($request->input('password'));
        $modelUser->role=$request->input('role');
        $modelUser->save();
    }

    static  function delete($id=0){
        User::destroy($id);
    }

    static function update($id=0,Request $request){
        $modelUser=User::find($id);
        $modelUser->name=$request->input('name');
        $modelUser->email=$request->input('email');
        $modelUser->role=$request->input('role');
        $modelUser->save();
    }
}
