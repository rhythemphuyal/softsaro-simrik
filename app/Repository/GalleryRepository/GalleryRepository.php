<?php

namespace App\Repository\GalleryRepository;

use App\Models\Admin\Gallery;
use App\Models\Faq;
use App\Repository\BannerRepository\BannerRepositoryInterface;
use App\Services\FileService;

use Illuminate\Support\Str;




class GalleryRepository implements BannerRepositoryInterface
{
    public function __construct(
        protected FileService $fileService
    ) {
    }
    public function index()
    {

        return Gallery::all();
    }

    public function create(array $data)
    {

        $fileService = new FileService();
        $image = $fileService->fileUpload($data['image'], "image");
        $data['image'] = $image;
        $data['slug'] = Str::slug($data["title"]);
        return Gallery::create($data);
    }





    public function update(array $data, $id)
    {
        $gallery = Gallery::findOrFail($id);
        if (isset($data['image']) && $data['image']->isValid()) {
            $fileService = new FileService();
            if ($gallery->image) {
                $fileService->imageDelete($gallery->image);
            }
            $blog_img = $fileService->fileUpload($data['image'], 'image');
        } else {
            $blog_img = $gallery->image;
        }
        $data['image'] = $blog_img;
        $data['slug'] = Str::slug($data['title']);

        $gallery->update($data);
        return $gallery;
    }

    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
    }



    public function edit($id)
    {
        return Gallery::findOrFail($id);
    }
}
