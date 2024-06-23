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
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="searchInput" placeholder="Zoeken">
            </div>
            {{-- Nieuw project button --}}
            <a href="/dashboard/aanmelden" class="button-new-project">
                <i class="fa-solid fa-plus"></i>
                Nieuw project
            </a>
        </div>

        {{-- Projects --}}
        @include('components.recent-projects', ['projects' => $allProjects])

        <div id="noResultsMessage" style="display: none; padding: 10px;">
            Geen projecten gevonden die aan de zoekcriteria voldoen.
        </div>
    </main>
@endsection
