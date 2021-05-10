<?php

namespace App\Models;

use Database\Factories\NationFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Nation
 *
 * @property int $id
 * @property int $nation_id
 * @property string $name
 * @property string $img
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static NationFactory factory(...$parameters)
 * @method static Builder|Nation newModelQuery()
 * @method static Builder|Nation newQuery()
 * @method static Builder|Nation query()
 * @method static Builder|Nation whereCreatedAt($value)
 * @method static Builder|Nation whereId($value)
 * @method static Builder|Nation whereImg($value)
 * @method static Builder|Nation whereName($value)
 * @method static Builder|Nation whereNationId($value)
 * @method static Builder|Nation whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Nation extends Model {
    use HasFactory;

    protected $fillable = ['nation_id', 'name', 'img'];
}
