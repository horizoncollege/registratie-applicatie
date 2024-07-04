@extends('layouts.layout-dashboard')

@section('title', 'Profiel')

@section('content')
<main>
    <!-- Header -->
    <header>
        <h1>Profiel</h1>
    </header>

    <!-- Content -->
    <section id="home" class="dashboard-section">
        <div class="card-container">
            <div class="card card-right-profiel">
                <img class="foto-profiel" src="{{ Auth::user()->profile_picture }}" alt="profile-picture">
                <h3>{{ Auth::user()->name }}</h3>
            </div>

            <div class="left-column">
                <div class="card card-left-profiel">
                    <div class="h3-profiel">
                        <h3>Jouw gegevens</h3>
                    </div>

                    <div class="container-profiel">
                        <div class="column-profiel">
                            <a><i class="fa-regular fa-envelope"></i> {{ Auth::user()->email }}</a>
                            <a><i class="fa-solid fa-phone"></i> {{ Auth::user()->phone }}</a>
                            <a><i class="fa-solid fa-location-dot"></i> {{ Auth::user()->place }}</a>
                            <a><i class="fa-solid fa-briefcase"></i> {{ Auth::user()->function }}</a>
                        </div>

                        <div class="column-profiel">
                            <a><i class="fa-solid fa-address-book"></i> {{ Auth::user()->contactperson }}</a>
                            <a><i class="fa-regular fa-building"></i> {{ Auth::user()->company }}</a>
                            <a><i class="fa-solid fa-book-open"></i> {{ Auth::user()->kvk_number }}</a>
                            <a><i class="fa-solid fa-globe"></i> {{ Auth::user()->website }}</a>
                        </div>
                    </div>

                    <div class="account-options-profiel">
                        <a href="{{ url('dashboard/profile') }}">Wachtwoord wijzigen</a>
                        <a href="{{ url('dashboard/profile') }}">Account verwijderen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($errors->any())
    <div class="notification is-danger is-light">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file_upload">
        <button type="submit">Upload</button>
    </form>
</main>
@endsection
