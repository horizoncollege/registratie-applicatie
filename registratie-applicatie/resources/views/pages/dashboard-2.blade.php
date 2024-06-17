@extends('layouts.layout')

@include('partials.sidebar')

<div class="container">
    <main>
        <!-- Header -->
        <header>
            <h1>Overzicht</h1>
        </header>

        <!-- Content -->
        <section id="home" class="dashboard-section">
            <div class="card-container">
                <div class="left-column">
                    <div class="card card-left-purple">
                        <h2>Je bolle vader op een<br><b>Bakfiets</b></h2>
                        <p>Bruno Dijkosso heeft Tim de Giraffe zijn laptop gefixt. Helemaal gratis!</p>
                        <a href="#" class="button-white">Bekijk</a>
                    </div>

                    <div class="bottom-row">
                        <div class="card card-left">
                            <h3>Ingediende projectvoorstellen</h3>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                        </div>

                        <div class="card card-left">
                            <h3>Ingediende projectvoorstellen</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="card card-right">
                    <h3>Ingediende projectvoorstellen</h3>
                    <p></p>
                </div>
            </div>
            <div class="card-container">
                <div class="left-column">
                    <div class="card card-left">
                        <h3>Ingediende projectvoorstellen</h3>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                    </div>
                </div>
                <div class="card card-right">
                    <h3>Ingediende projectvoorstellen</h3>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                        velit...</p>
                </div>
            </div>
        </section>
    </main>
</div>
