@extends('layouts.guest')

@section('content')
    <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Register') }}</p>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-image: url('https://lecolefrancaise.fr/wp-content/uploads/2020/06/formation-d%C3%A9corateur-int%C3%A9rieur-Toulouse.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }
        
            /* Rest of your existing styles */
        </style>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('name')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="{{ __('Email') }}" required autocomplete="email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="{{ __('Password') }}" required autocomplete="new-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password_confirmation"
                       class="form-control @error('password_confirmation') is-invalid @enderror"
                       placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="role" class="col-form-label">{{ __('Role') }}</label>
                <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" required>
                    <option value="1">Admin</option>
                    <option value="2">Decorator</option>
                    <option value="3">Client</option>
                </select>
                @error('role')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
