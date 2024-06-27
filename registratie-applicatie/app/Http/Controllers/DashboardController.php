<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $recentProjects = Form::orderBy('created_at', 'desc')->take(3)->get();
        return view('dashboard.dashboard', compact('recentProjects'));
    }

    public function showAllProjects(Request $request)
    {
        $searchTerm = $request->input('search');
        $query = Form::query();

        if ($searchTerm) {
            if (preg_match('/\d{2}-\d{2}-\d{4}/', $searchTerm)) {
                $date = Carbon::createFromFormat('d-m-Y', $searchTerm)->format('Y-m-d');
                $query->whereDate('created_at', $date);
            } else {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('name', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('company', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('contactperson', 'LIKE', '%' . $searchTerm . '%');
                });
            }
        }

        $allProjects = $query->orderBy('created_at', 'desc')->paginate(10);

        $approvedProjects = $allProjects->filter(function ($project) {
            return $project->status === 'approved';
        });

        $pendingProjects = $allProjects->filter(function ($project) {
            return $project->status === 'pending';
        });

        $rejectedProjects = $allProjects->filter(function ($project) {
            return $project->status === 'rejected';
        });

        return view('dashboard.projecten', compact('allProjects', 'approvedProjects', 'pendingProjects', 'rejectedProjects'));
    }



    public function show($name)
    {
        $form = Form::where('name', $name)->firstOrFail();
        return view('dashboard.show', compact('form'));
    }
}
