<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Sofa;
use App\Models\Table;
class FAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/home1');
        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home1');
    }
    function addSofa()
    {
        return view('addsofa');
    }
    public function store(Request $request)
    {
        
        $getModel= request('Model');
        $getDescription= request('Description');
        $getMaterial= request('Material');
        $getDimension_inch= request('Dimension_inch');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        

        $sofa=new Sofa();

        $sofa->Model=$getModel;
        $sofa->Description=$getDescription;
        $sofa->Material=$getMaterial;
        $sofa->Dimension_inch=$getDimension_inch;
        $sofa->Price=$getPrice;
        $sofa->Gallery=$getGallery;
       

        $sofa->save();

        return redirect('/home1');

    }
    public function indexsofa()
    {
    
        $sofas=Sofa::all();

        return view('viewallsofas',compact('sofas'));

    
    }

    public function editsofa($id)
    {
        $sofas=Sofa::find($id);
        return view('sofaeditview',compact('sofas'));
    }

    public function updatesofa(Request $request, $id)
    {
        $sofa=Sofa::find($id);

        $getModel= request('Model');
        $getDescription= request('Description');
        $getMaterial= request('Material');
        $getDimension_inch= request('Dimension_inch');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        

        $sofa->Model=$getModel;
        $sofa->Description=$getDescription;
        $sofa->Material=$getMaterial;
        $sofa->Dimension_inch=$getDimension_inch;
        $sofa->Price=$getPrice;
        $sofa->Gallery=$getGallery;
       

        $sofa->save();

        return redirect('/viewallsofas');
    }

    public function sofadelete($id)
    {
        $sofas=Sofa::find($id);
        return view('sofadelete',compact('sofas'));
    }

    public function destroysofa($id)
    {
        $sofa=Sofa::find($id);

        $sofa->delete();

        return redirect('/viewallsofas');
    }

    function addTc()
    {
        return view('addtc');
    }

    public function storetc(Request $request)
    {
        
        $getModel= request('Model');
        $getDescription= request('Description');
        $getMaterial= request('Material');
        $getDimension_inch= request('Dimension_inch');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        

        $Table=new Table();

        $Table->Model=$getModel;
        $Table->Description=$getDescription;
        $Table->Material=$getMaterial;
        $Table->Dimension_inch=$getDimension_inch;
        $Table->Price=$getPrice;
        $Table->Gallery=$getGallery;
       

        $Table->save();

        return redirect('/home1');

    }

    public function indextc()
    {
    
        $Tables=Table::all();

        return view('viewalltc',compact('Tables'));

    
    }
    public function edittc($id)
    {
        $Tables=table::find($id);
        return view('tceditview',compact('Tables'));
    }


    public function updatetc(Request $request, $id)
    {
        $Table=Table::find($id);

        $getModel= request('Model');
        $getDescription= request('Description');
        $getMaterial= request('Material');
        $getDimension_inch= request('Dimension_inch');
        $getPrice= request('Price');
        $getGallery= request('Gallery');
        

        $Table->Model=$getModel;
        $Table->Description=$getDescription;
        $Table->Material=$getMaterial;
        $Table->Dimension_inch=$getDimension_inch;
        $Table->Price=$getPrice;
        $Table->Gallery=$getGallery;
       

        $Table->save();

        return redirect('/viewalltc');
    }

    public function Tcdelete($id)
    {
        $Tables=Table::find($id);
        return view('tcdelete',compact('Tables'));
    }

    public function destroytc($id)
    {
        $Table=Table::find($id);

        $Table->delete();

        return redirect('/viewalltc');
    }






    
}
    