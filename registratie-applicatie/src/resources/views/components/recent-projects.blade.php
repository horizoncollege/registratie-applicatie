<div class="bottom-section">
    <div class="heading">
        @if ($showAllProjectsButton ?? false)
            <h2>Recente projecten</h2>
            <div class="url-button">
                <a href="{{ route('projecten') }}"><i class="fa-solid fa-arrow-right"></i>Bekijk alle projecten</a>
            </div>
        @endif
    </div>
    <div class="card-container">
        {{-- In Afwachting --}}
        @if (isset($pendingProjects))
            <div class="project-section">
                <h2>In afwachting</h2>
                <div class="projects">
                    <div class="header-row">
                        <div class="header-item">Projectnaam</div>
                        <div class="header-item">Bedrijf</div>
                        <div class="header-item">Contactpersoon</div>
                        <div class="header-item">Laatste wijziging</div>
                        <div class="header-item" style="visibility: hidden;">Actie</div>
                    </div>
                    @forelse ($pendingProjects as $project)
                        <div class="project-row">
                            <div class="project-item">{{ $project->name }}</div>
                            <div class="project-item">{{ $project->company }}</div>
                            <div class="project-item">{{ $project->contactperson }}</div>
                            <div class="project-item">{{ $project->updated_at->format('d-m-Y') }}</div>
                            <div class="project-item">
                                <div class="project-item bekijk-button">
                                    <?php
                                    $name = strtolower($project->name);
                                    $url = route('project.show', ['name' => urlencode($name)]);
                                    $url = str_replace('+', '%20', $url);
                                    ?>
                                    <a href="{{ $url }}">
                                        <i class="fa-solid fa-arrow-right"></i> Open project
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="project-row">
                            <div class="project-item" colspan="5">Geen projecten in afwachting gevonden.</div>
                        </div>
                    @endforelse
                </div>
            </div>
        @endif

        {{-- Approved Projects --}}
        <div class="project-section">
            @if ($showHeaderText ?? false)
                <h2>Goedgekeurde projecten</h2>
            @endif
            <div class="projects">
                <div class="header-row">
                    <div class="header-item">Projectnaam</div>
                    <div class="header-item">Bedrijf</div>
                    <div class="header-item">Contactpersoon</div>
                    <div class="header-item">Laatste wijziging</div>
                    <div class="header-item" style="visibility: hidden;">Actie</div>
                </div>
                @forelse ($approvedProjects as $project)
                    <div class="project-row">
                        <div class="project-item">{{ $project->name }}</div>
                        <div class="project-item">{{ $project->company }}</div>
                        <div class="project-item">{{ $project->contactperson }}</div>
                        <div class="project-item">{{ $project->updated_at->format('d-m-Y') }}</div>
                        <div class="project-item">
                            <div class="project-item bekijk-button">
                                <?php
                                $name = strtolower($project->name);
                                $url = route('project.show', ['name' => urlencode($name)]);
                                $url = str_replace('+', '%20', $url);
                                ?>
                                <a href="{{ $url }}">
                                    <i class="fa-solid fa-arrow-right"></i> Open project
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="project-row">
                        <div class="project-item" colspan="5">Geen goedgekeurde projecten gevonden.</div>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Afgekeurde Projecten --}}
        @if (isset($rejectedProjects))
            <div class="project-section">
                <h2>Afgekeurde projecten</h2>
                <div class="projects">
                    <div class="header-row">
                        <div class="header-item">Projectnaam</div>
                        <div class="header-item">Bedrijf</div>
                        <div class="header-item">Contactpersoon</div>
                        <div class="header-item">Laatste wijziging</div>
                        <div class="header-item" style="visibility: hidden;">Actie</div>
                    </div>
                    @forelse ($rejectedProjects as $project)
                        <div class="project-row">
                            <div class="project-item">{{ $project->name }}</div>
                            <div class="project-item">{{ $project->company }}</div>
                            <div class="project-item">{{ $project->contactperson }}</div>
                            <div class="project-item">{{ $project->updated_at->format('d-m-Y') }}</div>
                            <div class="project-item">
                                <div class="project-item bekijk-button">
                                    <?php
                                    $name = strtolower($project->name);
                                    $url = route('project.show', ['name' => urlencode($name)]);
                                    $url = str_replace('+', '%20', $url);
                                    ?>
                                    <a href="{{ $url }}">
                                        <i class="fa-solid fa-arrow-right"></i> Open project
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="project-row">
                            <div class="project-item" colspan="5">Geen afgekeurde projecten gevonden.</div>
                        </div>
                    @endforelse
                </div>
            </div>
        @endif
    </div>
</div>
