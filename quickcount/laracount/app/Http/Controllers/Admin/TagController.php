<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('posts')->get();

        // dd($tags);
        return view('server.tags.index', compact('tags'));

    }

    public function create()
    {
        return view('server.tags.create');
    }

    public function store(Request $request)
    {
        Tag::create($request->all());

        return redirect()->route('tags.index')->with('success', 'Tag created successfully!');
    }

    public function edit(int $id)
    {
        $tag = Tag::findOrFail($id);

        return view('server.tags.edit', compact('tag'));
    }

    public function update(Request $request, int $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        return redirect()->route('tags.index')->with('success', 'Tag updated successfully!');
    }

    public function destroy(int $id)
    {
        $tag = Tag::findOrFail($id);

        if ($tag->posts()->count()) {
            return redirect()->route('tags.index')->with('error', 'Error! The tag has entries.');
        }

        $tag->delete();

      return redirect()->route('tags.index')->with('info', 'Tag deleted successfully!');
  }
}
