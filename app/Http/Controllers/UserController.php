<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function index(){
        $datas=User::all();
        return view('back.users.users',['datas'=>$datas]);
    }

    public function add(){
        return view('back.users.add');
    }

    public function store(Request $request){
        UserService::create($request);
        return redirect()
            ->route('users.index')
            ->with('status',  __('messages.users.create'));
    }

    public function delete($id=0){
        UserService::delete($id);
        return redirect()
            ->route('users.index')
            ->with('status',  __('messages.users.delete'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('back.users.edit',['user'=>$user]);
    }

    public function update($id,Request $request){
        UserService::update($id,$request);
        return redirect()
            ->route('users.index')
            ->with('status',  __('messages.users.update'));
    }

}
