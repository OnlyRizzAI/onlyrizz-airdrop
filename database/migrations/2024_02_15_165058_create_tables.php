<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_type');
            $table->string('title');
            $table->string('help_text')->nullable();
            $table->integer('points')->default(0);
            $table->jsonb('payload')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Task::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tasks');
        Schema::dropIfExists('tasks');
    }
};
