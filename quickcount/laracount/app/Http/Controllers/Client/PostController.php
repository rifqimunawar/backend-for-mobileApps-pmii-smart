<?php

namespace App\Http\Controllers\Client;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {

      // get data post berdarkan waktu terdahulu 
      // =======================
      $posts = Post::all();

      // get data post berdarkan waktu terbaru dibuat 
      // =======================
      $postLatest = Post::where('status', 1)->latest()->get();
      
      // get data post dengan category 
      // =======================
      $posts = Post::with('category')->get();

      // get data post berdasarkan tag 
      // =======================
      $tag = Tag::find(2);
      $postWithTags = $tag->posts;

      // get data post dengan tagnya 
      // =======================
      $postsWithTags = Post::with('tags')->get();
      $navbarCategory = Category::all();

      // dd($postLatest);

      return view('clients.blog', compact('posts', 'postLatest', 'navbarCategory'));
    }

    public function category($slug){
      $categoryPosts = Post::with('category')
          ->whereHas('category', function ($query) use ($slug) {
              $query->where('slug', $slug);
          })
          ->get();
  
      $thisCategory = Category::where('slug', $slug)->first();
      $navbarCategory = Category::all();
  
      return view('clients.blogCategory', compact('categoryPosts', 'thisCategory', 'navbarCategory'));
  }
  
  



    // public function show($slug)
    // {
    //     $post = Post::where('slug', $slug)
    //         ->with('category', 'comments', 'user')
    //         ->where('status', 1)
    //         ->orderBy('created_at', 'desc')
    //         ->firstOrFail();
    //     $post_categories = Category::with('posts')
    //         ->whereHas('posts', function ($query) {
    //             $query->where('status', 1);
    //         })
    //         ->orderBy('title')
    //         ->latest()
    //         ->get();
    //     $trending = Post::with('category', 'user')
    //         ->where('status', '1')
    //         ->orderBy('views', 'desc')
    //         ->paginate(15);
    //     $tags = Tag::with('posts')
    //         ->whereHas('posts', function ($query) {
    //             $query->where('status', 1);
    //         })
    //         ->orderBy('title')
    //         ->latest()
    //         ->get();

    //     ++$post->views;
    //     $post->update();
    //     return view("client.siggleBlog", compact('post', 'post_categories', 'tags', 'user', 'trending'));
    // }

    public function show($slug){
      $categories = Category::with(['post' => function ($query) {
        $query->where('status', 1);
    }])->get();
    $postLatest = Post::where('status', 1)->latest()->get();
      $post = Post::where('slug', $slug)
    ->where('status', 1)
    ->with('comments', 'user')
    ->orderBy('created_at', 'desc')
    ->firstOrFail();
    
    $tags=Tag::with(['posts' => function ($query) {
      $query->where('status', 1);
      }])->get();
    // agar sekali dilihat dihitung 1-3 view
    $randomView =   rand(1,4);
      $post->increment('views', $randomView);
      $post->save();
    $navbarCategory = Category::all();
      // dd($tags);
      return view('clients.siggleBlog', compact('post', 'categories', 'postLatest', 'tags', 'navbarCategory'));
    }
}
