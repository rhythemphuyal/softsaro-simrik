<?php

namespace App\Repository\BannerRepository;

interface BannerRepositoryInterface
{
    public function index();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);
    
    public function edit($id);

}       