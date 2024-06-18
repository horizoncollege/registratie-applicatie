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
            // 'fileInput' => 'required|file',
        ]);

        if ($request->hasFile('fileInput')) {
            $validated['fileInput'] = $request->file('fileInput')->store('uploads', 'public');
        }

        Form::create($validated);

        return back()->with('success', 'Bedankt voor uw bericht! We zullen spoedig contact met u opnemen.');
    }

    public function index()
    {
        $forms = Form::latest()->get();
        return view('index', compact('forms'));
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return redirect()->route('index')->with('success', 'Contactformulier succesvol verwijderd.');
    }
}
