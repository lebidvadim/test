<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 * @property int id
 * @property int region_city_id
 * @property string street
 * @property string house
 * @property string apartment
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property-read RegionCity city
 */
class CityAddress extends Model
{
    protected $fillable = [
        'region_city_id',
        'street',
        'house',
        'apartment'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(RegionCity::class, 'region_city_id');
    }
}
