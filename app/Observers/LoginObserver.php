<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\WelcomeNotification;

class LoginObserver
{
    public function created(User $login)
    {
        $admin = $login->admin;
        $admin->notify(new WelcomeNotification());
    }
}