<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'color_id' => rand(1,5),
            'user_id' => rand(1,10),
            'name' => $this->faker->jobTitle(),
        ];
    }
}
