<?php

namespace App\Http\Controllers;

use App\Http\Services\ClientService;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $datas=Client::all();
        return view('back.client.clients',['datas'=>$datas]);
    }

    public function add(){
        return view('back.client.add');
    }

    public function store(Request $request){
        ClientService::create($request);
        return redirect()
            ->route('clients.index')
            ->with('status',  __('messages.client.create'));
    }

    public function delete($id=0){
        ClientService::delete($id);
        return redirect()
            ->route('clients.index')
            ->with('status',  __('messages.client.delete'));
    }


}
