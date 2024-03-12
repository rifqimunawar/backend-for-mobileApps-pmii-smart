<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
      $totalEvent = Event::count();
      $totalTiket = Event::sum('jumlah_tiket'); 
      $totalPenjualanTiket = Tiket::where('statusPay', 1)->count();
      $tiketBelumTerjual = $totalTiket - $totalPenjualanTiket;

      $eventTitle=Event::all();

      return view('dashboard.admin.dashboard', compact(
        'totalEvent', 
        'totalTiket', 
        'totalPenjualanTiket', 
        'tiketBelumTerjual',
        'eventTitle',
      ));
    }
}
