<?php

namespace App\Http\Controllers;

use App\Models\Prixodhead;
use Illuminate\Http\Request;

class PrixodheadController extends Controller
{
    public function index()
    {
        return view('back.prixod.list');
    }

    public function add()
    {
        return view('back.prixod.add');
    }

}
