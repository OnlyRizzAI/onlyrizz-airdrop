<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tasks = Task::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Tester',
            'email' => 'test@example.com',
        ]);

        $user->tasks()->sync($tasks->random(rand(1, 3))->pluck('id')->toArray());
    }
}
