<?php

namespace App\Http\Controllers;

use App\DTOs\ServiceData;
use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create() {
        return view('services.create');
    }
    public function store(StoreServiceRequest $request){
        $dto = ServiceData::fromRequest($request);
        $imagePath = $dto->image_path->store('services', 'public');

        Service::create([
            'title' => $dto->title,
            'description' => $dto->description,
            'price' => $dto->price,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('service.create')->with('success', 'Услуга создана');
    }
    public function index() {
        $services = Service::latest()->paginate(12);
        return view('services.index', compact('services'));
    }
    public function show(Service $service) {
        return view('services.show', compact('service'));
    }
}
