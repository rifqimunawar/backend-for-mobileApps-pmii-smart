<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class QRController extends Controller
{
  public function scanQR()
  {
    $id_user = Auth::user();


    // $users = User::with('tiket')->get();
    // $tiket = Tiket::with('users')->get();

    // dd($tiket);
      return view('scan_qr', compact('id_user'));
  }
  public function qrScanResult(Request $request)
{
    $result = $request->input('result');

    // Decode JSON data from request body
    $data = json_decode($request->getContent(), true);
    
    // Extract userId from decoded JSON data
    $userId = $data['userId'];
    
    $tiket = Tiket::where('qr_code', $result)->first();
    $icon = 'error'; // Default icon
    $title = 'Error'; // Default title
    $message = 'An error occurred'; // Default message
    
    if (!$tiket) {
        $message = 'Gunakan tiket asli!!';
    } elseif ($tiket->status) {
      $getTime = $tiket->updated_at->format('Y-m-d H:i:s'); // Format waktu terakhir tiket diperbarui
      $userUpdate = $tiket->users()->latest()->first()->name; // Dapatkan nama pengguna terbaru yang memperbarui tiket
      $message = 'Tiket sudah digunakan pada: ' . $getTime . ' oleh: ' . $userUpdate;
    } else {
        // Dapatkan pengguna berdasarkan ID yang diberikan
        $user = User::find($userId);
        
        if (!$user) {
            $message = 'User tidak ditemukan';
        } else {
            // Attach user ke tiket
            $tiket->users()->attach($userId);
            
            // Set status tiket menjadi digunakan
            $tiket->status = true;
            $tiket->save();
            
            $icon = 'success';
            $title = 'Success';
            $message = 'Tiket valid dan berhasil digunakan';
        }
    }
    
    return response()->json(['icon' => $icon, 'title' => $title, 'message' => $message], 200);
}

  

  
  
}
