<?php

namespace App\DTOs;

use App\Http\Requests\StoreServiceRequest;
use Illuminate\Http\UploadedFile;

readonly class ServiceData
{
    public function __construct(
        public string $title,
        public string $description,
        public float  $price,
        public UploadedFile $image_path
    ) {}
    public static function fromRequest(StoreServiceRequest $request) {
        return new self(
            title: $request->validated('title'),
            description: $request->validated('description'),
            price: (float) $request->validated('price'),
            image_path: $request->file('image_path'),
        );
    }

}

