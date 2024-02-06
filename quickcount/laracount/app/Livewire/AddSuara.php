<?php

namespace App\Livewire;

use App\Models\Paslon;
use Livewire\Component;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AddSuara extends Component
{
    public function render(Request $request)
    {
      {
        $suara = new Paslon();
        
        $suara->suara = $request->input('suara'); 
        $suara->provinsi = $request->input('provinsi'); 
        $suara->usia = $request->input('usia'); 
        
        $suara->save();

        Alert::success('Terima Kasih',' anda sudah terdaftar untuk mengikuti mabim');
        return view('livewire.add-suara');
      };
    }
}
