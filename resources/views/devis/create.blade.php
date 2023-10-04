@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Creer Votre Devis</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('devis.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom:</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom:</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>

                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse:</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" required>
                            </div>

                            <div class="mb-3">
                                <label for="telephone" class="form-label">Téléphone:</label>
                                <input type="text" class="form-control" id="telephone" name="telephone">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville:</label>
                                <input type="text" class="form-control" id="ville" name="ville" required>
                            </div>

                            <div class="mb-3">
                                <label for="style" class="form-label">Style:</label>
                                <select class="form-control" id="style" name="style" required>
                                    <option value="bureau">Bureau</option>
                                    <option value="cuisine">Cuisine</option>
                                    <option value="salon">Salon</option>
                                    <option value="restaurant">Restaurant</option>
                                    <option value="café">Café</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="moderniter" class="form-label">Modernité:</label>
                                <select class="form-control" id="moderniter" name="moderniter" required>
                                    <option value="traditionel">Traditionnel</option>
                                    <option value="modern">Modern</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="budget" class="form-label">Budget:</label>
                                <input type="text" class="form-control" id="budget" name="budget">
                            </div>

                            <div class="mb-3">
                                <label for="avatar" class="form-label">Avatar:</label>
                                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="projet_picture" class="form-label">Photo du projet:</label>
                                <input type="file" class="form-control" id="projet_picture" name="projet_picture" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary">Créer Devis</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
