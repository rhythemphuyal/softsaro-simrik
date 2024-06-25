<?php

namespace App\Repository\FaqRepository;

use App\Models\Faq;
use App\Models\Type;
use App\Repository\BannerRepository\BannerRepositoryInterface;
use App\Services\FileService;
use Illuminate\Support\Str;




class FaqRepository implements BannerRepositoryInterface
{
    public function __construct(
        protected FileService $fileService
    ) {
    }
    public function index()
    {
        return Faq::all();
    }

    public function create(array $data)
    {


        return Faq::create($data);
    }





    public function update(array $data, $id)
    {

        $type = Faq::findOrFail($id);
        $type->update($data);
        return $type;
    }

    public function delete($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
    }



    public function edit($id)
    {
        return Faq::findOrFail($id);
    }





}

?>
