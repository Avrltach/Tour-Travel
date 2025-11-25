<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image_path' => $this->image,
            'url' => $this->url_path, // pakai accessor
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
