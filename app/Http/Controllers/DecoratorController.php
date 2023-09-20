<?php

namespace App\Http\Controllers;
use App\Models\DecoratorComment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Decorator;

class DecoratorController extends Controller
{
    

public function show($id)
{
    $decorator = Decorator::findOrFail($id);
    $comments = DecoratorComment::where('decorator_id', $id)->get();
    $comments = DecoratorComment::where('decorator_id', $id)->paginate(5);
    return view('decorators.show', compact('decorator', 'comments'));
}
    
public function showForm()
{
    return view('decorator.form');
}

// Submit the form to create a new decorator
public function submitForm(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:decorators',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required',
        'speciality' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'professional_description' => 'required|string',
        'creations' => 'nullable|array',
        'creations.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Upload the decorator photo if provided
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $photoPath;
    }

    // Upload the creations photos if provided
    if ($request->hasFile('creations')) {
        $creationPaths = [];
        foreach ($request->file('creations') as $creation) {
            $creationPath = $creation->store('creations', 'public');
            $creationPaths[] = $creationPath;
        }
        $validatedData['creations'] = $creationPaths;
    }

    // Save the decorator details to the database
    Decorator::create($validatedData);

    return redirect()->back()->with('success', 'Form submitted successfully!');
}
    public function index(Request $request)
{
    // Get all unique "adresse" values for populating the filter options
    $adresses = Decorator::pluck('adresse')->unique();

    // Get the selected "adresse" from the filter form, if provided
    $selectedAdresse = $request->input('adresse');

    // Query decorators based on the selected "adresse" if provided
    $query = Decorator::query();
    if ($selectedAdresse) {
        $query->where('adresse', $selectedAdresse);
    }

    // Fetch the decorators based on the filtered query
    $decorators = $query->get();

    // Pass the decorators and adresses to the view using compact()
    return view('decorators.list', compact('decorators', 'adresses', 'selectedAdresse','comments'));
}



}
