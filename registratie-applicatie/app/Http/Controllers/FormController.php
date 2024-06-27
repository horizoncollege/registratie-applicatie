<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'place' => 'required',
            'contactperson' => 'required',
            'function' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
            'activity' => 'required',
            'workers' => 'required',
            'kvk_number' => 'required',
            'status' => 'required', // Add this line
            // 'fileInput' => 'required|file',
        ]);

        if ($request->hasFile('fileInput')) {
            $validated['fileInput'] = $request->file('fileInput')->store('uploads', 'public');
        }

        Form::create($validated);

        return back()->with('success');
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return redirect()->route('projecten')->with('success', 'Project succesvol verwijderd.');
    }

    public function updateStatus(Request $request, $id)
    {
        $form = Form::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        $form->update($validated);

        return back()->with('success', 'Status succesvol bijgewerkt.');
    }
}
