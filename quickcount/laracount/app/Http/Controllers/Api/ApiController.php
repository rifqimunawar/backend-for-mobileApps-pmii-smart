<?php

namespace App\Http\Controllers\Api;

use App\Models\Paslon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
  // public function home(Request $request)
  // {
  //     $data = Home::all();

  //     // Loop untuk menambahkan link sebelum img
  //     foreach ($data as $item) {
  //         // $item->img = 'https://pmiiuninus.com/img/' . $item->img;
  //         $item->img = 'http://127.0.0.1:8000/img/' . $item->img;
  //     }

  //     return response()->json($data);
  // }


  public function suaraSatu (){
    $suaraSatu = Paslon::where('suara', '1')->get();
    return response()->json($suaraSatu);
  }
  public function totalSuaraSatu(){
    $suaraSatu = Paslon::where('suara', '1')->get();
    $totalSuaraSatu = $suaraSatu->count();
    return response()->json($totalSuaraSatu);
  }


  public function suaraDua(){
    $suaraDua = Paslon::where('suara', '2')->get();
    return response()->json($suaraDua);
  }
  public function totalSuaraDua(){
    $suaraDua = Paslon ::where('suara', '2')->get();
    $totalSuaraDua = $suaraDua->count();
    return response()->json($totalSuaraDua);
  }


  public function suaraTiga(){
    $suaraTiga = Paslon::where('suara', '3')->get();
    return response()->json($suaraTiga);
  }
  public function totalSuaraTiga(){
    $suaraTiga = Paslon::where('suara', '3')->get();
    $totaSuaraTiga = $suaraTiga->count();
    return response()->json($totaSuaraTiga);
  }
}
