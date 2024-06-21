<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form; // Zorg ervoor dat het juiste model is geïmporteerd

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Haal de drie meest recente projecten op
        $recentProjects = Form::orderBy('created_at', 'desc')->take(3)->get();

        return view('dashboard.dashboard-2', compact('recentProjects'));
    }
}
