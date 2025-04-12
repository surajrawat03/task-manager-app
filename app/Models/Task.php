<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'title',
        'description',
        'team_id',
        'user_id',
        'status',
        'priority',
    ];

    /**
     * Get the team that owns the task.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the user (assignee) that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
