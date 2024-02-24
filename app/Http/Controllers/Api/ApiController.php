<?php

namespace App\Http\Controllers\Api;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ApiController extends Controller
{
  public function home(Request $request)
  {
      $data = Home::all();

      // Loop untuk menambahkan link sebelum img
      foreach ($data as $item) {
          $item->img = 'https://pmiismart.iconnet-operation.com/img/' . $item->img;
          $item->img = 'http://127.0.0.1:8000/img/' . $item->img;
      }

      return response()->json($data);
  }

  public function listBlogs()
  {
      $posts = Post::latest()->take(3)->get(['id', 'title', 'img']);
      foreach ($posts as $item) {
        $item->img = 'https://pmiismart.iconnet-operation.com/img/' . $item->img;
        // $item->img = 'http://127.0.0.1:8000/img/' . $item->img;
    }
      return response()->json($posts);
  }
  

}
