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
            <a href="/dashboard-2/aanmelden" class="button-new-project">
                <i class="fa-solid fa-plus"></i>
                Nieuw project
            </a>
        </div>

        {{-- Projects --}}
        <div class="projects">
            <div class="header-row">
                <div class="header-item">Projectnaam</div>
                <div class="header-item">Bedrijf</div>
                <div class="header-item">Contactpersoon</div>
                <div class="header-item">Datum</div>
                <div class="header-item" style="visibility: hidden;">Actie</div>
            </div>

            @forelse ($forms as $form)
                <div class="project-row">
                    <div class="project-item">{{ $form->name }}</div>
                    <div class="project-item">{{ $form->company }}</div>
                    <div class="project-item">{{ $form->contactperson }}</div>
                    <div class="project-item">{{ $form->created_at->format('d-m-Y') }}</div>
                    <div class="project-item">
                        <div class="project-item bekijk-button">
                            <?php
                            $name = strtolower($form->name);
                            $url = route('project.show', ['name' => urlencode($name)]);
                            $url = str_replace('+', '%20', $url);
                            ?>
                            <a href="{{ $url }}">
                                <i class="fa-solid fa-arrow-right"></i> Bekijk project
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="project-row">
                    <div class="project-item" colspan="5">Geen projecten gevonden.</div>
                </div>
            @endforelse
        </div>
        <div id="noResultsMessage"
            style="display: none; padding: 10px;">
            Geen projecten gevonden die aan de zoekcriteria voldoen.
        </div>
    </main>
@endsection
