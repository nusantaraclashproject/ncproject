<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Get all comments
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return response()->json($comments);
    }

    /**
     * Store a new comment
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:50',
            'message' => 'required|string|max:500'
        ]);

        $comment = Comment::create($validated);

        return response()->json($comment, 201);
    }
}
