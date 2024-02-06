<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aspirasi = Aspirasi::all();
        return view("admin.aspirasi.index", compact("aspirasi"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Aspirasi $aspirasi)
    {
        $aspirasi = Aspirasi::find($id);
        return view("admin.aspirasi.show", compact("aspirasi"));
    }
}
