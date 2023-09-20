<?php
namespace App\Http\Controllers;

use App\Models\DecoratorImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DecoratorImageController extends Controller
{
    public function destroy(DecoratorImage $image)
    {
        // Delete the image file from storage
        Storage::disk('public')->delete($image->path);

        // Delete the image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully!');
    }
}