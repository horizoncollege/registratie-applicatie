<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Haal de ingelogde gebruiker op
        return view('index', compact('user'));
    }
}
