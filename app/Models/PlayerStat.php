<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PlayerStat
 *
 * @property int $id
 * @property int $offensive_awareness
 * @property int $ball_control
 * @property int $dribbling
 * @property int $tight_possession
 * @property int $low_pass
 * @property int $lofted_pass
 * @property int $finishing
 * @property int $heading
 * @property int $place_kicking
 * @property int $curl
 * @property int $speed
 * @property int $acceleration
 * @property int $kicking_power
 * @property int $jump
 * @property int $physical_contact
 * @property int $balance
 * @property int $stamina
 * @property int $defensive_awareness
 * @property int $ball_winning
 * @property int $aggression
 * @property int $gk_awareness
 * @property int $gk_catching
 * @property int $gk_clearing
 * @property int $gk_reflexes
 * @property int $gk_reach
 * @property int $ovr
 * @property int $ovr_0
 * @property int $ovr_1
 * @property int $ovr_2
 * @property int $ovr_3
 * @property int $ovr_4
 * @property int $ovr_5
 * @property int $ovr_6
 * @property int $ovr_7
 * @property int $ovr_8
 * @property int $ovr_9
 * @property int $ovr_10
 * @property int $ovr_11
 * @property int $ovr_12
 * @property int $player_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PlayerStatFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereAcceleration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereAggression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereBallControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereBallWinning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereCurl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereDefensiveAwareness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereDribbling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereGkAwareness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereGkCatching($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereGkClearing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereGkReach($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereGkReflexes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereJump($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereKickingPower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereLoftedPass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereLowPass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOffensiveAwareness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereOvr9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat wherePhysicalContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat wherePlaceKicking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereTightPossession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerStat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
