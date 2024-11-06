<?php

    namespace App\Http\Resources;

    use App\Models\UserAddress;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    /** @mixin UserAddress */
    class UserAddressResource extends JsonResource
    {
        public function toArray(Request $request): array
        {
            return [
                'device_id' => $this->device_id,
                'address' => $this->address_full,
                'status' => $this->status,
                'tariff' => $this->tariff->name,
                'balance' => $this->balances()->pluck('amount')->sum(),
                'services' => [
                    'tv' => $this->tv->name,
                    'ip' => $this->ip->value,
                ]
            ];
        }
    }
