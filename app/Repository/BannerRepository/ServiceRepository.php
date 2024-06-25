<?php

namespace App\Repository\BannerRepository;

use App\Models\Admin\Service;

use App\Services\FileService;
use Illuminate\Support\Str;


class ServiceRepository implements BannerRepositoryInterface
{
    public function __construct(
        protected FileService $fileService
    ) {
    }
    public function index()
    {
        return Service::all();
    }

    public function create(array $data)
    {

        if (isset($data['service_image']) && $data['service_image']->isValid()) {
            $serviceImagePath = $this->fileService->fileUpload($data['service_image'], "service_image");

            $data['service_image'] = $serviceImagePath;
        }
        $data['slug'] = Str::slug($data['title']);
        return Service::create($data);
    }


    public function update(array $data, $id)
    {
        // dd($data);
        $service = Service::findOrFail($id);
        // dd($service);
        if (isset($data['service_image']) && $data['service_image']->isValid()) {

            if ($service->service_image) {
                $this->fileService->imageDelete($service->service_image);
            }
            $service_img = $this->fileService->fileUpload($data['service_image'], 'service_image');
        } else {
            $service_img = $service->service_image;
        }

        $data['service_image'] = $service_img;
        $data['slug'] = Str::slug($data['title']);

        $service->update($data);
        return $service;
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        if ($service->service_image) {
            $this->fileService->imageDelete($service['service_image']);
        }
        $service->delete();
    }

    public function edit($id)
    {
        return Service::findOrFail($id);
    }
}
