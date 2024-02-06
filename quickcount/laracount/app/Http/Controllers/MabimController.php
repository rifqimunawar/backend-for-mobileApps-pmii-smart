<?php

namespace App\Http\Controllers;
use App\Models\Mabim;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;

class MabimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mabim = Mabim::latest()->get();

        return view ('server.mabim.index', compact('mabim'));
    }

    public function cetak_pdf(){
      $peserta = Mabim::all();
      $tanggal = date('Y-m-d H:i:s');
  
      $pdf = PDF::loadView('server.mabim.cetak', ['peserta' => $peserta, 'tanggal' => $tanggal])
          ->setPaper('a4', 'landscape'); // Mengatur orientasi menjadi lanscape
      return $pdf->download('data-peserta-mabim-tanggal'. $tanggal .'.pdf');
  }
  
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $navbarCategory = Category::all();
      return view ('clients.mabim.create', compact('navbarCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $mabim = new Mabim();
    
    $mabim->name = $request->input('name'); 
    $mabim->nim = $request->input('nim'); 
    $mabim->angkatan = $request->input('angkatan'); 
    $mabim->prodi = $request->input('prodi'); 
    $mabim->class = $request->input('class'); 
    $mabim->ukuran_kaos = $request->input('ukuran_kaos'); 
    // $mabim->pembayaran = $request->input('pembayaran'); 
    
    // dd($mabim);
    $mabim->save();

    // Mengganti single quote dengan double quote dan menggabungkan nama ke dalam string
    Alert::success('Terima Kasih', $mabim->name . ' anda sudah terdaftar untuk mengikuti mabim');
    $navbarCategory = Category::all();

    return redirect()->route('show.mabim', ['id' => $mabim->id])->with(compact('navbarCategory'));
}


    /**
     * Display the specified resource.
     */
    public function show($id, Mabim $mabim)
    {
        $peserta = Mabim::find($id);
        $navbarCategory = Category::all();
        return view('clients.mabim.success', compact('peserta', 'navbarCategory'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Mabim $mabim)
    {
        $mabim = Mabim :: find($id);
        // dd($mabim);
        return view ('server.mabim.edit', compact('mabim'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Mabim $mabim)
    {
      $mabim = Mabim ::find($id);
      
      $mabim->name = $request->input('name'); 
      $mabim->nim = $request->input('nim'); 
      $mabim->angkatan = $request->input('angkatan'); 
      $mabim->prodi = $request->input('prodi'); 
      $mabim->class = $request->input('class'); 
      $mabim->ukuran_kaos = $request->input('ukuran_kaos'); 
      $mabim->pembayaran = $request->input('pembayaran'); 
      
      $mabim->save();
      return redirect()->route('index.mabim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Mabim $mabim)
    {
        $mabim = Mabim::find($id);
        $mabim ->delete();
        return redirect()->route('index.mabim');
    }
}
