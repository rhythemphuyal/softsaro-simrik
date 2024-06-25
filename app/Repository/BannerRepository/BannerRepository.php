<?php

namespace App\Repository\BannerRepository;

use App\Models\Admin\Banner;
use App\Services\FileService;
use Illuminate\Support\Str;

class BannerRepository implements BannerRepositoryInterface
{

    public function index()
    {
        return Banner::all();
    }

    public function create(array $data)
    {

        if (isset($data['banner_image']) && $data['banner_image']->isValid()) {
            $fileService = new FileService();
            $bannerImagePath = $fileService->fileUpload($data['banner_image'], "banner_image");

            $data['banner_image'] = $bannerImagePath;
        }

        return Banner::create($data);
    }


    public function update(array $data, $id)
    {
        // dd($data);
        $banner = Banner::findOrFail($id);
// dd($banner);
        if (isset($data['banner_image']) && $data['banner_image']->isValid()) {
            $fileService = new FileService();
            $fileService->imageDelete($banner->banner_image);
            $banner_img = $fileService->fileUpload($data['banner_image'], 'banner_image');
        } else {
            $banner_img = $banner->banner_image;
        }

        $data['banner_image'] = $banner_img;
        $data['slug'] = Str::slug($data['title']);

        $banner->update($data);
        return $banner;
    }

    public function delete($id)
    {
        $banner = Banner::findOrFail($id);
        $fileService = new FileService();
        $fileService->imageDelete($banner['banner_image']);
        $banner->delete();
    }

    public function edit($id)
    {
        return Banner::findOrFail($id);
    }
}
