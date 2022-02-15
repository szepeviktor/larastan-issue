<?php

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory implements Factory
{
    public function configure(): UserFactory
    {
        return $this->afterCreating(function (\App\Models\User $user) {
            return true;
        });
    }
}
