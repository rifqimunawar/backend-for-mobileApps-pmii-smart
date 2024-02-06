<?php

namespace App\Livewire;

use App\Models\Paslon;
use Livewire\Component;

class Chart extends Component
{
  protected $listeners = ['SuaraStore' => 'render'];
    public function render()
    {
      $suaraSatu = Paslon::where('suara', '1')->get();
      $totalSuaraSatu = $suaraSatu->count();

      $suaraDua = Paslon::where('suara', '2')->get();
      $totalSuaraDua = $suaraDua->count();

      $suaraTiga = Paslon::where('suara', '3')->get();
      $totalSuaraTiga = $suaraTiga->count();


        return view('livewire.chart', compact('totalSuaraSatu','totalSuaraDua', 'totalSuaraTiga'));
    }
}
