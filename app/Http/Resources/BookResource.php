<?php
// app/Http/Resources/BookResource.php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author, // Ensure this matches
            'published_date' => $this->published_date->format('Y-m-d'),
            'description' => $this->description, // Ensure this matches
            'availability' => $this->is_available, // Key is 'availability'
        ];
    }
}