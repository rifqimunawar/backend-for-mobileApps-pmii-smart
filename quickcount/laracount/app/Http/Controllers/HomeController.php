<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard ()
    {
        return view('server.index');
    }

        /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $home = Home::all();
        return view('server.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      $home = new Home();
      
      $home->title = $request->input('title'); 

      
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'home' . '_' . $request->name . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $home->img =  $newFileName;
      }
      
      $home->save();

      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.home');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Home $home)
    {
        $home = Home::find($id);
        return view('server.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Home $home)
    {

      $home = Home::find($id);
      
      $home->title = $request->input('title'); 
      $home->description = $request->input('description'); 

      
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'home' . '_' . $request->name . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $home->img =  $newFileName;
      }
      
      $home->save();
      Alert::success('Terima Kasih', 'Home Page Berhasil Diubah');
      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
