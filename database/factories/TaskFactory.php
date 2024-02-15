<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement(['Like a tweet', 'Retweet this tweet', 'Quote this tweet', 'Post a tweet that mentions @OnlyRizz']),
            'points' => $this->faker->randomElement([1000, 2000, 3000]),
            'expires_at' => Carbon::now()->addHours(random_int(12, 36)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
