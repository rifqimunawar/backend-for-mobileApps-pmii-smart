<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TiketController extends Controller
{

  public function create(){
    return view('pendaftaran.index');
  }

  public function store(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'wa' => 'required|numeric', // Use 'numeric' instead of 'number'
        'email' => 'required|email', // Add 'email' validation rule to validate email format
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }


    
    $qr_code = Str::random(20);
    // Cek apakah QR code sudah ada di database
    while (Tiket::where('qr_code', $qr_code)->exists()) {
        // Jika sudah ada, maka generate ulang QR code
        $qr_code = Str::random(20);
    }
    $tiket = new Tiket();
    $tiket->name = $request->name;
    $tiket->wa = $request->wa;
    $tiket->email = $request->email;
    $tiket->qr_code = $qr_code;
    $tiket->user_id = $request->user_id;
    $tiket->save();
    
    $qr = $tiket->qr_code; 
    
    return redirect()->route('getTiket', ['tiketID' => $qr]);
    

  }


  public function getTiket($qr){
    // Generate QR code
    $qrCode = QrCode::size(200)
    ->color(0, 0, 255)
    ->margin(1)
        ->generate($qr); // Concatenate the string properly using '.'

    // Render view with QR code
    return view('pendaftaran.getTiket', compact('qrCode')); 
  }

}
