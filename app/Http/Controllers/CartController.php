<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{   
    public function index() {
        $cart_products = Cart::all();
        return view('pages.home.cart', compact('cart_products'));
    }

    public function display($id) {
        $data = Products::findOrFail($id);

        Cart::create([
            'product_id' => $data->id,
            'name' => $data->name,
            'price' => $data->price,
            'image' => $data->image,
        ]);
        return redirect()->back();
    }

    public function remove($id) {
        Cart::find($id)->delete();
        return redirect()->back();
    }
}
