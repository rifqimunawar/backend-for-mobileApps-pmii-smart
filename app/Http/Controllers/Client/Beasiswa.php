<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Beasiswa as BeasiswaModel;

class Beasiswa extends Controller
{
    public function index (){
      $beasiswa = BeasiswaModel :: latest()->get();
      $navbarCategory = Category::all();
      return view ('clients.beasiswa', compact('beasiswa', 'navbarCategory'));
    }

    public function show($id){
      $beasiswa = BeasiswaModel :: find($id);
      return view ('clients.beasiswaShow', compact('beasiswa'));
    }
}
