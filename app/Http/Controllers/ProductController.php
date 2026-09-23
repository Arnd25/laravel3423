<?php

namespace App\Http\Controllers;

use App\DTOs\ProductData;
use App\DTOs\UpdateProductData;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->paginate(12);
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(StoreProductRequest $request) {
        $dto = ProductData::fromRequest($request);
        $mainImage = $dto->main_image->store('products', 'public');
        $additionalImages = [];
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $additionalImages[] = $image->store('products', 'public');
            }
        }
        Product::create([
            'title' => $dto->title,
            'description' => $dto->description,
            'content' => $dto->content,
            'main_image' => $mainImage,
            'additional_images' => $additionalImages,
            'tags' => $dto->tags,
        ]);
        return redirect()->route('products.index')->with('success', 'Услуга создана');

    }
    public function show(Product $product) {
        return view('products.show', compact('product'));
    }
    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }
    public function update(UpdateProductRequest $request, Product $product) {
        $dto = UpdateProductData::fromRequest($request);

        $data = [
                'title' => $dto->title,
                'description' => $dto->description,
                'content' => $dto->content,
            ];

            if($dto->main_image) {
                if ($product->main_image && Storage::disk('public')->exists($product->main_image)) {
                    Storage::disk('public')->delete($product->main_image);
                }
                $data['main_image'] = $dto->main_image->store('products', 'public');
            }
            if ($dto->additional_images) {
                foreach ($dto->additional_images as $image) {
                    if ($image && Storage::disk('public')->exists($image)) {
                        Storage::disk('public')->delete($image);
                    }
                    $data['additional_images'][] = $image->store('products', 'public');
                }
            }
            $product->update($data);
            return redirect()->route('products.index')->with('success', 'Данные сохраненны!');
    }
}
