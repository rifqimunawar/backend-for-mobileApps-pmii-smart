<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
      $categories =Category::with('post')->get();

      // dd($categories);
      return view("server.categories.index", compact("categories"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      return view("server.categories.create");
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    Category::create($request->all());

    // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
    return redirect()->route('index.categoryPost');
  }


  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id, Request $request, Category $categories)
  {
      $categories=Category::find($id);
      return view('server.categories.edit', compact('categories'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update($id, Request $request, Category $categories)
  {
    $category = Category::find($id);
    $category->update($request->all());

    return redirect()->route('index.categoryPost');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id, Category $categories)
  {
    $categories = Category::findOrFail($id);
    $categories->delete();
    return redirect()->route('index.categoryPost');
  }
}
