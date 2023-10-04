@extends('layouts.app')

@section('content')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS and JS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="container">
        <br>
        <h1 class="mb-4">Liste des Devis</h1>
        <form action="{{ route('devis.index') }}" method="GET">
            <!-- Other filters (ville, style, moderniter) -->
        
            <!-- Budget Filter -->
            <div class="mb-3">
                <label for="min_budget" class="form-label">Min Budget:</label>
                <input type="number" class="form-control" id="min_budget" name="min_budget" value="{{ request('min_budget') }}">
            </div>
        
            <div class="mb-3">
                <label for="max_budget" class="form-label">Max Budget:</label>
                <input type="number" class="form-control" id="max_budget" name="max_budget" value="{{ request('max_budget') }}">
            </div>
        
            <button type="submit" class="btn btn-primary">Apply Filters</button>
        </form>
        <!-- Filters -->
        <form action="{{ route('devis.index') }}" method="GET" class="mb-3">
            <div class="row g-3">
                <!-- Ville Filter -->
                <div class="col-md-4">
                    <label for="ville" class="form-label">Ville</label>
                    <select id="ville" name="ville" class="form-select">
                        <option value="">Toutes les villes</option>
                        @foreach($villes as $ville)
                            <option value="{{ $ville }}" {{ request('ville') == $ville ? 'selected' : '' }}>{{ $ville }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Modernite Filter -->
                <!-- Modernite Filter -->
<div class="col-md-4">
    <label for="modernite" class="form-label">Modernité</label>
    <select id="modernite" name="moderniter" class="form-select">
        <option value="">Toutes les modernités</option>
        <option value="traditionel" {{ request('moderniter') == 'traditionel' ? 'selected' : '' }}>Traditionnel</option>
        <option value="modern" {{ request('moderniter') == 'modern' ? 'selected' : '' }}>Moderne</option>
    </select>
</div>


                <!-- Style Filter -->
                <div class="col-md-4">
                    <label for="style" class="form-label">Style</label>
                    <select id="style" name="style" class="form-select">
                        <option value="">Tous les styles</option>
                        <option value="bureau" {{ request('style') == 'bureau' ? 'selected' : '' }}>Bureau</option>
                        <option value="cuisine" {{ request('style') == 'cuisine' ? 'selected' : '' }}>Cuisine</option>
                        <option value="salon" {{ request('style') == 'salon' ? 'selected' : '' }}>Salon</option>
                        <option value="restaurant" {{ request('style') == 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                        <option value="café" {{ request('style') == 'café' ? 'selected' : '' }}>Café</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                    <a href="{{ route('devis.index') }}" class="btn btn-secondary">Réinitialiser</a>
                </div>
            </div>
        </form>

        <!-- Devis List -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    {{-- <th>Adresse</th> --}}
                    {{-- <th>Téléphone</th> --}}
                    {{-- <th>Email</th> --}}
                    <th>Ville</th>
                    <th>Style</th>
                    <th>Modernité</th>
                    {{-- <th>Avatar</th> --}}
                    <th>Budget</th>
                    @if (Auth::user()->role == 1 )
                    <th></th>
                    <th></th>
                    <th></th>
                    @endif
                    
                </tr>
            </thead>
            <tbody>
                @foreach($devisList as $devis)
                <tr>
                    <td>{{ $devis->nom }}</td>
                    <td>{{ $devis->prenom }}</td>
                    {{-- <td>{{ $devis->adresse }}</td> --}}
                    {{-- <td>{{ $devis->telephone }}</td> --}}
                    {{-- <td>{{ $devis->email }}</td> --}}
                    <td>{{ $devis->ville }}</td>
                    <td>{{ $devis->style }}</td>
                    <td>{{ $devis->moderniter }}</td>
                    
                    
                    {{-- <td>
                        @if($devis->avatar)
                            <img src="{{ asset('storage/' . $devis->avatar) }}" alt="Avatar" class="rounded-circle" width="100">
                        @else
                            N/A
                        @endif
                    </td> --}}
                    {{-- <td>
                        @if($devis->projet_picture)
                            <img src="{{ asset('storage/' . $devis->projet_picture) }}" alt="Projet" width="50">
                        @else
                            N/A
                        @endif
                    </td> --}}
                    <td>{{ $devis->budget }}DH</td>
                    @if (Auth::user()->role == 1 )
                    <td>
                        <a href="{{ route('devis.edit', $devis->id) }}" class="btn btn-info">Modifier</a>
                    </td>
                    @endif
                    <td>
                        <a href="{{ route('devis.show', $devis->id) }}" class="btn btn-info">Plus de detail</a>
                    </td>
                   
                    <td>
                       <!-- Delete Button -->
                       @if (Auth::user()->role == 1 )
<form action="{{ route('devis.destroy', $devis->id) }}" method="POST" class="delete-form">
    @csrf
    @method('DELETE')
    
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
        Delete
    </button>
    @endif
</form>


                    </td>
                    <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">!Confirmation!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Etes-vous sûr que vous voulez supprimer?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuler</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Supprimer</button>
            </div>
        </div>
    </div>
</div>
<script>
    // When a delete button is clicked, show the confirmation modal
    $(document).on('click', '.delete-button', function() {
        const devisId = $(this).data('devis-id');
        $('#deleteModal').modal('show');

        // Handle deletion confirmation
        $('#confirmDelete').click(function() {
            // Submit the delete form
            $('.delete-form[data-devis-id="' + devisId + '"]').submit();
});

       
       
    });
</script>

                </tr>
            @endforeach
            
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $devisList->appends(request()->except('page'))->links() }}
        </div>
    </div>
    <style>
        /* Style the container */
        .container {
            margin-top: 20px;
        }
    
        /* Style the table */
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }
    
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
    
        th {
            background-color: #f2f2f2;
        }
    
        /* Style the filter row */
        .row {
            margin-bottom: 20px;
        }
    
        .col-md-3 {
            margin-bottom: 10px;
        }
    
        /* Style the select elements */
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        /* Style the images */
        .avatar-img {
            max-width: 50px;
            max-height: 50px;
            border-radius: 50%;
        }
        
    </style>
    <style>
        /* Style the container of the budget filter form */
.form-container {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

/* Style the budget filter form elements */
.form-container h4 {
    font-size: 18px;
    margin-bottom: 15px;
}

/* Style the budget input fields and their labels */
.form-container label {
    font-weight: bold;
}

.form-container .form-group {
    margin-bottom: 15px;
}

.form-container .input-group-prepend {
    background-color: #f8f9fa;
}

.form-container input[type="number"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

/* Style the Apply Filters button */
.form-container button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

.form-container button:hover {
    background-color: #0056b3;
}

    </style>
@endsection
