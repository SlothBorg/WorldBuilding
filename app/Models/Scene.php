<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    use HasFactory;

    protected $casts = [
        'dark' => 'boolean',
    ];

    public function event()
    {
        return $this->hasOne(Event::class);
    }
}
