<?php


namespace App\Http\Services;

use App\Models\Sklad;
use Illuminate\Http\Request;
class SkladSerivce
{
    static function create(Request $request){
        $model=new Sklad();
        $model->name=$request->input('name');
        $model->save();
    }

    static  function delete($id=0){
        Sklad::destroy($id);
    }

    static function update($id=0,Request $request){
        $modelUser=Sklad::find($id);
        $modelUser->name=$request->input('name');
        $modelUser->save();
    }

}
