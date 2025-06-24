<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(){
        return Inertia::render('Products/Index', []);
    }
    
    public function create(){
        return Inertia::render('Products/Create', []);
    }

    public function store(Request $request){
        $products = Products::create($request->all());
    }
}
