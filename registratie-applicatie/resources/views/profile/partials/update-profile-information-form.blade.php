@extends('layouts.layout-dashboard')

<section>
    <header>
        <h2 style="font-size: 1.5rem; font-weight: 500; color: #111827;">
            {{ __('Profile Information') }}
        </h2>

        <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #4B5563;">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="form-container">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="form-label" />
            <x-text-input id="name" name="name" type="text" class="form-input" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="form-error" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="form-label" />
            <x-text-input id="email" name="email" type="email" class="form-input" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="form-error" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p style="font-size: 0.875rem; margin-top: 0.5rem; color: #4B5563;">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" style="text-decoration: underline; font-size: 0.875rem; color: #4B5563; cursor: pointer; outline: none; border: none; background-color: transparent;">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p style="font-weight: 500; font-size: 0.875rem; margin-top: 0.5rem; color: #10B981;">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div style="display: flex; align-items: center; gap: 1rem;">
            <button type="submit" class="save-button">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="status-message">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
