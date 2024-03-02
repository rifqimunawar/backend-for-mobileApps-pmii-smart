<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tiket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TiketController extends Controller
{

  public function create()
  {
      return inertia('EventForm');
  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required|max:50',
          'wa' => 'required|max:50',
          'email' => 'required|email|max:50',
          '_token' => 'required', // Pastikan _token disertakan
          'event_id' => 'required', // Pastikan _token disertakan
      ]);

   // Generate QR code
    $qr_code = 'event_' . $request->event_id . '_' . Str::random(20); 
    while (Tiket::where('qr_code', $qr_code)->exists()) {
        // Jika sudah ada, maka generate ulang QR code
        $qr_code = 'event_' . $request->event_id . '_' . Str::random(20); 
    }

   // Simpan tiket bersama dengan nama file QR code
    $tiket = Tiket::create([
        'name' => $request->name,
        'wa' => $request->wa,
        'email' => $request->email,
        'event_id' => $request->event_id,
        'qr_code' => $qr_code, // Simpan nama file QR code
    ]);


    // Nanti disini kita menyimpan midtrans

      return response()->json(['success' => true, 'message' => 'Data tiket berhasil disimpan']);
  }


  public function success($id){
    $tiket = Tiket::findOrFail($id);
    return Inertia::render('RegisterSuceess', ['tiket'=>$tiket]);
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
