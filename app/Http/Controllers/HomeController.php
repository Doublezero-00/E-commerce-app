<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use App\Models\User;

class HomeController extends ParentController
{
    public function index() {
        $total_categories = Category::count();
        $total_products = Products::count();
        $total_users = User::count();
        return view('pages.dashboard.index', compact('total_categories', 'total_products', 'total_users'));
    }
}
