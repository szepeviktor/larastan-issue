<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    protected User $user;

    public function bar(): void
    {
        $this->user = User::factory()->createOne();
    }
}

