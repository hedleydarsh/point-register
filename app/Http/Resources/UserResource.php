<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'profile_photo_path' => $this->profile_photo_path,
            'user_types_id' => $this->user_types_id,
            'collaborator'  => $this->collaborator,
            'manager' => User::find($this->collaborator->manager_id)->name,
            'created_by' => User::find($this->collaborator->created_by)->name,
        ];

        return $data;
    }
}
