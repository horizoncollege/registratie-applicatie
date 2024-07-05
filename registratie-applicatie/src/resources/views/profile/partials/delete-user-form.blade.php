<section class="delete-account-section">
    <header>
        
    </header>

    <h2 class="header-title">
        {{ __('Account verwijderen') }}
    </h2>

    <p class="header-subtitle">
        {{ __('Zodra uw account is verwijderd, worden alle bronnen en gegevens permanent verwijderd. Voordat u uw account verwijdert, downloadt u alle gegevens of informatie die u wilt behouden.') }}
    </p>

    <button class="danger-button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        {{ __('Verwijder gebruiker') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="form-container">
            @csrf
            @method('delete')

            <h2 class="header-title">
                {{ __('Weet u zeker dat u uw account wilt verwijderen?') }}
            </h2>

            <p class="header-subtitle">
                {{ __('Zodra uw account is verwijderd, worden alle bronnen en gegevens permanent verwijderd. Voer uw wachtwoord in om te bevestigen dat u uw account definitief wilt verwijderen.') }}
            </p>

            <div class="form-group">
                <label for="password" class="form-label sr-only">{{ __('Wachtwoord') }}</label>
                <input id="password" name="password" type="password" class="form-input" placeholder="{{ __('Password') }}" />
                @error('password')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" class="secondary-button" x-on:click="$dispatch('close')">
                    {{ __('Annuleren') }}
                </button>

                <button type="submit" class="danger-button">
                    {{ __('Account verwijderen') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>