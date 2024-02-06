<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $pengurus = Pengurus::all();
      return view('server.pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      $pengurus = new Pengurus();
      
      $pengurus->name = $request->input('name'); 
      $pengurus->jabatan = $request->input('jabatan'); 
      $pengurus->username_ig = $request->input('username_ig'); 

      
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'pengurus' . '_' . $request->name . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1000, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $pengurus->img =  $newFileName;
      }
      
      $pengurus->save();
      Alert::success('Terima Kasih', 'Pengurus Berhasil Ditambahkan!!!');
      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.pengurus');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Pengurus $pengurus)
    {
      $pengurus = Pengurus::find($id);
      return view('server.pengurus.edit', compact('pengurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Pengurus $pengurus)
    {

      $pengurus = Pengurus::find($id);
      
      $pengurus->name = $request->input('name'); 
      $pengurus->jabatan = $request->input('jabatan'); 
      $pengurus->username_ig = $request->input('username_ig'); 

      
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'pengurus' . '_' . $request->name . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1000, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $pengurus->img =  $newFileName;
      }
      
      $pengurus->save();
      Alert::success('Terima Kasih', 'Pengurus Berhasil Diubah');
      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.pengurus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Pengurus $pengurus)
    {
      $pengurus = Pengurus::findOrFail($id);
      $pengurus->delete();
      // Alert::success('Mantap Sahabat', 'Quote Berhasil Dihapus');
      return redirect()->route('index.pengurus');
  }
}
