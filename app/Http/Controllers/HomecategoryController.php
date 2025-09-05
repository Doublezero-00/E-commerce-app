<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class HomecategoryController extends Controller
{
    public function index() {
        return view('pages.home.categories');
    }

    public function show($category_name) {
        $products = Products::where('category', $category_name)->get();
        return view('pages.home.displayproducts', compact('products'));
    }
}
