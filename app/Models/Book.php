<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes, Prunable;

    public function prunable()
    {
        return static::where('deleted_at', '<=', now()->subMonth());
    }

    protected $fillable = [
        'user_id',
        'title',
        'due_date',
        'start_date',
        'page',
        'page_per_day',
    ];
}
