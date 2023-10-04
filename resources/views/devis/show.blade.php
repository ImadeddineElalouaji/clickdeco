@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Devis Details</h1>

    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="rounded-circle avatar-container mr-3">
                    @if($devis->avatar)
                    <img src="{{ asset('storage/' . $devis->avatar) }}" alt="Avatar" class="rounded-circle avatar-img" ; style="width: 200px ; " style="height: 400px">
                    @else
                    <i class="fas fa-user-circle fa-4x"></i>
                    @endif
                    
                </div>
                <div>
                    
                    <p class="card-text"><strong>Nom:</strong> {{ $devis->nom }}</p>
                    <p class="card-text"><strong>Prenom:</strong> {{ $devis->prenom }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $devis->email }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $devis->adresse }}</p>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Devis Details</div>
        <div class="card-body">
            <p class="card-text"><strong>Ville:</strong> {{ $devis->ville }}</p>
            <p class="card-text"><strong>Style:</strong> {{ $devis->style }}</p>
            <p class="card-text"><strong>Modernité:</strong> {{ $devis->moderniter }}</p>
            <p class="card-text"><strong>Budget:</strong> {{ $devis->budget }} DH</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Description</div>
        <div class="card-body">
            <p class="card-text">{{ $devis->description }}</p>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header"> Image du projet</div>
        <div class="card-body">
            @if($devis->projet_picture)
            <img src="{{ asset('storage/' . $devis->projet_picture) }}" alt="Projet Picture" class="img-thumbnail">
            @else
            <p class="card-text">Aucun Porjet displonible</p>
            @endif
        </div>
    </div>

    <a href="{{ route('devis.index') }}" class="btn btn-primary">Retourner</a>
</div>
@endsection
