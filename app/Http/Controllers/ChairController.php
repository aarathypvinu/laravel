<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Chair;
use Session;
use Illuminate\Support\Facades\DB;
class ChairController extends Controller
{
    function chairdropview($id)
    {
         $data= Chair::find($id);
         return view('chairdropview',['chairs'=>$data]);
        
    }
}
