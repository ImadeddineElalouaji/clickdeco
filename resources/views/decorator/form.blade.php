@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('submitForm') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="speciality">Speciality</label>
                <input type="text" class="form-control" name="speciality" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" required>
            </div>
            <div class="form-group">
                <label for="photo">Profile Photo</label>
                <input type="file" class="form-control" name="photo" accept="image/*">
            </div>
            <div class="form-group">
                <label for="professional_description">Professional Description</label>
                <textarea class="form-control" name="professional_description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="creations">Creations (Multiple Photos)</label>
                <input type="file" class="form-control" name="creations[]" multiple accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
