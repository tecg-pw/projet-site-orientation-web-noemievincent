<?php

namespace App\Http\Uploads;

use Intervention\Image\Facades\Image;

trait HandlesCompanyLogoUploads
{
    public function saveWithPendingOffer($uploaded_file): string
    {
        $ext = $uploaded_file->getClientOriginalExtension();
        $name =  sha1_file($uploaded_file);

        $path = 'img/pending-offers/' . $name . '.' . $ext;
        Image::make($uploaded_file)->save($path);

        return $path;
    }
}
