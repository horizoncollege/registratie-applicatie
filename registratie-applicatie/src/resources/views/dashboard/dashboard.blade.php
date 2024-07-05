@extends('layouts.layout-dashboard')

@section('title', 'Dashboard')

@section('content')
    <main>
        <!-- Header -->
        <header>
            <h1>Dashboard</h1>
        </header>

        <!-- Content -->
        <section id="home" class="dashboard-section">
            <div class="card-container">
                <div class="left-column">
                    <div class="card card-left-purple">
                        <h2>Lorem ipsum dolor sit<br><b>Amet</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button-white">Bekijk</a>
                    </div>

                    <div class="bottom-row">
                        <div class="card card-left">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                        </div>

                        <div class="card card-left">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-right">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                </div>
            </div>

            {{-- Update --}}
            @include('components.recent-projects', [
                'approvedProjects' => $recentProjects,
                'showHeaderText' => false,
                'showAllProjectsButton' => true,
                'showHeading' => true,
            ])

        </section>
    </main>
@endsection
