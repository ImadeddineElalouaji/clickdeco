@extends('layouts.app')

@section('content')
<style>
    /* Add advanced styling for the form */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    form {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
       
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group input[type="file"] {
        display: block;
        margin-top: 10px;
    }

    .image-row {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .image-preview {
        max-width: 100px;
        max-height: 100px;
        margin-right: 10px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    .preview-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }

    #add-row {
        cursor: pointer;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
    }

    button[type="submit"] {
        cursor: pointer;
        padding: 10px 20px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
    }

    .spacer {
        margin-bottom: 20px;
    }

    /* Media query for smaller screens */
    @media (max-width: 600px) {
        form {
            max-width: 90%;
        }
    }
</style>

@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('decorators.submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label for="nom">Nom:</label >
        <input type="text" name="nom" required value="{{ Auth::user()->name }}" readonly>
    </div>

    <div class="form-group">
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required value="{{ Auth::user()->email }}" readonly>
        @error('email')
            <p style="color: red;">{{ $message }}</p> <!-- Display error message if email is not unique -->
        @enderror
    </div>

    <div class="form-group">
        <label for="telephone">Téléphone:</label>
        <input type="tel" name="telephone">
    </div>

    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse">
    </div>

    <div class="form-group">
        <label for="specialite">Spécialité:</label>
        <select name="specialite" required>
            <option value="cuisine">Cuisine</option>
            <option value="salon">Salon</option>
            <option value="bureau">Bureau</option>
            <option value="chambres">Chambres</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" rows="4" cols="50"></textarea>
    </div>

    <div class="form-group">
        <label for="avatar">Photo de profile:</label>
        <input type="file" name="avatar" accept="image/*">
    </div>

    <div class="form-group">
        <label for="images"> photo de Creations (Multiple):</label>
        <div id="image-rows">
            <div class="image-row">
                <input type="file" name="images[]" accept="image/*">
                <div class="image-preview"></div>
            </div>
        </div>
        <button type="button" id="add-row">Add More</button>
    </div>

    <div class="form-group">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" value="{{ $currentUserId }}" readonly>
    </div>

    <div class="spacer"></div>

    <button type="submit">Submit</button>
</form>
<script>
    // JavaScript to handle image preview for multiple inputs
    function handleImagePreview(input, previewElement) {
        const files = Array.from(input.files);
        previewElement.innerHTML = '';

        files.forEach(file => {
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.createElement('img');
                img.className = 'preview-image';
                img.src = e.target.result;
                previewElement.appendChild(img);
            };

            reader.readAsDataURL(file);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const imageRows = document.getElementById('image-rows');
        const addRowButton = document.getElementById('add-row');

        addRowButton.addEventListener('click', function () {
            const newRow = document.createElement('div');
            newRow.className = 'image-row';
            newRow.innerHTML = `
                <input type="file" name="images[]" accept="image/*">
                <div class="image-preview"></div>
            `;
            imageRows.appendChild(newRow);

            const newInput = newRow.querySelector('input[type="file"]');
            const newPreview = newRow.querySelector('.image-preview');

            newInput.addEventListener('change', function () {
                handleImagePreview(newInput, newPreview);
            });
        });

        const imageInputs = document.querySelectorAll('input[name="images[]"]');
        const imagePreviews = document.querySelectorAll('.image-preview');

        imageInputs.forEach((input, index) => {
            input.addEventListener('change', function () {
                handleImagePreview(input, imagePreviews[index]);
            });
        });
    });
</script>

@endsection