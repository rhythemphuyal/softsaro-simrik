<?php

namespace App\Repository\TypeRepository;

use App\Models\Scheme;
use App\Models\Type;
use App\Repository\BannerRepository\BannerRepositoryInterface;
use App\Services\FileService;
use Illuminate\Support\Str;




class TypeRepository implements BannerRepositoryInterface{
    public function __construct(
        protected FileService $fileService
    ) {
    }
    public function index()
    {


        return Type::all();
    }

    public function create(array $datas)
    {

        $fileService = new FileService();
        $image=$fileService->fileUpload($datas['image'], "image");
        $featured_image = $fileService->fileUpload($datas['featured_image'], "featured_image");

        $datas['featured_image'] = $featured_image;
        $datas['image'] = $image;
        $datas['slug']=Str::slug($datas['title']);
        return Type::create($datas);
    }





    public function update(array $data, $id)
    {

        $scheme = Scheme::findOrFail($id);
        $scheme->update($data);
        return $scheme;
    }

    public function delete($id)
    {
        $scheme = Scheme::findOrFail($id);
        $scheme->delete();
    }



    public function edit($id)
    {
        return Scheme::findOrFail($id);
    }
}
