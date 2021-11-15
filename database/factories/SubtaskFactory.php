<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubtaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_id' => rand(1, 5),
            'name' => $this->faker->jobTitle(),
            'is_complete' => $this->faker->boolean(),
        ];
    }
}
