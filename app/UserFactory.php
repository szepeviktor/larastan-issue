<?php

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        return [];
    }

    public function configure(): UserFactory
    {
        return $this->afterCreating(function (\App\Models\User $user) {
            return true;
        });
    }
}
