<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;


class CategoriesController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        return view('categories.Index', [ 'categories' => $category ]);
    }
    public function create()
    {
        return view('categories.Create');
    }
    public function createCategory(Request $request)
    {
        $category = new Categories;

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('categories/index');
    }

    public function updateView(Request $request) {
        $category = Categories::find($request->id);
        return view('categories.Edit', [ 'category' => $category]);
    }
    public function update(Request $request) {
        $category = Categories::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect("categories/index");
    }

    public function delete(Request $request) {
        $category = Categories::find($request->id);
        $category->delete();
        return redirect("categories/index");
    }
}
