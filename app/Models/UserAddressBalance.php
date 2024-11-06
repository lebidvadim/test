<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * @mixin Builder
 * @property int id
 * @property int user_address_id
 * @property float amount
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property-read Server server
 * @property-read Collection<ServerTournament> tournaments
 */
class UserAddressBalance extends Model
{
    protected $fillable = [
        'user_address_id',
        'amount'
    ];
}
