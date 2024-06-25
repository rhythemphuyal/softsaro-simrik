<?php

namespace App\Repository\BlogRepository;

use App\Models\Admin\Banner;
use App\Models\Blog;
use App\Repository\BannerRepository\BannerRepositoryInterface;
use App\Services\FileService;
use Illuminate\Support\Str;

class BlogRepository implements BannerRepositoryInterface
{

    public function index()
    {
        return Blog::all();
    }

    public function create(array $data)
    {
        $fileService = new FileService();
        $blog_image = $fileService->fileUpload($data['blog_image'], "blog");
        $data['blog_image'] = $blog_image;
        $data['slug'] = Str::slug($data["title"]);
        return Blog::create($data);
    }


    public function update(array $data, $id)
    {
        // dd($data);
        $blog = Blog::findOrFail($id);
        if (isset($data['blog_image']) && $data['blog_image']->isValid()) {
            $fileService = new FileService();
            if ($blog->blog_image) {
                $fileService->imageDelete($blog->blog_image);
            }
            $blog_img = $fileService->fileUpload($data['blog_image'], 'blog');
        } else {
            $blog_img = $blog->blog_image;
        }
        $data['blog_image'] = $blog_img;
        $data['slug'] = Str::slug($data['title']);

        $blog->update($data);
        return $blog;
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $fileService = new FileService();
        if ($blog->blog_image) {
            $fileService->imageDelete($blog->blog_image);
        }
        $blog->delete();
    }

    public function edit($id)
    {
        return Blog::findOrFail($id);
    }
}
