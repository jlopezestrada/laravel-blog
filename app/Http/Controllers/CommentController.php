<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'post_id' => 'required|exists:posts,id',
        ]);

        Comment::create([
            'content' => $request->input('content'),
            'post_id' => $request->input('post_id'),
        ]);

        return redirect()->route('posts.show', $request->input('post_id'))->with('success', 'Comment added');
    }
}
