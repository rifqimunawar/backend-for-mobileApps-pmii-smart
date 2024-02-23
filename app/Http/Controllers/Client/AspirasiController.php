<?php

namespace App\Http\Controllers\Client;

use App\Models\Aspirasi;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AspirasiController extends Controller
{
    public function index(){
      $navbarCategory = Category::all();
      return view('clients.aspirasi', compact('navbarCategory'));
    }

    public function create(Request $request){

          // Validasi form data
        $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'pesan' => 'required|string',
      ]);

      // Simpan data aspirasi ke database
      $aspirasi = new Aspirasi([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'pesan' => $request->input('pesan'),
      ]);

      $aspirasi->save();
      Alert::success('Terima Kasih', 'Masukan Anda Sangat Berharga Bagi Kami!!!');
      return redirect()->route('client.aspirasi');
    }
}
