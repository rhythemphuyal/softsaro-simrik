<?php

namespace App\Repository\CsrRepository;

use App\Models\Admin\Csr;
use App\Models\Faq;
use App\Models\Type;
use App\Repository\BannerRepository\BannerRepositoryInterface;
use App\Services\FileService;
use Illuminate\Support\Str;




class CsrRepository implements BannerRepositoryInterface
{
    public function __construct(
        protected FileService $fileService
    ) {
    }
    public function index()
    {
        return Csr::all();
    }

    public function create(array $data)
    {


        return Csr::create($data);
    }





    public function update(array $data, $id)
    {

        $type = Csr::findOrFail($id);
        $type->update($data);
        return $type;
    }

    public function delete($id)
    {
        $csr = Csr::findOrFail($id);
        $csr->delete();
    }



    public function edit($id)
    {
        return Csr::findOrFail($id);
    }





}

?>
