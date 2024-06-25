<?php

namespace App\Services\GalleryService;

use App\Repository\BannerRepository\BannerRepositoryInterface;

class GalleryService
{
    public function __construct(
        protected BannerRepositoryInterface $bannerRepository
    ) {
    }

 

    public function create(array $data)
    {
        return $this->bannerRepository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->bannerRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->bannerRepository->delete($id);
    }

    public function index()
    {
        return $this->bannerRepository->index();
    }

    public function edit($id){
        return $this->bannerRepository->edit($id);
    }


}
