<?php


namespace App\Http\Services;

use App\Models\Client;
use Illuminate\Http\Request;
class ClientService
{
    static function create(Request $request){
        $model=new Client();
        $model->name=$request->input('name');
        $model->save();
    }

    static  function delete($id=0){
        Client::destroy($id);
    }

    static function update($id=0,Request $request){
        $modelUser=Client::find($id);
        $modelUser->name=$request->input('name');
        $modelUser->save();
    }

}
