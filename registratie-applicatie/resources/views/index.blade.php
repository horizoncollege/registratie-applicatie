@extends('layouts.layout')

@section('title', 'Talland College')

@section('content')
    <main>
        <!-- Header -->
        <header>
            <h1>Welkom</h1>
        </header>

        <!-- Content -->
        <section id="home" class="dashboard-section">
            <div class="card-container">
                <div class="left-column">
                    <div class="card card-left-purple">
                        <h2>Werk samen met anderen aan nieuwe<br><b>Digitale kansen</b></h2>
                        <p>Ben jij mkb-ondernemer en wil je graag tijd en geld besparen met digitalisering, maar is
                            het vaak te duur en weet je niet waar je moet beginnen? Werkplaats Digitaal Ondernemen
                            brengt de vraagstukken van ondernemers als project in het onderwijs.</p>
                        <a href="#" class="button-white">Bekijk</a>
                    </div>

                    <div class="bottom-row">
                        <div class="video-container">
                            <video controls poster="{{ asset('images/talland_thumbnail.jpg') }}">
                                <source src="{{ asset('video/Talland_promo_vid.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="card card-left">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim itaque alias cumque
                                voluptates voluptate eum odit sed nulla voluptatum porro iusto, iste, dolorum, culpa
                                quas? Facere, vel sequi at libero, in ut facilis cum eius perferendis repudiandae itaque
                                totam culpa aliquam provident amet accusantium tenetur magnam placeat. Earum totam est
                                ad corrupti, illum aperiam sunt esse. Tenetur ratione fugit perspiciatis
                            </p>
                            <a href="#" class="button-purple">Doe mee!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="left-column">
                    <div class="card card-left">
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim itaque alias cumque
                            voluptates voluptate eum odit sed nulla voluptatum porro iusto, iste, dolorum, culpa
                            quas? Facere, vel sequi at libero, in ut facilis cum eius perferendis repudiandae itaque
                            totam culpa aliquam provident amet accusantium tenetur magnam placeat. Earum totam est
                            ad corrupti, illum aperiam sunt esse. Tenetur ratione fugit perspiciatis dolorem labore
                            obcaecati, eius rem! Ducimus aut pariatur architecto error excepturi, natus cumque</p>
                        <a href="#" class="button-purple">Hoe werkt het?</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
