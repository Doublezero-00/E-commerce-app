<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublichomeController extends Controller
{
    public function index() {
        return view('pages.home.homepage');
    }
}
