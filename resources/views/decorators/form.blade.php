@extends('layouts.app')
<!-- Select2 CSS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
    <style>
        /* Add advanced styling for the form */
        

        form {
            max-width: 800px;
            margin: 0 auto;
            
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

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('decorators.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" required value="{{ Auth::user()->name }}" readonly>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom:</label>
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

        <div class="mb-3">
            <label for="specialites" class="form-label">Spécialités:</label>
            <select class="select2-multiple form-control" id="specialites" name="specialities[]" multiple>
                <!-- Populate options with specialities from your database -->
                @foreach ($specialities as $speciality)
                    <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#specialityModal">
            Ajouter une spécialité
        </button>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" rows="4" cols="50"></textarea>
        </div>

        <div class="form-group">
            <label for="avatar">Photo de profil:</label>
            <input type="file" name="avatar" accept="image/*">
        </div>

        <div class="form-group">
            <label for="images">Photos de Créations (Multiple):</label>
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

    <div class="modal fade" id="specialityModal" aria-labelledby="specialityModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="specialityModalLabel">Ajouter une spécialité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('specialities.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="specialityName" class="form-label">Nom de la spécialité:</label>
                            <input type="text" class="form-control" id="specialityName" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle modal interactions and AJAX -->
    {{-- <script>
    const modal = document.getElementById('speciality-modal');
    const openModalButton = document.getElementById('open-speciality-modal');
    const closeModalButton = document.querySelector('.close');
    const specialityForm = document.getElementById('speciality-form');

    // Function to open the modal
    openModalButton.addEventListener('click', () => {
        modal.style.display = 'block';
    });

    // Function to close the modal
    closeModalButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Function to handle speciality creation via AJAX
    specialityForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(specialityForm);

        fetch('{{ route('specialities.store') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Optionally, update the select options with the newly created speciality
                const select = document.querySelector('select[name="specialites[]"]');
                const option = document.createElement('option');
                option.value = data.speciality.id;
                option.text = data.speciality.name;
                select.appendChild(option);

                // Close the modal
                modal.style.display = 'none';

                // Optionally, display a success message
                alert(data.message);
            } else {
                // Handle the case where speciality creation failed
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script> --}}

    <!-- jQuery -->

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script>
        jQuery(document).ready(function($) {
            $('.select2-multiple').select2({
                placeholder: "Sélectionner",
                allowClear: true
            });
        });

        // JavaScript to handle image preview for multiple inputs
        function handleImagePreview(input, previewElement) {
            const files = Array.from(input.files);
            previewElement.innerHTML = '';

            files.forEach(file => {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.className = 'preview-image';
                    img.src = e.target.result;
                    previewElement.appendChild(img);
                };

                reader.readAsDataURL(file);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const imageRows = document.getElementById('image-rows');
            const addRowButton = document.getElementById('add-row');

            addRowButton.addEventListener('click', function() {
                const newRow = document.createElement('div');
                newRow.className = 'image-row';
                newRow.innerHTML = `
                <input type="file" name="images[]" accept="image/*">
                <div class="image-preview"></div>
            `;
                imageRows.appendChild(newRow);

                const newInput = newRow.querySelector('input[type="file"]');
                const newPreview = newRow.querySelector('.image-preview');

                newInput.addEventListener('change', function() {
                    handleImagePreview(newInput, newPreview);
                });
            });

            const imageInputs = document.querySelectorAll('input[name="images[]"]');
            const imagePreviews = document.querySelectorAll('.image-preview');

            imageInputs.forEach((input, index) => {
                input.addEventListener('change', function() {
                    handleImagePreview(input, imagePreviews[index]);
                });
            });
        });
    </script>
@endsection
