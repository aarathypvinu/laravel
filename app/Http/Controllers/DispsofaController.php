<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sofa;

use Session;
use Illuminate\Support\Facades\DB;
class DispsofaController extends Controller
{
    public function index()
    {
        $data= Sofa::all();
        return view('sofa',['sofas'=>$data]);
    }
}
