<?php
// app/Http/Controllers/MessageController.php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $receivedMessages = Message::where('receiver_id', $user->id)->orderBy('created_at', 'desc')->get();

        return view('messages.inbox', compact('receivedMessages'));
    }
    public function create($receiver_id)
    {
        // Here you can use the $receiver_id to fetch the receiver's information from the database
        // and display the message form with the receiver's information
        $receiver = \App\Models\DecoratorSubmission::findOrFail($receiver_id);

        // Assuming you have a view named 'messages.create' to display the message form
        return view('messages.create', compact('receiver'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        // Create a new message
        $message = new Message([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->input('receiver_id'),
            'content' => $request->input('content'),
        ]);

        $message->save();

        return redirect()->route('messages.create', ['receiver_id' => $request->input('receiver_id')])
            ->with('success', 'Message sent successfully!');
    }
}
