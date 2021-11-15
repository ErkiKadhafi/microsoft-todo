<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\Color;

class TaskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $guarded = [];

    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle(),
        ];
    }
}
