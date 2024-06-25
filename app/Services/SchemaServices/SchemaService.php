<?php
namespace App\Services\SchemaServices;

use App\Repository\BannerRepository\BannerRepositoryInterface;

class SchemaService{
    public function __construct(
        protected BannerRepositoryInterface $bannerRepository
    ) {
    }

    public function create(array $data)
    {
        return $this->bannerRepository->create($data);
    }

    public function edit($id){
        return $this->bannerRepository->edit($id);
    }

    public function delete($id)
    {
        return $this->bannerRepository->delete($id);
    }


    public function update(array $data, $id)
    {
        return $this->bannerRepository->update($data, $id);
    }



}
