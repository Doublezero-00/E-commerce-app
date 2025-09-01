<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $response['categories'] = Category::all();
        return view('pages.categories.index')->with($response);
    }

    public function create() {
        return view('pages.categories.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Category::create($data);
        return redirect()->route('categories.index');
    }

    public function edit($id) {
        $response['category'] = Category::find($id);
        return view('pages.categories.edit')->with($response);
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        Category::find($id)->update($data);
        return redirect()->route('categories.index');
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }

    public function status($id) {
        $category = Category::find($id);
        if($category->status == 1){
            $category->status = 0;
        }
        else if($category->status == 0){
            $category->status = 1;
        }
        $category->save();
        return redirect()->route('categories.index');
    }
}
