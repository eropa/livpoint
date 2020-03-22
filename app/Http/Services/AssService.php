<?php


namespace App\Http\Services;


use App\Models\Ass;
use Illuminate\Http\Request;

class AssService
{

    static function selectgr($id){
        $datas=Ass::where('grass_id',$id)->get();
        return $datas;
    }


    static function create(Request $request){
        $model=new Ass();
        $model->name=$request->input('name');
        $model->grass_id=$request->input('grass_id');
        $model->barcode=$request->input('barcode');
        $model->countbox=$request->input('countbox');
        $model->save();
    }

    static  function delete($id=0){
        Ass::destroy($id);
    }

    static function update($id,Request $request){
        $model=Ass::find($id);
        $model->name=$request->input('name');
        $model->grass_id=$request->input('grass_id');
        $model->barcode=$request->input('barcode');
        $model->countbox=$request->input('countbox');
        $model->save();
    }

}
