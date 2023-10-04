<?php
// app/Http/Controllers/DecoratorSubmissionController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\DecoratorComment;
use Illuminate\Http\Request;
use App\Models\DecoratorSubmission;
use App\Models\DecoratorImage;
use App\Models\Speciality;


class DecoratorSubmissionController extends Controller
{
    public function listDecorators(Request $request)
{
    $selectedAdresse = $request->input('adresse');
    $selectedSpecialite = $request->input('specialite');

    $decoratorsQuery = DecoratorSubmission::query();

    if ($selectedAdresse) {
        $decoratorsQuery->where('adresse', $selectedAdresse);
    }

    if ($selectedSpecialite) {
        $decoratorsQuery->whereHas('specialities', function ($query) use ($selectedSpecialite) {
            $query->where('name', $selectedSpecialite);
        });
    }

    $decorators = $decoratorsQuery->get();
    $adresses = DecoratorSubmission::distinct()->pluck('adresse');
    $specialites = Speciality::distinct()->pluck('name');

    return view('decorators.list', compact('decorators', 'adresses', 'selectedAdresse', 'specialites', 'selectedSpecialite'));
}


    
    



public function showForm()
{
    $currentUserId = Auth::id();
    $specialities = Speciality::all(); // Get all specialities

    return view('decorators.form', compact('currentUserId', 'specialities'));
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
            'description' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,jpeg,webp|max:2048',
    
            // Add validation for specialities
            'specialities' => 'nullable|array', // Ensure it's an array
            'specialities.*' => 'exists:specialities,id', // Ensure specialities exist in the database
        ]);
    
        // Check if a decorator submission with the same email already exists
        $existingSubmission = DecoratorSubmission::where('email', $validatedData['email'])->first();
    
        if ($existingSubmission) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email is already taken. Please choose a different one.']);
        }
    
        // Create the decorator submission
        $decoratorSubmission = DecoratorSubmission::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'adresse' => $validatedData['adresse'],
            'description' => $validatedData['description'],
            'user_id' => Auth::id(),
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
    
        // Attach selected specialities to the decorator submission
        $selectedSpecialities = $validatedData['specialities'] ?? [];
        $decoratorSubmission->specialities()->attach($selectedSpecialities);
    
        return redirect()->route('decorators.list')->with('success', 'Decorator submission successful.');
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
public function destroy($id)
{
    $decorator = DecoratorSubmission::find($id); // Update to use the correct model name

    if (!$decorator) {
        return redirect()->route('decorators.list')->with('error', 'Decorator not found');
    }

    // Perform the deletion
    $decorator->delete();

    return redirect()->route('decorators.list')->with('success', 'Decorator deleted successfully');
}

}