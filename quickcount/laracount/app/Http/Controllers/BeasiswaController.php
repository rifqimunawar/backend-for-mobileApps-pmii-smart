<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $beasiswa =Beasiswa::all();
      return view("server.beasiswa.index", compact("beasiswa"));
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.beasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $beasiswa = new Beasiswa();
      $beasiswa->title = $request->input('title');
      $beasiswa->description = $request->input('description');
      $beasiswa->link = $request->input('link');

      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'Beasiswa_uninus' . '_' . $request->title . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1000, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $beasiswa->img =  $newFileName;
      }
      
      $beasiswa->save();

      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.beasiswa');
    }
    /**
     * Display the specified resource.
     */
    public function show($id, Beasiswa $beasiswa)
    {
        $beasiswa = Beasiswa::find($id);
        return view('server.beasiswa.show', compact('beasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Beasiswa $beasiswa)
    {
        $beasiswa = Beasiswa::find($id);
        return view('server.beasiswa.edit', compact('beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Beasiswa $beasiswa)
    {
      $beasiswa = Beasiswa::find($id);
      $beasiswa->title = $request->input('title');
      $beasiswa->description = $request->input('description');
      $beasiswa->link = $request->input('link');

      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'Beasiswa_uninus' . '_' . $request->title . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1000, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $beasiswa->img =  $newFileName;
      }
      
      $beasiswa->save();

      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.beasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Beasiswa $beasiswa)
    {
      $beasiswa = Beasiswa::findOrFail($id);
      $beasiswa->delete();
      return redirect()->route('index.beasiswa');
    }
}
