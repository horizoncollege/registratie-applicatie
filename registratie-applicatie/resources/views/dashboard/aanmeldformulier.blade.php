@extends('layouts.layout-dashboard')

@section('title', 'Aanmelden')

@section('content')
    <main>
        <!-- Header -->
        <header>
            <h1>Aanmelden</h1>
        </header>

        <!-- Content -->
        <section id="home" class="dashboard-section">
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif
            <form id="companyForm" enctype="multipart/form-data">
                @csrf
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>

                <label for="company">Bedrijfsnaam:</label>
                <input type="text" id="company" name="company" required>

                <label for="place">Plaats:</label>
                <input type="text" id="place" name="place" required>

                <label for="contactperson">Contactpersoon:</label>
                <input type="text" id="contactperson" name="contactperson" required>

                <label for="function">Functie:</label>
                <input type="text" id="function" name="function" required>

                <label for="phone">Telefoonnummer:</label>
                <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="website">Website:</label>
                <input type="url" id="website" name="website">

                <label for="activity">Bedrijfsactiviteit / Core business:</label>
                <input type="text" id="activity" name="activity" required>

                <label for="workers">Aantal medewerkers:</label>
                <input type="number" id="workers" name="workers" required>

                <label for="kvk_number">KVK Nummer:</label>
                <input type="text" id="kvk_number" name="kvk_number" required>

                <label for="fileInput" class="dropzone" id="dropzone">
                    Upload bestand
                    <input type="file" id="fileInput" name="fileInput">
                </label>

                <input type="submit" class="button-login" value="Verzenden">
            </form>
        </section>
    </main>
@endsection
