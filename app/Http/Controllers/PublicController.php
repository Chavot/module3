<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function welcome(){

        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function show(Product $product){
        return view('show', compact('product'));
    }
    public function titles(){
        $products = Product::latest()->paginate(24);
        return view('titles', compact('products'));
    }
}
