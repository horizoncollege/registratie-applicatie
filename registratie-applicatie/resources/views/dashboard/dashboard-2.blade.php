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
                            <h3>Ingediende projectvoorstellen</h3>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                        </div>

                        <div class="card card-left">
                            <h3>Ingediende projectvoorstellen</h3>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-right">
                    <h3>Ingediende projectvoorstellen</h3>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit.</p>
                </div>
            </div>

            <div class="bottom-section">
                <div class="heading">
                    <h2>Recente projecten</h2>
                    <div class="url-button">
                        <a href="dashboard-2/projecten"><i class="fa-solid fa-arrow-right"></i>Bekijk alle projecten</a>
                    </div>
                </div>
                <div class="card-container">
                    <div class="left-column">
                        <div class="card-left">
                            <div class="projects">
                                <div class="header-row">
                                    <div class="header-item">Projectnaam</div>
                                    <div class="header-item">Bedrijf</div>
                                    <div class="header-item">Contactpersoon</div>
                                    <div class="header-item">Datum</div>
                                    <div class="header-item" style="visibility: hidden;">Actie</div>
                                </div>
                                @forelse ($recentProjects as $project)
                                    <div class="project-row">
                                        <div class="project-item">{{ $project->name }}</div>
                                        <div class="project-item">{{ $project->company }}</div>
                                        <div class="project-item">{{ $project->contactperson }}</div>
                                        <div class="project-item">{{ $project->created_at->format('d-m-Y') }}</div>
                                        <div class="project-item">
                                            <div class="project-item bekijk-button">
                                                <?php
                                                $name = strtolower($project->name);
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
