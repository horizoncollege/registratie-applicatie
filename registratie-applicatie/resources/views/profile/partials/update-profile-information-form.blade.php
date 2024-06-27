<section class="profile-section">
    <header>
        
    </header>

    <h3 class="header-title">
        {{ __('Profiel informatie') }}
    </h3>

    <p class="header-subtitle">
        Update de profielgegevens en het e-mailadres van uw account.
    </p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="form-container">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name" class="form-label">{{ __('Naam') }}</label>
            <input id="name" name="name" type="text" class="form-input" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            @error('name')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">{{ __('E-mail') }}</label>
            <input id="email" name="email" type="email" class="form-input" value="{{ old('email', $user->email) }}" required autocomplete="username" />
            @error('email')
                <span class="form-error">{{ $message }}</span>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="email-verification">
                    <p class="email-unverified">
                        {{ __('Uw e-mailadres is niet geverifieerd.') }}

                        <button form="send-verification" class="resend-button">
                            {{ __('Klik hier om de verificatie-e-mail opnieuw te verzenden.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="verification-sent">
                            {{ __('Er is een nieuwe verificatielink naar uw e-mailadres verzonden.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="save-button">{{ __('Opslaan') }}</button>

            @if (session('status') === 'profile-updated')
                <p class="status-message" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                    {{ __('Opgeslagen.') }}
                </p>
            @endif
        </div>
    </form>
</section>
