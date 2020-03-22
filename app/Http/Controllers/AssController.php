<?php

namespace App\Http\Controllers;

use App\Http\Services\AssService;
use App\Models\Ass;
use App\Models\Grass;
use Illuminate\Http\Request;

class AssController extends Controller
{

    public function index($id)
    {
        $datas=AssService::selectgr($id);
        $datagr=Grass::find($id);
        return view('back.ass.ass',['datas'=>$datas,'idgroup'=>$id,'datagr'=>$datagr]);
    }



    public function add($idgroup){
        $datagr=Grass::find($idgroup);
        return view('back.ass.add',['idgroup'=>$idgroup,'datagr'=>$datagr]);
    }

    public function store(Request $request){
        AssService::create($request);
        return redirect()
            ->route('ass.index',['id'=>$request->input('grass_id')])
            ->with('status',  __('messages.ass.create'));
    }

    public function delete($id=0){
        $dadaAss=Ass::find($id);
        $idgroup=$dadaAss->grass_id;
        AssService::delete($id);
        return redirect()
            ->route('ass.index',['id'=>$idgroup])
            ->with('status',  __('messages.ass.delete'));
    }

    public function edit($id){
        $dadaAss=Ass::find($id);
        $datagr=Grass::all();
        return view('back.ass.edit',['data'=>$dadaAss,'datagr'=>$datagr]);
    }

    public  function update($id,Request $request){
        AssService::update($id,$request);
        return redirect()
            ->route('ass.index',['id'=>$request->input('grass_id')])
            ->with('status',  __('messages.ass.update'));
    }

}
