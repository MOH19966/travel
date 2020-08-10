<?php

namespace App\Http\Controllers\api\v1;;

use App\Comment;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('post.create');
    }

    /**
     * @param \App\Http\Requests\PostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        $request->session()->flash('post.id', $post->id);

        return redirect()->route('post.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Post $post)
    {
        $posts = Post::all(comments)->where('id', $post->id)->get();

        return view('post.show', compact('post', 'comments'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * @param \App\Http\Requests\PostUpdateRequest $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->update([]);

        $request->session()->flash('post.id', $post->id);

        return redirect()->route('post.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function chooseBestComment(Request $request)
    {
        $comment = Comment::find($id);

        return view('post.show', compact('post', 'comments'));
    }
}
