<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 * @property int id
 * @property string name
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Tv extends Model
{
    protected $fillable = [
        'name'
    ];
}
