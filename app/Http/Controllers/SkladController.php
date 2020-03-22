<?php

namespace App\Http\Controllers;

use App\Http\Services\SkladSerivce;
use App\Models\Sklad;
use Illuminate\Http\Request;

class SkladController extends Controller
{
    //
    public function index()
    {
        $datas=Sklad::all();
        return view('back.sklad.sklads',['datas'=>$datas]);
    }

    public function add(){
        return view('back.sklad.add');
    }

    public function store(Request $request){
        SkladSerivce::create($request);
        return redirect()
            ->route('sklads.index')
            ->with('status',  __('messages.sklad.create'));
    }

    public function delete($id=0){
        SkladSerivce::delete($id);
        return redirect()
            ->route('sklads.index')
            ->with('status',  __('messages.sklad.delete'));
    }

    public function edit($id){
        $data=Sklad::find($id);
        return view('back.sklad.edit',['data'=>$data]);
    }

    public function update($id,Request $request){
        SkladSerivce::update($id,$request);
        return redirect()
            ->route('sklads.index')
            ->with('status',  __('messages.sklad.update'));
    }

}
