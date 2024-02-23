<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKegiatan = Agenda:: latest()->get();

        // dd($dataKegiatan);

        return view('server.agenda.index', compact('dataKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('server.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      // dd($request);
      $item = new Agenda();
      
      $item->name = $request->input('name'); 
      $item->date = $request->input('date'); 
      $item->location = $request->input('location'); 

      
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $newFileName = 'Dema_uninus' . '_' . $request->name . '_' . now()->timestamp . '.' . 
        $image->getClientOriginalExtension();

        // Simpan gambar yang diunggah ke direktori penyimpanan sambil mengkompresi ulang
        $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
          $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));

        $item->img =  $newFileName;
      }
      
      $item->save();

      // Redirect ke halaman yang sesuai setelah berhasil menyimpan data
      return redirect()->route('index.agenda');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id, Agenda $agenda)
    {
      $title = 'Delete Agenda !';
      $text = "Are you sure you want to delete?";
      confirmDelete($title, $text);

      $item = Agenda::findOrFail($id);
      $item->delete();
      Alert::success('Success', 'User Berhasil Dihapus'); 
      return redirect()->route('index.agenda');
    }
}
