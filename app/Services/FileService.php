<?php

namespace App\Services;

class FileService
{
    function randomString($length)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public function fileUpload($file, $name)
    {
        $destinationPath = public_path() . '/uploads/';
        $randomString = $this->randomString(8);
        $imageName = $name ."_". $randomString . ".jpg";
        $file->move($destinationPath, $imageName);
        return $imageName;
    }

    public function imageDelete($filePath)
    {
        $destinationPath = public_path('uploads/');

        if (file_exists($destinationPath . $filePath)) {
            unlink($destinationPath . $filePath);
        }
        return "true";
    }
}
