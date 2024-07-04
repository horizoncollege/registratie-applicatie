<?php

// app/Http/Controllers/UploadController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file_upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $file = $request->file('file_upload');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('profile_pictures', $fileName, 'public');

        // Update user profile picture path
        $user->profile_picture = '/storage/' . $filePath;
        $user->save();

        return redirect()->back()->with('success', 'Profielfoto bijgewerkt.');
    }
}
