<?php

namespace App\Http\Uploads;

use Intervention\Image\Facades\Image;

trait HandlesProfilePictureUploads
{
    public function resizeAndSave ($uploaded_image) {
        $ext = $uploaded_image->getClientOriginalExtension();
        $name =  sha1_file($uploaded_image);

        $full_path = 'img/people/users/' . 'full-' .  $name . '.' . $ext;
        $full = Image::make($uploaded_image)->fit(160, 160, function ($constraint) {
            $constraint->upsize();
        })->save($full_path);

        $srcset_full_640_path = 'img/people/users/srcset/' . 'full-640-' .  $name . '.' . $ext;
        $srcset_full_768_path = 'img/people/users/srcset/' . 'full-768-' .  $name . '.' . $ext;
        $srcset_full_1024_path = 'img/people/users/srcset/' . 'full-1024-' .  $name . '.' . $ext;
        $srcset_full_1520_path = 'img/people/users/srcset/' . 'full-1520-' .  $name . '.' . $ext;
        $srcset_full_2560_path = 'img/people/users/srcset/' . 'full-2560-' .  $name . '.' . $ext;

        Image::make($full)->fit((int) ($full->width() / 1.02), (int) ($full->width() / 1.02), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_full_640_path);
        Image::make($full)->fit((int) ($full->width() / 1.8), (int) ($full->width() / 1.8), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_full_768_path);
        Image::make($full)->fit((int) ($full->width() / 2), (int) ($full->width() / 2), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_full_1024_path);
        Image::make($full)->fit((int) ($full->width() / 1.4), (int) ($full->width() / 1.4), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_full_1520_path);
        Image::make($full)->fit((int) ($full->width()), (int) ($full->width()), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_full_2560_path);

        $medium_path = 'img/people/users/' . 'medium-' .  $name . '.' . $ext;
        $medium = Image::make($uploaded_image)->fit(60, 60, function ($constraint) {
            $constraint->upsize();
        })->save($medium_path);

        $srcset_medium_640_path = 'img/people/users/srcset/' . 'medium-640-' .  $name . '.' . $ext;
        $srcset_medium_768_path = 'img/people/users/srcset/' . 'medium-768-' .  $name . '.' . $ext;
        $srcset_medium_1024_path = 'img/people/users/srcset/' . 'medium-1024-' .  $name . '.' . $ext;
        $srcset_medium_1520_path = 'img/people/users/srcset/' . 'medium-1520-' .  $name . '.' . $ext;
        $srcset_medium_2560_path = 'img/people/users/srcset/' . 'medium-2560-' .  $name . '.' . $ext;

        Image::make($medium)->fit((int) ($medium->width() / 1.02), (int) ($medium->width() / 1.02), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_medium_640_path);
        Image::make($medium)->fit((int) ($medium->width() / 1.8), (int) ($medium->width() / 1.8), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_medium_768_path);
        Image::make($medium)->fit((int) ($medium->width() / 2), (int) ($medium->width() / 2), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_medium_1024_path);
        Image::make($medium)->fit((int) ($medium->width() / 1.4), (int) ($medium->width() / 1.4), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_medium_1520_path);
        Image::make($medium)->fit((int) ($medium->width()), (int) ($medium->width()), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_medium_2560_path);

        $small_path = 'img/people/users/' . 'small-' .  $name . '.' . $ext;
        $small = Image::make($uploaded_image)->fit(30, 30, function ($constraint) {
            $constraint->upsize();
        })->save($small_path);

        $srcset_small_640_path = 'img/people/users/srcset/' . 'small-640-' .  $name . '.' . $ext;
        $srcset_small_768_path = 'img/people/users/srcset/' . 'small-768-' .  $name . '.' . $ext;
        $srcset_small_1024_path = 'img/people/users/srcset/' . 'small-1024-' .  $name . '.' . $ext;
        $srcset_small_1520_path = 'img/people/users/srcset/' . 'small-1520-' .  $name . '.' . $ext;
        $srcset_small_2560_path = 'img/people/users/srcset/' . 'small-2560-' .  $name . '.' . $ext;

        Image::make($small)->fit((int) ($small->width() / 1.02), (int) ($small->width() / 1.02), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_small_640_path);
        Image::make($small)->fit((int) ($small->width() / 1.8), (int) ($small->width() / 1.8), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_small_768_path);
        Image::make($small)->fit((int) ($small->width() / 2), (int) ($small->width() / 2), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_small_1024_path);
        Image::make($small)->fit((int) ($small->width() / 1.4), (int) ($small->width() / 1.4), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_small_1520_path);
        Image::make($small)->fit((int) ($small->width()), (int) ($small->width()), function ($constraint) {
            $constraint->upsize();
        })->save($srcset_small_2560_path);

        return [
            'picture' => $full_path,
            'pictures' => [
                'full' => $full_path,
                'medium' => $medium_path,
                'small' => $small_path,
            ],
            'srcset' => [
                'full' => [
                    '640' => $srcset_full_640_path,
                    '768' => $srcset_full_768_path,
                    '1024' => $srcset_full_1024_path,
                    '1520' => $srcset_full_1520_path,
                    '2560' => $srcset_full_2560_path,
                ],
                'medium' => [
                    '640' => $srcset_medium_640_path,
                    '768' => $srcset_medium_768_path,
                    '1024' => $srcset_medium_1024_path,
                    '1520' => $srcset_medium_1520_path,
                    '2560' => $srcset_medium_2560_path,
                ],
                'small' => [
                    '640' => $srcset_small_640_path,
                    '768' => $srcset_small_768_path,
                    '1024' => $srcset_small_1024_path,
                    '1520' => $srcset_small_1520_path,
                    '2560' => $srcset_small_2560_path,
                ],
            ],
        ];
    }
}
