<?php

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Str;

Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/home', function () {
    return view('pages/home');
})->name('home');

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');
Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();

    // Cek apakah user sudah ada
    $user = User::where('email', $googleUser->getEmail())->first();

    if (!$user) {
        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'password' => bcrypt(Str::random(16)),
            'google_id' => $googleUser->getId(), // pastikan field ini ada di tabel
        ]);
    }

    Auth::login($user);
    return redirect('/home'); // arahkan ke halaman setelah login
});
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login'); // arahkan ke halaman login atau landing page
})->name('logout');