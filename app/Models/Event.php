<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'dark' => 'boolean',
    ];

    public function period()
    {
        return $this->hasOne(Period::class);
    }

    public function shortSummary() : string
    {
        return substr($this->summary, 0, 75);
    }
}
