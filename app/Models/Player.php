<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'full_name',
        'age',
        'desc',
        'ovr',
        'pos',
        'position',
        'max_level',
        'img_avatar',
        'img_card',
        'url',
        'nationality',
        'market_value',
        'team',
        'stronger_foot',
        'height',
        'weight',
        'face',
        'my_club',
        'type',
    ];
}
