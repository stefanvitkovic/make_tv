<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'short_name' => $this->short_name,
            'uid' => $this->uid,
            'name' => $this->when($request->locale, function () use ($request) {
                return $this->translated_name($request->locale);
            }),
            'desc' => $this->when($request->locale, function () use ($request) {
                return $this->translated_desc($request->locale);
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
