<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri =galeri::all();
        return view("server.galeri.index", compact("galeri"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("server.galeri.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $galeri = new Galeri();
      
      $galeri->title = $request->input('title'); 

      
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'Dema_uninus' . '_' . $request->title . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $galeri->img =  $newFileName;
      }
      
      $galeri->save();

      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.galeri');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Galeri $galeri)
    {
        $galeri=Galeri::find($id);
        return view('server.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Galeri $galeri)
    {
      {
        $galeri = Galeri::find($id);
        
        $galeri->title = $request->input('title'); 
  
        
        if ($request->hasFile('img')) {
          $image = $request->file('img');
          $newFileName = 'Dema_uninus' . '_' . $request->title . '_' . now()->timestamp . '.' . 
          $image->getClientOriginalExtension();
  
          // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
          $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
            $constraint->aspectRatio();
            })->save(public_path('img/' . $newFileName));
  
          $galeri->img =  $newFileName;
        }
        
        $galeri->save();
  
        // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
        return redirect()->route('index.galeri');
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Galeri $galeri)
    {
      $galeri = Galeri::findOrFail($id);
      $galeri->delete();
      return redirect()->route('index.galeri');
    }
}
