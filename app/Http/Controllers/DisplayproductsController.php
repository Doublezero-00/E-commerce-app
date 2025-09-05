<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class DisplayproductsController extends Controller
{
    public function index() {
        $all_products = Products::all();
        return view('pages.home.allproducts', compact('all_products'));
    }
}
