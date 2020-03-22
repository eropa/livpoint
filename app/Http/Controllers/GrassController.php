<?php

namespace App\Http\Controllers;

use App\Http\Services\GrassService;
use App\Models\Grass;
use Illuminate\Http\Request;

class GrassController extends Controller
{
    public function index()
    {
        $datas=Grass::all();
        return view('back.grass.grass',['datas'=>$datas]);
    }

    public function add(){
        return view('back.grass.add');
    }

    public function store(Request $request){
        GrassService::create($request);
        return redirect()
            ->route('grass.index')
            ->with('status',  __('messages.grass.create'));
    }

    public function delete($id=0){
        GrassService::delete($id);
        return redirect()
            ->route('grass.index')
            ->with('status',  __('messages.grass.delete'));
    }

    public function edit($id){
        $data=Grass::find($id);
        return view('back.grass.edit',['data'=>$data]);
    }

    public function update($id,Request $request){

        GrassService::update($id,$request);
        return redirect()
            ->route('grass.index')
            ->with('status',  __('messages.grass.update'));
    }
}
