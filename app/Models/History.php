<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'locked' => 'boolean',
    ];

    public function periods()
    {
        return $this->hasMany(Period::class)
            ->orderBy('position', 'desc');
    }

    public function shortSummary() : string
    {
        return substr($this->summary, 0, 75);
    }

    public function displayStatus() : string
    {
        return $this->locked ? 'Private' : 'Public';
    }
}
