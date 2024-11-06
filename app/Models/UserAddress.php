<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;

/**
 * @mixin Builder
 * @property int id
 * @property int tv_id
 * @property int ip_id
 * @property int city_address_id
 * @property int user_id
 * @property int tariff_id
 * @property string address_full
 * @property string device_id
 * @property string status
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property-read Tariff tariff
 * @property-read CityAddress address
 * @property-read Tv tv
 * @property-read Ip ip
 * @property-read Collection<UserAddressBalance> balances
 */
class UserAddress extends Model
{
    protected $fillable = [
        'city_address_id',
        'user_id',
        'tariff_id',
        'status',
        'tv_id',
        'ip_id',
    ];

    protected $appends = [
        'address_full'
    ];

    public function tariff(): BelongsTo
    {
        return $this->belongsTo(Tariff::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(CityAddress::class, 'city_address_id');
    }

    public function balances(): HasMany
    {
        return $this->hasMany(UserAddressBalance::class);
    }

    public function tv(): BelongsTo
    {
        return $this->belongsTo(Tv::class);
    }

    public function ip(): BelongsTo
    {
        return $this->belongsTo(Ip::class);
    }
    public function getAddressFullAttribute(): string
    {
        $apartment = !is_null($this->address->apartment) ? 'кв. '.$this->address->apartment : '';
        $addressFull = [$this->address->city->region->name, $this->address->city->name, 'ул. '.$this->address->street, 'буд. '.$this->address->house, $apartment];
        $filteredAddress = array_filter($addressFull, function($value) {
            return !empty($value);
        });
        return implode(', ', $filteredAddress);
    }
}
