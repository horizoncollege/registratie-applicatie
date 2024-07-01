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
            <div class="middle-row">
                <div class="header-item"><b>Bedrijf</b></div>
                <div class="project-item">{{ $form->company }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>KVK-nummer</b></div>
                <div class="project-item">{{ $form->kvk_number }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Plaats</b></div>
                <div class="project-item">{{ $form->place }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Activiteit</b></div>
                <div class="project-item">{{ $form->activity }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Medewerkers</b></div>
                <div class="project-item">{{ $form->workers }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Website</b></div>
                <div class="project-item">{{ $form->website }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Contactpersoon</b></div>
                <div class="project-item">{{ $form->contactperson }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Functie</b></div>
                <div class="project-item">{{ $form->function }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Telefoonnummer</b></div>
                <div class="project-item">{{ $form->phone }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>E-mailadres</b></div>
                <div class="project-item">{{ $form->email }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Aangemaakt</b></div>
                <div class="project-item">{{ $form->created_at->format('d-m-Y') }}</div>
            </div>
            <div class="middle-row">
                <div class="header-item"><b>Laatste wijziging</b></div>
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
