<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speciality;

class SpecialityController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|unique:specialities|max:255',
            ]);

            $speciality = Speciality::create([
                'name' => $request->input('name'),
            ]);

            if ($speciality) {
                return response()->json(['success' => true, 'message' => 'Speciality created successfully.']);
            } else {
                return response()->json(['success' => false, 'message' => 'Failed to create speciality.']);
            }
        } catch (\Exception $e) {
            // Handle any exceptions that might occur during the process
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}

