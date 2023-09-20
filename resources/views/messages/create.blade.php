<!-- resources/views/messages/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Compose Message</h1>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $receiver->id }}">


        <div class="form-group">
            <label for="content">Message:</label>
            <textarea name="content" rows="4" class="form-control @error('content') is-invalid @enderror"
                      required>{{ old('content') }}</textarea>
            @error('content')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
