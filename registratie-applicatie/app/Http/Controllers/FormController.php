<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
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
            'fileInput' => 'required',
        ]);

        Form::create($request->all());

        return back()->with('success', 'Bedankt voor uw bericht! We zullen spoedig contact met u opnemen.');
    }

    public function index()
    {
        $forms = form::latest()->get();
        return view('index');
    }

    public function destroy($id)
    {
        $forms = Form::findOrFail($id);
        $forms->delete();

        return redirect()->route('index')->with('success', 'Contactformulier succesvol verwijderd.');
    }
}
