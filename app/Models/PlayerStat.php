<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model {
    use HasFactory;


    protected $fillable = [
        'offensive_awareness',
        'ball_control',
        'dribbling',
        'tight_possession',
        'low_pass',
        'lofted_pass',
        'finishing',
        'heading',
        'place_kicking',
        'curl',
        'speed',
        'acceleration',
        'kicking_power',
        'jump',
        'physical_contact',
        'balance',
        'stamina',
        'defensive_awareness',
        'ball_winning',
        'aggression',
        'gk_awareness',
        'gk_catching',
        'gk_clearing',
        'gk_reflexes',
        'gk_reach',
        'ovr',
        'ovr_0',
        'ovr_1',
        'ovr_2',
        'ovr_3',
        'ovr_4',
        'ovr_5',
        'ovr_6',
        'ovr_7',
        'ovr_8',
        'ovr_9',
        'ovr_10',
        'ovr_11',
        'ovr_12',
    ];
}
