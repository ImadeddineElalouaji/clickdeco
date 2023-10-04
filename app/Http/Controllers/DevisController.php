<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function show(Devis $devis)
{
    // Load the view to display the details of the "Devis" record
    return view('devis.show', compact('devis'));
}


public function index(Request $request)
{
    // Start with a base query for devis
    $query = Devis::query();

    // Fetch unique 'ville', 'style', and 'modernite' values for filtering
    $villes = Devis::pluck('ville')->unique();
    $styles = Devis::pluck('style')->unique();
    $modernites = Devis::pluck('moderniter')->unique();

    // Apply filters if they are selected
    if ($request->filled('ville')) {
        $query->where('ville', $request->input('ville'));
    }

    if ($request->filled('style')) {
        $query->where('style', $request->input('style'));
    }

    if ($request->filled('moderniter')) {
        $query->where('moderniter', $request->input('moderniter'));
    }
 // Filter by budget range
 if ($request->filled('min_budget')) {
    $query->where('budget', '>=', $request->input('min_budget'));
}

if ($request->filled('max_budget')) {
    $query->where('budget', '<=', $request->input('max_budget'));
}
    // Get the filtered devis records with pagination
    $devisList = $query->paginate(10); // You can adjust the pagination value

    return view('devis.index', compact('devisList', 'villes', 'styles'));
}

    public function create()
    {
        return view('devis.create');
    }
    public function edit(Devis $devis)
    {
        // Load the edit view with the Devis item to edit
        return view('devis.edit', compact('devis'));
    }
    public function update(Request $request, Devis $devis)
    {
        // Validate the updated data
        $validatedData = $request->validate([
            // Define your validation rules here for updating Devis items
        ]);

        // Update the Devis item with the validated data
        $devis->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('devis.index')->with('success', 'Devis updated successfully!');
    }

    public function destroy(Devis $devis)
    {
        // Delete the Devis item
        $devis->delete();

        // Redirect back with a success message
        return redirect()->route('devis.index')->with('success', 'Devis deleted successfully!');
    }

    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'telephone' => 'nullable|string|max:20',
        'email' => 'required|email|max:255',
        'description' => 'required|string',
        'ville' => 'required|string|max:255',
        'style' => 'required|string|in:bureau,cuisine,salon,restaurant,café',
        'moderniter' => 'required|string|in:traditionel,modern',
        'budget' => 'nullable|numeric', // Add the budget field
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'projet_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Create a new Devis record
    $devis = new Devis([
        'nom' => $validatedData['nom'],
        'prenom' => $validatedData['prenom'],
        'adresse' => $validatedData['adresse'],
        'telephone' => $validatedData['telephone'],
        'email' => $validatedData['email'],
        'description' => $validatedData['description'],
        'ville' => $validatedData['ville'],
        'style' => $validatedData['style'],
        'moderniter' => $validatedData['moderniter'],
        'budget' => $validatedData['budget'], // Store the budget
    ]);

    // Store the avatar image if provided
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatarsclient', 'public');
        $devis->avatar = $avatarPath;
    }

    // Store the project picture image if provided
    if ($request->hasFile('projet_picture')) {
        $projetPicturePath = $request->file('projet_picture')->store('projet_pictureimage', 'public');
        $devis->projet_picture = $projetPicturePath;
    }

    // Save the Devis record to the database
    $devis->save();

    // Redirect back with a success message
    return redirect()->route('home')->with('success', 'Devis created successfully!');
}


    
}
