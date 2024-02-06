<?php

namespace App\Http\Controllers\Client;

use App\Models\Home;
use App\Models\Post;
use App\Models\Agenda;
use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
  public function index()
  {
      $dataHome = Home::all();
      $galery = Galeri::latest()->take(4)->get();
      $postLatest = Post::where('status', 1)->latest()->get();
      $dataKegiatan = Agenda::latest()->get();
      $navbarCategory = Category::all();
  
      // @dd($dataHome);
      return view('clients.home', compact('dataHome', 'dataKegiatan', 'postLatest', 'galery', 'navbarCategory'));
  }
  
  
}
