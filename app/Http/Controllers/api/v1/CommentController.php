<?php

namespace App\Http\Controllers\api\v1;
;

use App\Comment;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUpdateRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(Request $request)
    {
        $comments = Comment::all();

        return view('comment.index', compact('comments'));
    }


    public function create(Request $request)
    {
        return view('comment.create');
    }

    public function store(CommentStoreRequest $request)
    {
        $comment = Comment::create($request->all());

        $request->session()->flash('comment.id', $comment->id);

        return redirect()->route('comment.index');
    }


    public function show(Request $request, Comment $comment)
    {
        return view('comment.show', compact('comment'));
    }


    public function edit(Request $request, Comment $comment)
    {
        return view('comment.edit', compact('comment'));
    }

    public function update(CommentUpdateRequest $request, Comment $comment)
    {
        $comment->update([]);

        $request->session()->flash('comment.id', $comment->id);

        return redirect()->route('comment.index');
    }


    public function destroy(Request $request, Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comment.index');
    }
}
