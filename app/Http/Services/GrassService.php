<?php


namespace App\Http\Services;


use App\Models\Grass;
use Illuminate\Http\Request;

class GrassService
{
    static function create(Request $request){
        $model=new Grass();
        $model->name=$request->input('name');
        $model->visible=($request->input('visible')?true:false);
        $model->save();
    }

    static  function delete($id=0){
        Grass::destroy($id);
    }

    static function update($id=0,Request $request){
        $model=Grass::find($id);
        $model->name=$request->input('name');
        $model->visible=($request->input('visible')?true:false);
        $model->save();
    }


}
