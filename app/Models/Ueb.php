<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ueb extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'province',
        'logo',
        'image',
        'intro',
        'content',
        'mission',
        'vision',
        'address',
        'website',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'position' => 'int',
            'website' => 'string',
        ];
    }
}
