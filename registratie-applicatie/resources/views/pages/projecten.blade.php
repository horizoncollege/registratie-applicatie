@extends('layouts.layout')

<div class="container">
    <main>
        <header>
            <h1>Projecten</h1>
        </header>

        {{-- Searchbar --}}
        <div class="top-content">
            <div class="searchbar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Zoeken">
            </div>
            {{-- Nieuw project button --}}
            <a href="/aanmelden" class="button-new-project">
                <i class="fa-solid fa-plus"></i>
                Nieuw project
            </a>
        </div>

        {{-- Projects --}}
        <div class="projects">
            <div class="header-row">
                <div class="header-item">Projectnaam</div>
                <div class="header-item">Opdrachtgever</div>
                <div class="header-item">Beschrijving</div>
                <div class="header-item">Datum</div>
            </div>
            <div class="project-row">
                <div class="project-item">Project 2</div>
                <div class="project-item">Abbiraam Sinnathamby</div>
                <div class="project-item">Lorem ipsum dolor sit amet.</div>
                <div class="project-item">2023-05-20</div>
            </div>
            <div class="project-row">
                <div class="project-item">Project 1</div>
                <div class="project-item">Bruno Dijkhuis</div>
                <div class="project-item">Lorem ipsum dolor sit amet.</div>
                <div class="project-item">2023-06-10</div>
            </div>
        </div>
    </main>
</div>
