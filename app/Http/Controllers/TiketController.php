<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use App\Models\Tiket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
          '_token' => 'required',
          'event_id' => 'required', 
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
  
      // Ambil gross_amount dari model Event yang terkait dengan Tiket
      $event = Event::findOrFail($request->event_id);
      $gross_amount = $event->rp;
  
      // Set your Merchant Server Key====================================
      \Midtrans\Config::$serverKey = config('midtrans.serverKey');
      // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
      \Midtrans\Config::$isProduction = false;
      // Set sanitization on (default)
      \Midtrans\Config::$isSanitized = true;
      // Set 3DS transaction for credit card to true
      \Midtrans\Config::$is3ds = true;
  
      $params = array(
          'transaction_details' => array(
              'order_id' => rand(),
              'gross_amount' => $gross_amount,
          )
      );
  
      $snapToken = \Midtrans\Snap::getSnapToken($params);
      $tiket->snap_token = $snapToken;
      $tiket->save();
      

      return redirect()->route('tiket.checkout', $qr_code);
  
    }

  public function checkout($qr_code){
    $tiket = Tiket::where('qr_code', $qr_code)->firstOrFail();
    $parts = explode('_', $qr_code);
    $event_id = $parts[1];
    $event = Event::findOrFail($event_id);  
    // return Inertia::render('EventCheckout', ['tiket'=>$tiket]);
    return view ('frontend.checkout', compact('tiket', 'event'));
}

public function success($qr_code, $snap_token){
  // Ambil data tiket berdasarkan snap token
  $tiket = Tiket::with('event')->where('snap_token', $snap_token)->firstOrFail();
  
  // Update status pembayaran
  $tiket->statusPay = true;
  $tiket->save();

      // Generate QR code
      $qrCode = QrCode::size(200)
      ->color(0, 0, 255)
      ->margin(1)
          ->generate($qr_code);
  
  // Redirect ke view sukses pembayaran
  return view('frontend.successPay', compact('tiket', 'qrCode'));
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

//   public function test($qr_code){
//     $parts = explode('_', $qr_code);
//     $event_id = $parts[1];
//     $event = Event::findOrFail($event_id);  

//     return $event;
// }



}
