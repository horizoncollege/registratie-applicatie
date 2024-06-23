<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form; // Make sure the correct model is imported

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Fetch the three most recent projects
        $recentProjects = Form::orderBy('created_at', 'desc')->take(3)->get();

        return view('dashboard.dashboard', compact('recentProjects'));
    }

    public function showAllProjects()
    {
        // Fetch projects with pagination, 5 projects per page
        $allProjects = Form::orderBy('created_at', 'desc')->paginate(5);

        return view('dashboard.projecten', compact('allProjects'));
    }
}
