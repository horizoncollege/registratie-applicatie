<section class="delete-account-section">
    <header>
        
    </header>

    <h2 class="header-title">
        {{ __('Delete Account') }}
    </h2>

    <p class="header-subtitle">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>

    <button class="danger-button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="form-container">
            @csrf
            @method('delete')

            <h2 class="header-title">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="header-subtitle">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="form-group">
                <label for="password" class="form-label sr-only">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" class="form-input" placeholder="{{ __('Password') }}" />
                @error('password')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" class="secondary-button" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="danger-button">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>