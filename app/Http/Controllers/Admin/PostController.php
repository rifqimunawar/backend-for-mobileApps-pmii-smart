<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
      /**
   * Display a listing of the resource.
   */
  public function index()
  {
      $post =Post::latest()->get();

      // dd($post);
      return view("server.blogs.index", compact("post"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      $user = Auth::user(); // Assuming Auth::user() returns an object
      $tag = Tag::latest()->get();
      $categories = Category::all();
  
      // dd($user);
      return view("server.blogs.create", compact('categories', 'tag', 'user'));
  }
  

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $post['user_id'] = Auth::user()->id;
      $newFileName = ''; // Initialize the filename variable

      if ($request->hasFile('img')) {
          $image = $request->file('img');
          $newFileName = 'Blog_' . $request->title . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

          // Resize and save the image
          $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
              $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));
      }

      // Ensure the "status" field is cast to an integer
      $postData = array_merge($request->except('tags'), ['img' => $newFileName, 'status' => (int) $request->status]);

      $post = Post::create($postData);

      // Save the post first, then attach the tags
      $post->save();
      $post->tags()->sync($request->tags);

      return redirect()->route('index.post');
  }

    

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id, Request $request, Post $post)
  {
      // Retrieve the post from the database using the $id
      $post = Post::find($id);
  
      // Check if the post exists
      if (!$post) {
          return "error cuy";
      }
  
      // Assign the user_id to the post
      $post['user_id'] = Auth::user()->id;
  
      $tags = Tag::latest()->get();
      $categories = Category::all();
  
      return view('server.blogs.edit', compact('post', 'tags', 'categories'));
  }
  

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
      // Find the post by its ID
      $post = Post::find($id);
      $post['user_id'] = Auth::user()->id;
      if (!$post) {
          return "error cuy";
      }
  
      // Handle image upload
      if ($request->hasFile('img')) {
          $image = $request->file('img');
          $newFileName = 'Blog_' . $request->title . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
  
          // Resize and save the image
          $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
              $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));
  
          // Update the post with the new image filename
          $post->update(['img' => $newFileName]);
      }
  
      // Ensure the "status" field is cast to an integer
      $postData = array_merge($request->except('tags', 'img'), ['status' => (int) $request->status]);
  
      // Save the post first, then attach the tags
      $post->update($postData);
      $post->tags()->sync($request->tags);
  
      return redirect()->route('index.post');
  }
  

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id, Post $post)
  {

    // dd('berhasil memilih id'. $id);
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->route('index.post');
  }
}
