<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    // return $user->id === $id;
    return true;
});

Broadcast::channel('private-release.16', function($user, $releaseiId) {
    return true;
});