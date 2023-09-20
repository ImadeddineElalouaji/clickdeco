@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="inbox-title">Inbox</h1>

        <ul class="message-list">
            @foreach ($receivedMessages as $message)
                <li class="message-item">
                    <div class="message-details">
                        <div class="sender-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="message-content">
                            <span class="message-sender">From: {{ $message->sender->name }}</span>
                            <br>
                            <span class="message-body">{{ $message->content }}</span>
                            <br>
                            <span class="message-sent-at">Sent At: {{ $message->created_at }}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
<style>
    .message-item {
        list-style: none;
        padding: 10px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .sender-avatar {
        font-size: 40px; /* Adjust the size of the icon */
        margin-right: 10px;
        display: inline-block;
        color: #888; /* Adjust the color of the icon */
    }

    .message-sender {
        font-weight: bold;
    }

    .message-body {
        display: block;
        margin-top: 5px;
    }

    .message-sent-at {
        font-size: 12px;
        color: #888;
    }
</style>
