@extends('layouts.layout-login')

@section('title', 'Log in')

<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="login">
        <div class="window">
            <div class="login-container">
                <div class="login-left">
                    <!-- Left content if any -->
                </div>
                <div class="login-right">
                    <h1>Welkom terug!</h1>
                    <div class="input-group">
                        <x-input-label for="email" :value="__('E-mailadres')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="input-group">
                        <x-input-label for="password" :value="__('Wachtwoord')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="btm-row">
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <div class="url-button-login">
                                    <a href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="button-login">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="back-button">
                <a href="/" onclick="history.back(); return false;"><i class="fa-solid fa-arrow-left"></i>Ga
                    terug</a>
            </div>
        </div>
    </div>
</form>
