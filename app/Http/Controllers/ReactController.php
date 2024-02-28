<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ReactController extends Controller
{
  public function home() {
    $name = 'rifqi';
    return Inertia::render('Home', ['name' => $name]); 
  }

}
