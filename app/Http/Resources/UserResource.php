<?php

    namespace App\Http\Resources;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;

    /** @mixin User */
    class UserResource extends JsonResource
    {
        public function toArray(Request $request): array
        {
            return [
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
                'phone' => $this->phone,
                'language' => $this->language,
                'theme' => $this->theme,
                'addresses' => UserAddressResource::collection($this->addresses)
            ];
        }
    }
