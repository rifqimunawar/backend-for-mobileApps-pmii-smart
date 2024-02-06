<?php

namespace App\Http\Controllers\Client;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
  public function store(Request $request){
    $comment = new Comment();
    $comment->name = $request->name;
    $comment->post_id = $request->post_id;
    $comment->comment = $request->comment;
    $comment->save();

    Alert::success('Terima Kasih', 'Komentar anda sangat berharga bagi kami!!!');
    return redirect()->back();
  }

  public function kominfo(){
    return view ('clients.kominfo');
  }
}
