<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use App\Models\Tiket;
use App\Mail\TiketEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Validation\ValidationException;

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
      // If already exists, then regenerate QR code
      $qr_code = 'event_' . $request->event_id . '_' . Str::random(20);
    }

    // $event_id = $request->event_id;
    // Get user IP address from https://api.ipify.org/
    // $ip_address_response = Http::get('https://api.ipify.org/');
    // $ip_address = $ip_address_response->body();

    // Check if IP address already exists
    // if (Tiket::where('ip_address', $ip_address)->exists() && Tiket::where('event_id', $event_id)->exists()) {
    //     return inertia('IpAdress', ['ip_address' => $ip_address]);
    // }



    // Save ticket along with QR code file name
    $tiket = Tiket::create([
      'name' => $request->name,
      'wa' => $request->wa,
      'email' => $request->email,
      'event_id' => $request->event_id,
      'qr_code' => $qr_code, // Save QR code file name
    ]);

    // Ambil gross_amount dari model Event yang terkait dengan Tiket
    $event = Event::findOrFail($request->event_id);
    $gross_amount = $event->rp;

    // Set your Merchant Server Key====================================
    \Midtrans\Config::$serverKey = config('midtrans.serverKey');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = config('midtrans.isProduction');
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = config('midtrans.is3ds');

    $params = array(
      'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => $gross_amount,
      )
    );

    $snapToken = \Midtrans\Snap::getSnapToken($params);
    $tiket->snap_token = $snapToken;
    $tiket->save();

    return view('frontend.konfirmasi', compact('qr_code'));
    // return redirect()->route('tiket.checkout', $qr_code);
  }

  public function checkout($qr_code)
  {
    $tiket = Tiket::where('qr_code', $qr_code)->firstOrFail();
    $parts = explode('_', $qr_code);
    $event_id = $parts[1];
    $event = Event::findOrFail($event_id);
    // return Inertia::render('EventCheckout', ['tiket'=>$tiket]);
    return view('frontend.checkout', compact('tiket', 'event'));
  }
  public function success($qr_code, $snap_token)
  {
    // Ambil data tiket berdasarkan snap token
    $tiket = Tiket::with('event')->where('snap_token', $snap_token)->firstOrFail();

    // Update status pembayaran
    $tiket->statusPay = true;

    // Mengambil alamat IP pengguna
    // $ip_address_response = Http::get('https://api.ipify.org/');
    // $ip_address = $ip_address_response->body();

    // Memperbarui alamat IP tiket
    // $tiket->ip_address = $ip_address;

    $tiket->save();

    $events = Event::where('id', $tiket->event_id)->firstOrFail();
    $events->update(['jumlah_tiket' => $events->jumlah_tiket - 1]);
    $events->img = config('app.MASTER_IMG_URL') . 'img/' . $events->img;
    $qrCodeUrl = 'https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode($qr_code) . '&size=400x400';
    $pesan = "
    <h3>Terima Kasih</h3>
    <h4>{$tiket->name} anda sudah melakukan pembelian tiket {$events->title}</h4>
    <p>jangan lupa untuk datang pada {$events->date}, jam {$events->time} di {$events->place}</p>
    <p>scan tiket dibawah ketika memasuki area event</p>
    <img src=\"$qrCodeUrl\" alt=\"QR Code\">
    ";


    $data_email = [
      'subject' => $events->title,
      'sender_name' => 'rifqimunawar48@gmail.com',
      'isi' => $pesan
    ];
    Mail::to($tiket->email)->send(new TiketEmail($data_email));
    return inertia('GetTiket', ['tiket' => $tiket, 'event' => $events, 'qrCode' => $qr_code]);
  }
}
