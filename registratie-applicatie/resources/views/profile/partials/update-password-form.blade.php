<section class="password-section">
    <header>
        
    </header>

    <h2 class="header-title">
        {{ __('Vernieuw wachtwoord') }}
    </h2>

    <p class="header-subtitle">
        {{ __('Zorg ervoor dat uw account een lang, willekeurig wachtwoord gebruikt om veilig te blijven.') }}
    </p>

    <form method="post" action="{{ route('password.update') }}" class="form-container">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="update_password_current_password" class="form-label">{{ __('Huidig ​​wachtwoord') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-input" autocomplete="current-password" />
            @error('current_password')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="update_password_password" class="form-label">{{ __('Nieuw wachtwoord') }}</label>
            <input id="update_password_password" name="password" type="password" class="form-input" autocomplete="new-password" />
            @error('password')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="update_password_password_confirmation" class="form-label">{{ __('Bevestig wachtwoord') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-input" autocomplete="new-password" />
            @error('password_confirmation')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="save-button">{{ __('Opslaan') }}</button>

            @if (session('status') === 'password-updated')
                <p class="status-message" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Opgeslagen.') }}
                </p>
            @endif
        </div>
    </form>
</section>