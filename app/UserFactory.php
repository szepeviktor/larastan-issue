<?php

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
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
