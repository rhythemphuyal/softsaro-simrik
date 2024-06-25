<?php

namespace App\Repository\BannerRepository;

use App\Models\Scheme;
use App\Models\Type;
use App\Services\FileService;
use Illuminate\Support\Str;




class SchemaRepository implements BannerRepositoryInterface
{
    public function __construct(
        protected FileService $fileService
    ) {
    }
    public function index()
    {
        return Scheme::all();
    }

    public function create(array $datas)
    {
        return Scheme::create($datas);
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
