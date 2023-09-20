<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DecoratorComment;
use App\Models\DecoratorSubmission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DecoratorCommentController extends Controller
{
    public function store(Request $request, $id)
    {
        // Find the decorator by ID
        $decorator = DecoratorSubmission::find($id);

        // Check if the decorator exists
        if (!$decorator) {
            return redirect()->back()->withErrors(['error' => 'Decorator not found.']);
        }

        // Check if the user is the owner of the decorator
        if ($decorator->user_id == Auth::id()) {
            return redirect()->back()->withErrors(['error' => 'You cannot comment on your own decorator.']);
        }

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:decorator_comments,email,NULL,id,decorator_id,' . $id,
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        // Create a new instance of the DecoratorComment model
        $comment = new DecoratorComment();
        $comment->name = $validatedData['name'];
        $comment->email = $validatedData['email'];
        $comment->rating = $validatedData['rating'];
        $comment->comment = $validatedData['comment'];
        $comment->decorator_id = $id;
        $comment->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Comment submitted successfully!');
        if (!Gate::allows('comment-decorator')) {
            return redirect()->back()->withErrors(['error' => 'You do not have permission to comment.']);
        }
    }
}
