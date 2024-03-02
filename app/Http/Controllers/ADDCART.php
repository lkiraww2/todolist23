<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class ADDCART extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        $username= $request->user()->name;
        $products=Product::where('creadt_at',$username)->select('image','name','company')->get();
        return view('products.AddCart',compact('products'));
    }
    public function show(){
        return 'h';
    }


}
