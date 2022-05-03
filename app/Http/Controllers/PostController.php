<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts.index', ['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $post = new Post;
        $post -> title = $request -> title;
        $post -> body = $request -> body;
        $post -> user_id = Auth::id();

        $post -> save();

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        // dd($id);
        $post = Post::find($id);
        return view('posts.show', ['post'=>$post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post'=>$post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post -> title = $request -> title;
        $post -> body = $request -> body;
        $post -> save();

        return view('posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
