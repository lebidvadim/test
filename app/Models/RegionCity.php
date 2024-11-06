<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 * @property int id
 * @property int region_id
 * @property string name
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property-read Region region
 */
class RegionCity extends Model
{
    protected $fillable = [
        'region_id',
        'name'
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
