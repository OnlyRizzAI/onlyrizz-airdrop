<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserTask extends Pivot
{
    public $incrementing = true;

    protected $casts = [
        'completed_at' => 'datetime',
    ];

    public function isCompleted(): bool
    {
        return !is_null($this->completed_at);
    }

    public function isVerified(): bool
    {
        return !is_null($this->completed_at);
    }

    public function verify(): void
    {
        // TODO
    }
}
