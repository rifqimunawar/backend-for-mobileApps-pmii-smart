<?php

namespace App\Http\Controllers\Client;

use App\Models\Galeri;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index(){
      $galery = Galeri::latest()->get();
      $navbarCategory = Category::all();

      return view ('clients.galeri', compact('galery', 'navbarCategory'));
    }
}
