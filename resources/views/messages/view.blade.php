<!-- resources/views/messages/view.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Messages from {{ $sender->name }}</h1>

    <!-- Display messages exchanged between the decorator and the selected sender -->
    <div class="messages-list">
        <ul>
            @foreach ($messages as $message)
                <li>
                    <strong>{{ $message->sender->name }}:</strong> {{ $message->content }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
