<?php

use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $tasks = auth()->user()?->tasks ?? [];

    $tasks = \App\Models\Task::all();

    $socials = [
        [
            'name' => 'Telegram',
            'link' => 'https://t.me/OnlyRizzHQ',
            'icon' => 'fab-telegram',
        ],
        [
            'name' => 'Twitter',
            'link' => 'https://twitter.com/OnlyRizzHQ',
            'icon' => 'fab-x-twitter',
        ],
        [
            'name' => 'Discord',
            'link' => 'https://discord.com/invite/FNEP5ywd7T',
            'icon' => 'fab-discord',
        ],
        [
            'name' => 'Website',
            'link' => 'https://onlyrizz.ai/',
            'icon' => 'fas-link',
        ],
        [
            'name' => 'Reddit',
            'link' => 'https://www.reddit.com/r/OnlyRizzAI/',
            'icon' => 'fab-reddit',
        ],
        [
            'name' => 'Youtube',
            'link' => 'https://www.youtube.com/@OnlyRizzHQ',
            'icon' => 'fab-youtube',
        ],
        [
            'name' => 'Telegram Announcements',
            'link' => 'https://t.me/OnlyRizzAnnouncements',
            'icon' => 'fab-telegram',
        ],
    ];

    return view('home', compact('tasks', 'socials'));
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
