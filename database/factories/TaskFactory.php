<?php

namespace Database\Factories;

use App\Enums\TaskType;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'task_type' => $this->faker->randomElement(TaskType::cases()),
            'title' => $this->faker->randomElement(['Like a tweet', 'Retweet this tweet', 'Quote this tweet', 'Post a tweet that mentions @OnlyRizz']),
            'points' => $this->faker->randomElement([100, 200, 300]),
            'help_text' => null,
            'link' => $this->faker->randomElement([null, 'https://twitter.com/OnlyRizzHQ/status/1754956673108578475']),
            'expires_at' => Carbon::now()->addHours(random_int(12, 36)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
