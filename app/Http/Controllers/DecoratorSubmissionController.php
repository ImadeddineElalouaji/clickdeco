<?php
// app/Http/Controllers/DecoratorSubmissionController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\DecoratorComment;
use Illuminate\Http\Request;
use App\Models\DecoratorSubmission;
use App\Models\DecoratorImage;
class DecoratorSubmissionController extends Controller
{
    public function listDecorators(Request $request)
{
    // Fetch all unique addresses and specialties to populate the filter dropdowns
    $adresses = DecoratorSubmission::pluck('adresse')->unique();
    $specialites = DecoratorSubmission::pluck('specialite')->unique();

    // Get selected filters from the request
    $selectedAdresse = $request->query('adresse');
    $selectedSpecialite = $request->query('specialite');

    // Start with a base query for decorators
    $query = DecoratorSubmission::query();

    // Apply filters if they are selected
    if ($selectedAdresse) {
        $query->where('adresse', $selectedAdresse);
    }

    if ($selectedSpecialite) {
        $query->where('specialite', $selectedSpecialite);
    }

    // Get the filtered decorators
    $decorators = $query->get();

    foreach ($decorators as $decorator) {
        // Fetch comments for the current decorator
        $comments = DecoratorComment::where('decorator_id', $decorator->id)->get();
    }

    $currentUserId = Auth::id();

    return view('decorators.list', compact('decorators', 'adresses', 'selectedAdresse', 'specialites', 'selectedSpecialite', 'currentUserId'));
}


    public function showForm()
    {
        $currentUserId = Auth::id();
        return view('decorators.form', compact('currentUserId'));
    }

    public function showDecorator($id)
    {
        $decorator = DecoratorSubmission::with('images')->find($id);

        if (!$decorator) {
            abort(404); // Or you can redirect to a custom 404 page or handle the not found scenario in a different way.
        }
        $comments = DecoratorComment::where('decorator_id', $id)->get();
        return view('decorators.show', compact('decorator', 'comments'));
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
            'specialite' => 'required|string|in:cuisine,salon,bureau,chambres',
            'description' => 'nullable|string',
            
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,jpeg,webp|max:2048',
        ]);
    
        // Check if a decorator submission with the same email already exists
        $existingSubmission = DecoratorSubmission::where('email', $validatedData['email'])->first();
    
        if ($existingSubmission) {
            return redirect()->back()->withErrors(['email' => 'Email is already taken. Please choose a different one.']);
        }
    
        // Save the main decorator submission data to the database
        $decoratorSubmission = DecoratorSubmission::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'adresse' => $validatedData['adresse'],
            'specialite' => $validatedData['specialite'],
            'description' => $validatedData['description'],
         // Hash the password before saving
            'user_id' => Auth::id(), // Set the user_id based on the authenticated user
        ]);
    
        // Save the decorator's avatar picture if provided
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $decoratorSubmission->update(['avatar' => $avatarPath]);
        }
    
        // Save the decorator's multiple images if provided
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                $decoratorImage = new DecoratorImage(['path' => $imagePath]);
                $decoratorSubmission->images()->save($decoratorImage);
            }
        }
        
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Decorator submission successful!');
        if (DecoratorSubmission::where('user_id', Auth::id())->exists()) {
            return redirect()->back()->withErrors(['message' => 'You have already submitted a decorator profile.']);
        }
    }
    public function show($id)
{
    // Find the decorator by ID along with its comments
    $decorator = DecoratorSubmission::with('user', 'comments')->find($id);

    // Check if the decorator exists
    if (!$decorator) {
        abort(404); // Or you can redirect to a custom 404 page or handle the not found scenario in a different way.
    }

    // Exclude the logged-in user's comments from the list
    $comments = $decorator->comments->where('user_id', '!=', auth()->user()->id);

    return view('decorators.show', compact('decorator', 'comments' ,'decorator_images'));
}

public function indexAll()
{
    // Fetch all the decorator images
    $decorator_images = DecoratorImage::all();

    // Pass the decorator_images variable to the creations.index view
    return view('creations.index', compact('decorator_images'));
}

}