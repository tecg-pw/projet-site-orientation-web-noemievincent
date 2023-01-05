<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
//        public_path('storage') => storage_path('app/public'),
        public_path('img/home') => storage_path('app/public/img/home'),
        public_path('img/placeholders') => storage_path('app/public/img/placeholders'),
        public_path('img/projects') => storage_path('app/public/img/projects'),
        public_path('img/projects/srcset') => storage_path('app/public/img/projects/srcset'),
        public_path('img/news') => storage_path('app/public/img/news'),
        public_path('img/news/srcset') => storage_path('app/public/img/news/srcset'),
        public_path('img/people/students') => storage_path('app/public/img/people/students'),
        public_path('img/people/students/srcset') => storage_path('app/public/img/people/students/srcset'),
        public_path('img/people/teachers') => storage_path('app/public/img/people/teachers'),
        public_path('img/people/teachers/srcset') => storage_path('app/public/img/people/teachers/srcset'),
        public_path('img/people/users') => storage_path('app/public/img/people/users'),
        public_path('img/people/users/srcset') => storage_path('app/public/img/people/users/srcset'),
        public_path('img/partners/members') => storage_path('app/public/img/partners/members'),
        public_path('img/partners/members/srcset') => storage_path('app/public/img/partners/members/srcset'),
        public_path('img/partners/logos') => storage_path('app/public/img/partners/logos'),
        public_path('img/partners/logos/srcset') => storage_path('app/public/img/partners/logos/srcset'),
    ],

];
