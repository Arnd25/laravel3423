<?php

namespace App\DTOs;

use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\UploadedFile;

readonly class UpdateServiceData
{
    public function __construct(
        public string $title,
        public string $description,
        public float $price,
        public ?UploadedFile $image_path = null,
    ) {}

    public static function fromRequest(UpdateServiceRequest $request) {
        return new self(
            title: $request->validated('title'),
            description: $request->validated('description'),
            price: (float) $request->validated('price'),
            image_path: $request->file('image_path'),
        );
    }
}
