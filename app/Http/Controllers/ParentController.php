<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
}
