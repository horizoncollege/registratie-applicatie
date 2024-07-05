@extends('layouts.layout-dashboard')

@section('title', 'Beoordelen')

@section('content')
    <main>
        <!-- Header -->
        <header>
            <h1>Beoordelen</h1>
        </header>

        {{-- Searchbar --}}
        <div class="top-content">
            <div class="searchbar">
                <form action="{{ route('beoordelen') }}" method="GET" class="searchbar-form">
                    <div class="searchbar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="searchInput" name="search" placeholder="Zoeken"
                            value="{{ request('search') }}">
                    </div>
                </form>
            </div>
        </div>

        <!-- Content -->
        <section class="content-section">
            @include('components.pending-projects', [
                'pendingProjects' => $pendingProjects,
                'showAllProjectsButton' => true,
                'showHeading' => true,
            ])
        </section>
    </main>
@endsection
