<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }

    
    public function index()
    {
       return view("invoices.inv");
    }

    
    
}
