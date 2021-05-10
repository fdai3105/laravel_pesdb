<?php

namespace App\Models;

use Database\Factories\PlayerFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Player
 *
 * @property int $id
 * @property string $name
 * @property string|null $full_name
 * @property int $age
 * @property string $desc
 * @property int $ovr
 * @property string $pos
 * @property string $position
 * @property int|null $max_level
 * @property string $img_avatar
 * @property string $img_card
 * @property string $url
 * @property string|null $nationality
 * @property string|null $market_value
 * @property string|null $team
 * @property string|null $stronger_foot
 * @property string|null $height
 * @property string|null $weight
 * @property string|null $face
 * @property string|null $my_club
 * @property string|null $type
 * @property int $nation_id
 * @property int $team_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static PlayerFactory factory(...$parameters)
 * @method static Builder|Player newModelQuery()
 * @method static Builder|Player newQuery()
 * @method static Builder|Player query()
 * @method static Builder|Player whereAge($value)
 * @method static Builder|Player whereCreatedAt($value)
 * @method static Builder|Player whereDesc($value)
 * @method static Builder|Player whereFace($value)
 * @method static Builder|Player whereFullName($value)
 * @method static Builder|Player whereHeight($value)
 * @method static Builder|Player whereId($value)
 * @method static Builder|Player whereImgAvatar($value)
 * @method static Builder|Player whereImgCard($value)
 * @method static Builder|Player whereMarketValue($value)
 * @method static Builder|Player whereMaxLevel($value)
 * @method static Builder|Player whereMyClub($value)
 * @method static Builder|Player whereName($value)
 * @method static Builder|Player whereNationId($value)
 * @method static Builder|Player whereNationality($value)
 * @method static Builder|Player whereOvr($value)
 * @method static Builder|Player wherePos($value)
 * @method static Builder|Player wherePosition($value)
 * @method static Builder|Player whereStrongerFoot($value)
 * @method static Builder|Player whereTeam($value)
 * @method static Builder|Player whereTeamId($value)
 * @method static Builder|Player whereType($value)
 * @method static Builder|Player whereUpdatedAt($value)
 * @method static Builder|Player whereUrl($value)
 * @method static Builder|Player whereWeight($value)
 * @mixin Eloquent
 */
class Player extends Model {
    use HasFactory;

    protected $fillable = [
        'nation_id',
        'team_id',
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
        'market_value',
        'stronger_foot',
        'height',
        'weight',
        'face',
        'my_club',
        'type',
    ];
}
