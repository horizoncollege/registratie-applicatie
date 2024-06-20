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
                <div class="form-row">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-row">
                    <label for="company">Bedrijfsnaam:</label>
                    <input type="text" id="company" name="company" required>
                </div>

                <div class="form-row">
                    <label for="place">Plaats:</label>
                    <input type="text" id="place" name="place" required>
                </div>

                <div class="form-row">
                    <label for="contactperson">Contactpersoon:</label>
                    <input type="text" id="contactperson" name="contactperson" required>
                </div>

                <div class="form-row">
                    <label for="function">Functie:</label>
                    <input type="text" id="function" name="function" required>
                </div>

                <div class="form-row">
                    <label for="phone">Telefoonnummer:</label>
                    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">
                </div>

                <div class="form-row">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-row">
                    <label for="website">Website:</label>
                    <input type="url" id="website" name="website">
                </div>

                <div class="form-row">
                    <label for="activity">Bedrijfsactiviteit / Core business:</label>
                    <input type="text" id="activity" name="activity" required>
                </div>

                <div class="form-row">
                    <label for="workers">Aantal medewerkers:</label>
                    <input type="number" id="workers" name="workers" required>
                </div>

                <div class="form-row">
                    <label for="kvk_number">KVK Nummer:</label>
                    <input type="text" id="kvk_number" name="kvk_number" required>
                </div>

                <div class="form-row dropzone">
                    <label for="fileInput">Upload bestand</label>
                    <input type="file" id="fileInput" name="fileInput">
                </div>

                <div class="form-row">
                    <input type="submit" class="button-login" value="Verzenden">
                </div>
            </form>
        </section>
    </main>
@endsection
