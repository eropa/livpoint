<?php

namespace App\Http\Controllers;

use App\Models\Grass;
use Illuminate\Http\Request;

class GrassController extends Controller
{
    public function index()
    {
        $datas=Grass::all();
        return view('back.grass.grass',['datas'=>$datas]);
    }

}
