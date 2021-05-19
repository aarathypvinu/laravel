<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

use Session;
use Illuminate\Support\Facades\DB;
class DisptableController extends Controller
{
    public function index()
    {
        $data= Table::all();
        return view('table',['tables'=>$data]);
    }
}
