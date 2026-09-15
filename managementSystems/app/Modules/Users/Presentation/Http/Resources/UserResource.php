<?php

namespace App\Modules\Users\Presentation\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            [ 
                'id' => $this->id, 
                'name' => $this->name, 
                'email' => $this->email, 
                'phone' => $this->phone,
                'username' => $this->username,
                'address' => $this->address,
                'bio' => $this->bio,
                'picture' => $this->picture,
                'type' => $this->type, 
                'status' => $this->status, 
                'created_at' => $this->created_at?->toISOString(), 
                'updated_at' => $this->updated_at?->toISOString(), 
            ]
        ];
    }
}