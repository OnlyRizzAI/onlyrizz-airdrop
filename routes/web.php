<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('twitter-oauth-2')->redirect();
});

Route::get('/auth/callback', function () {
    $twitterUser = Socialite::driver('twitter-oauth-2')->user();

    $user = User::updateOrCreate([
        'twitter_id' => $twitterUser->id,
    ], [
        'name' => $twitterUser->name,
        'email' => $twitterUser->email,
        'twitter_token' => $twitterUser->token,
        'twitter_refresh_token' => $twitterUser->refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});
