<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chair;

use Session;
use Illuminate\Support\Facades\DB;
class DispchairController extends Controller
{
    public function index()
    {
        $data= Chair::all();
        return view('chair',['chairs'=>$data]);
    }
}
