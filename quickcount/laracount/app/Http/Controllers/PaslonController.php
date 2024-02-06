<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PaslonController extends Controller
{
    public function index(){
      $suaraSatu = Paslon::where('suara', '1')->get();
      $totalSuaraSatu = $suaraSatu->count();

      $suaraDua = Paslon::where('suara', '2')->get();
      $totalSuaraDua = $suaraDua->count();

      $suaraTiga = Paslon::where('suara', '3')->get();
      $totalSuaraTiga = $suaraTiga->count();

      return view('masterClient', compact('totalSuaraSatu','totalSuaraDua', 'totalSuaraTiga'));
    }


    public function dashboard(){
      return view('masterServer');
    }

    public function store(Request $request){
      {
        $suara = new Paslon();
        
        $suara->suara = $request->input('suara'); 
        $suara->provinsi = $request->input('provinsi'); 
        $suara->usia = $request->input('usia'); 
        
        $suara->save();

        Alert::success('Terima Kasih',' anda sudah terdaftar untuk mengikuti mabim');
        return redirect()->route('dashboard.home');
      };

      $this->emit('SuaraStore');
    }
}
