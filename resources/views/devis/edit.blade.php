@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Devis</h1>
    <form action="{{ route('devis.update', $devis->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $devis->nom) }}" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $devis->prenom) }}" required>
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $devis->adresse) }}" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone:</label>
            <input type="text" class="form-control" id="telephone" name="telephone" value="{{ old('telephone', $devis->telephone) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $devis->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $devis->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville:</label>
            <input type="text" class="form-control" id="ville" name="ville" value="{{ old('ville', $devis->ville) }}" required>
        </div>

        <div class="mb-3">
            <label for="style" class="form-label">Style:</label>
            <select class="form-control" id="style" name="style" required>
                <option value="bureau" {{ old('style', $devis->style) === 'bureau' ? 'selected' : '' }}>Bureau</option>
                <option value="cuisine" {{ old('style', $devis->style) === 'cuisine' ? 'selected' : '' }}>Cuisine</option>
                <option value="salon" {{ old('style', $devis->style) === 'salon' ? 'selected' : '' }}>Salon</option>
                <option value="restaurant" {{ old('style', $devis->style) === 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                <option value="café" {{ old('style', $devis->style) === 'café' ? 'selected' : '' }}>Café</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="moderniter" class="form-label">Modernité:</label>
            <select class="form-control" id="moderniter" name="moderniter" required>
                <option value="traditionel" {{ old('moderniter', $devis->moderniter) === 'traditionel' ? 'selected' : '' }}>Traditionnel</option>
                <option value="modern" {{ old('moderniter', $devis->moderniter) === 'modern' ? 'selected' : '' }}>Moderne</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar:</label>
            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="projet_picture" class="form-label">Photo du projet:</label>
            <input type="file" class="form-control" id="projet_picture" name="projet_picture" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour Devis</button>
    </form>
</div>
@endsection
