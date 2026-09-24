<?php

namespace App\Http\Controllers;

use App\DTOs\PostData;
use App\DTOs\UpdatePostData;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index() {
        $posts = post::latest()->paginate(12);
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(StorepostRequest $request) {
        $dto = PostData::fromRequest($request);
        $mainImage = $dto->main_image->store('posts', 'public');
        $additionalImages = [];
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $additionalImages[] = $image->store('posts', 'public');
            }
        }
        post::create([
            'title' => $dto->title,
            'description' => $dto->description,
            'content' => $dto->content,
            'main_image' => $mainImage,
            'additional_images' => $additionalImages,
            'tags' => $dto->tags,
        ]);
        return redirect()->route('posts.index')->with('success', 'Статья создана');

    }
    public function show(post $post) {
        return view('posts.show', compact('post'));
    }
    public function edit(post $post) {
        return view('posts.edit', compact('post'));
    }
    public function update(UpdatepostRequest $request, post $post) {
        $dto = UpdatepostData::fromRequest($request);

        $data = [
            'title' => $dto->title,
            'description' => $dto->description,
            'content' => $dto->content,
            'tags' => $dto->tags,
        ];

        if($dto->main_image) {
            if ($post->main_image && Storage::disk('public')->exists($post->main_image)) {
                Storage::disk('public')->delete($post->main_image);
            }
            $data['main_image'] = $dto->main_image->store('posts', 'public');
        }
        if ($dto->additional_images) {
            foreach ($dto->additional_images as $image) {
                if ($image && Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
                $data['additional_images'][] = $image->store('posts', 'public');
            }
        }

        $post->update($data);
        return redirect()->route('posts.index')->with('success', 'Данные сохраненны!');
    }
    public function destroy(post $post)
    {
        if ($post->main_image && Storage::disk('public')->exists($post->main_image)) {
            Storage::disk('public')->delete($post);
        }
        if ($post->additional_images) {
            foreach ($post->additional_images as $image) {
                if ($image && Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
        }
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Статья Удалена');
    }
}
