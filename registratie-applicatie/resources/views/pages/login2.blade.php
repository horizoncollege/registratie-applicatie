@extends('layouts.layout')


<main>
    <div class="login">
        <div class="login-container">
            <div class="login-left">
            </div>
            <div class="login-right">
                <h1>Welkom terug!</h1>
                <form action="/login" method="post">
                    <div class="input-group">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Wachtwoord</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="btm-row">
                        <a href="#">Wachtwoord vergeten?</a>
                        <a href="/aanmelden" class="button-new-project">Log in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
