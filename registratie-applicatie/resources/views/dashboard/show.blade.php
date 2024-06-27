@extends('layouts.layout-dashboard')

@section('title', $form->name)

@section('content')
    <main>
        <header class="header-with-status">
            <h1>{{ $form->name }}</h1>
            <div class="status-block">
                <form action="{{ route('form.updateStatus', $form->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="status">Status:</label>
                    <select name="status" id="status">
                        <option value="pending" {{ $form->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="approved" {{ $form->status == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="rejected" {{ $form->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                    <button type="submit">Update</button>
                </form>
            </div>
        </header>

        {{-- Projects --}}
        <div class="projects">
            <div class="header-row">
                <div class="header-item">Bedrijf</div>
                <div class="header-item">KVK-nummer</div>
                <div class="header-item">Plaats</div>
                <div class="header-item">Activiteit</div>
            </div>
            <div class="project-row">
                <div class="project-item">{{ $form->company }}</div>
                <div class="project-item">{{ $form->kvk_number }}</div>
                <div class="project-item">{{ $form->place }}</div>
                <div class="project-item">{{ $form->activity }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item">Medewerkers</div>
                <div class="header-item">Website</div>
                <div class="header-item">Contactpersoon</div>
                <div class="header-item">Functie</div>
            </div>
            <div class="project-row">
                <div class="project-item">{{ $form->workers }}</div>
                <div class="project-item">{{ $form->website }}</div>
                <div class="project-item">{{ $form->contactperson }}</div>
                <div class="project-item">{{ $form->function }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item">Telefoonnummer</div>
                <div class="header-item">E-mailadres</div>
                <div class="header-item">Aangemaakt</div>
                <div class="header-item">Laatste wijziging</div>
            </div>
            <div class="project-row">
                <div class="project-item">{{ $form->phone }}</div>
                <div class="project-item">{{ $form->email }}</div>
                <div class="project-item">{{ $form->created_at->format('d-m-Y') }}</div>
                <div class="project-item">{{ $form->updated_at->format('d-m-Y') }}</div>
            </div>
        </div>
        <div class="button-group">
            <div class="back-button">
                <a href="/" onclick="history.back(); return false;"><i class="fa-solid fa-arrow-left"></i>Ga terug</a>
            </div>

            {{-- Delete Button --}}
            <div class="delete-button">
                <form action="{{ route('form.destroy', $form->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fa-solid fa-trash"></i>Verwijderen</button>
                </form>
            </div>
        </div>
    </main>
@endsection
