<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Products::all();
        return view('pages.products.index', compact('products'));
    }

    public function create() {
        return view('pages.products.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        Products::create($data);
        return redirect()->route('products.index');
    }

    public function edit($id) {
        $response['product'] = Products::find($id);
        return view('pages.products.edit')->with($response);
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        Products::find($id)->update($data);
        return redirect()->route('products.index');
    }

    public function delete($id) {
        Products::find($id)->delete();
        return redirect()->route('products.index');
    }
}
