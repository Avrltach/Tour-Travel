<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // Sesuaikan penamaan field di output JSON agar clean
        return [
            'id' => $this->id,
            'name_package' => $this->name_package,
            'image_path' => $this->image,
            'url' => $this->url_path, 
            'category' => $this->category,
            'location' => $this->location,
            'price' => $this->price,
            'duration' => $this->duration,
            'description' => $this->description,
            'facility' => $this->facility,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}