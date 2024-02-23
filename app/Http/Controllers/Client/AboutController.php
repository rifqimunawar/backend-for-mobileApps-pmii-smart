<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
      // $about = About::all();
      $pengurusData = Pengurus ::all();
      $navbarCategory = Category::all();

      // dd($pengurusData);
      return view ('clients.about', compact('pengurusData', 'navbarCategory'));
    }
}
