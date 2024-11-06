<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 * @property int id
 * @property string value
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Ip extends Model
{
    protected $fillable = [
        'value'
    ];
}
