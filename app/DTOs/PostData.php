<?php

namespace App\DTOs;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\UploadedFile;

class PostData
{
    public function __construct(
        public string $title,
        public string $description,
        public string  $content,
        public UploadedFile $main_image,
        public array $additional_images,
        public array $tags
    ) {}
    public static function fromRequest(StorePostRequest $request) {
        return new self(
            title: $request->validated('title'),
            description: $request->validated('description'),
            content: $request->validated('content'),
            main_image: $request->file('main_image'),
            additional_images: $request->validated('additional_images'),
            tags: $request->filled('tags') ? array_map('trim', explode(',', $request->validated('tags'))) : [],
        );
    }
}
