<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Table;
use Session;
use Illuminate\Support\Facades\DB;
class TableController extends Controller
{
    function tabledropview($id)
    {
         $data= Table::find($id);
         return view('tabledropview',['tables'=>$data]);
        
    }
}
