<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'tasklists_id' => rand(0, 10),
            'user_id' => rand(0, 10),
            'reminder_datetime' => $this->faker->date(),
            'due_date' => $this->faker->date(),
            'attachment_url' => 'https://google.com/attachment',
            'note' =>  $this->faker->sentence(10),
            'is_complete' =>  $this->faker->boolean(),
            'is_my_day' =>  $this->faker->boolean(),
        ];
    }
}
