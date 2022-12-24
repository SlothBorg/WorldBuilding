<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'dark' => 'boolean',
        'bloody' => 'boolean',
    ];

    public function history()
    {
        return $this->hasOne(History::class);
    }
}
