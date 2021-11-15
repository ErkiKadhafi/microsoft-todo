<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\TaskList;
use \App\Models\Task;
use \App\Models\Subtask;
use \App\Models\Category;
use \App\Models\Color;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
            seed Users, 
            seed Lists as TaskLists (List is reserve keyword in laravel),
            seed Colors
        */
        Color::factory(5)->create();
        User::factory(2)->create()->each(function($user){
            TaskList::factory(2)->make()->each(function($taskList) use($user){
                $color = Color::inRandomOrder()->first();
                $taskList->color()->associate($color);
                $taskList->user()->associate($user);
                $taskList->save();
            });
        });

        /*
            seed Tasks ans Subtasks based on TaskLists and Users, 
        */
        TaskList::all()->each(function($taskList){
            Task::factory(3)->make()->each(function($task) use($taskList){
                $user = User::inRandomOrder()->first();
                $task->user()->associate($user);
                $task->taskList()->associate($taskList);
                $task->save();
                
                $subtasks = Subtask::factory(3)->make();
                $task->subtasks()->saveMany($subtasks);
            });
        });

        /*
            seed Task categories as pivot table 
        */
        Category::factory(5)->create();
        Task::all()->each(function($task){
            $categories = Category::inRandomOrder()->take(2)->pluck('id');
            $task->categories()->attach($categories);
        });

    }
}
