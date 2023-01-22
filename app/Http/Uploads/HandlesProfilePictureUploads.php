<?php

namespace App\Http\Uploads;

use Intervention\Image\Facades\Image;

trait HandlesProfilePictureUploads
{
    public function resizeAndSave ($uploaded_image) {
        $ext = $uploaded_image->getClientOriginalExtension();
        $name =  sha1_file($uploaded_image);

        $full_path = 'img/people/users/' . 'full-' .  $name . '.' . $ext;
        $full = Image::make($uploaded_image)->widen(160,  function ($constraint) {
            $constraint->upsize();
        })->save($full_path);

        $medium_path = 'img/people/users/' . 'medium-' .  $name . '.' . $ext;
        $medium = Image::make($uploaded_image)->widen(60, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 100)->save($medium_path);

        $small_path = 'img/people/users/' . 'small-' .  $name . '.' . $ext;
        $small = Image::make($uploaded_image)->widen(30, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 100)->save($small_path);

        return [
            'picture' => $full_path,
            'pictures' => [
                'full' => $full_path,
                'medium' => $medium_path,
                'small' => $small_path,
            ]
        ];
    }
}
