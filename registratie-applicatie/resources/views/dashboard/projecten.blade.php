@extends('layouts.layout-dashboard')

@section('title', 'Projecten')

@section('content')
    <main>
        <header>
            <h1>Projecten</h1>
        </header>

        {{-- Searchbar --}}
        <div class="top-content">
            <div class="searchbar">
                <form action="{{ route('projecten') }}" method="GET" class="searchbar-form">
                    <div class="searchbar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="searchInput" name="search" placeholder="Zoeken"
                            value="{{ request('search') }}">
                    </div>
                </form>
            </div>
            {{-- Nieuw project button --}}
            <a href="/dashboard/aanmelden" class="button-new-project">
                <i class="fa-solid fa-plus"></i>
                Nieuw project
            </a>
        </div>

        {{-- Projects --}}
        @include('components.recent-projects', [
            'approvedProjects' => $approvedProjects,
            'pendingProjects' => $pendingProjects,
            'rejectedProjects' => $rejectedProjects,
            'showAllProjectsButton' => false,
            'showHeading' => true,
        ])

        <!-- Pagination links -->
        <div class="pagination-links">
            {{ $allProjects->appends(['search' => request('search')])->links() }}
        </div>

    </main>
@endsection
