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
                    <img class="foto-profiel" src="https://i.postimg.cc/vZQ2rdJL/1683614452741-1.jpg" alt="Profile Picture">
                    <h3>{{ Auth::user()->name }}</h3>
                </div>

                <div class="left-column">
                    <div class="card card-left-profiel">
                        <div class="h3-profiel">
                            <h2>Jouw gegevens</h2>
                        </div>

                        <div class="container-profiel">
                            <div class="column-profiel">
                                <a><i class="fa-regular fa-envelope"></i> timstefabbing@gmail.com</a>
                                <a><i class="fa-solid fa-phone"></i> +31 06 123 45 678</a>
                                <a><i class="fa-solid fa-location-dot"></i> Dille 28, 1705 RG Heerhugowaard</a>
                                <a><i class="fa-solid fa-briefcase"></i> Functie</a>
                            </div>

                            <div class="column-profiel">
                                <a><i class="fa-solid fa-address-book"></i> Contactpersoon</a>
                                <a><i class="fa-regular fa-building"></i> Bedrijfsactiviteit</a>
                                <a><i class="fa-solid fa-book-open"></i> KVK-nummer</a>
                                <a><i class="fa-solid fa-globe"></i> Website</a>
                            </div>
                        </div>

                        <div class="account-options-profiel">
                            <a href="#">Wachtwoord wijzigen</a>
                            <a href="#">Account verwijderen</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
