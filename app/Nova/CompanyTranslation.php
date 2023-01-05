<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class CompanyTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\CompanyTranslation>
     */
    public static $model = \App\Models\CompanyTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->hide(),

            BelongsTo::make('Company')
                ->hideFromIndex(),

            Select::make('Locale')->options([
                'fr' => 'fr',
                'en' => 'en'
            ])->displayUsingLabels()->sortable(),

            File::make('Logo', 'logo')
                ->store(function (Request $request, $model) {
                    $ext = $request->logo->getClientOriginalExtension();
                    $name =  sha1_file($request->logo);

                    $full_path = 'img/partners/logos/' . 'full-' .  $name . '.' . $ext;
                    $full = Image::make($request->logo)->resize(160, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($full_path);

                    $srcset_full_640_path = 'img/partners/logos/srcset/' . 'full-640-' .  $name . '.' . $ext;
                    $srcset_full_768_path = 'img/partners/logos/srcset/' . 'full-768-' .  $name . '.' . $ext;
                    $srcset_full_1024_path = 'img/partners/logos/srcset/' . 'full-1024-' .  $name . '.' . $ext;
                    $srcset_full_1520_path = 'img/partners/logos/srcset/' . 'full-1520-' .  $name . '.' . $ext;
                    $srcset_full_2560_path = 'img/partners/logos/srcset/' . 'full-2560-' .  $name . '.' . $ext;

                    Image::make($full)->resize($full->width() / 1.02, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_640_path);
                    Image::make($full)->resize($full->width() / 1.8, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_768_path);
                    Image::make($full)->resize($full->width() / 2, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_1024_path);
                    Image::make($full)->resize($full->width() / 1.4, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_1520_path);
                    Image::make($full)->resize($full->width(), null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_2560_path);


                    $thumbnail_path = 'img/partners/logos/' . 'thumbnail-' .  $name . '.' . $ext;
                    $thumbnail = Image::make($request->logo)->resize(60, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_path);

                    $srcset_thumbnail_640_path = 'img/partners/logos/srcset/' . 'thumbnail-640-' .  $name . '.' . $ext;
                    $srcset_thumbnail_768_path = 'img/partners/logos/srcset/' . 'thumbnail-768-' .  $name . '.' . $ext;
                    $srcset_thumbnail_1024_path = 'img/partners/logos/srcset/' . 'thumbnail-1024-' .  $name . '.' . $ext;
                    $srcset_thumbnail_1520_path = 'img/partners/logos/srcset/' . 'thumbnail-1520-' .  $name . '.' . $ext;
                    $srcset_thumbnail_2560_path = 'img/partners/logos/srcset/' . 'thumbnail-2560-' .  $name . '.' . $ext;

                    Image::make($thumbnail)->resize($thumbnail->width() / 1.02, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_thumbnail_640_path);
                    Image::make($thumbnail)->resize($thumbnail->width() / 1.8, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_thumbnail_768_path);
                    Image::make($thumbnail)->resize($thumbnail->width() / 2, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_thumbnail_1024_path);
                    Image::make($thumbnail)->resize($thumbnail->width() / 1.4, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_thumbnail_1520_path);
                    Image::make($thumbnail)->resize($thumbnail->width(), null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_thumbnail_2560_path);

                    $medium_path = 'img/partners/logos/' . 'medium-' .  $name . '.' . $ext;
                    $medium = Image::make($request->logo)->resize(80, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($medium_path);

                    $srcset_medium_640_path = 'img/partners/logos/srcset/' . 'medium-640-' .  $name . '.' . $ext;
                    $srcset_medium_768_path = 'img/partners/logos/srcset/' . 'medium-768-' .  $name . '.' . $ext;
                    $srcset_medium_1024_path = 'img/partners/logos/srcset/' . 'medium-1024-' .  $name . '.' . $ext;
                    $srcset_medium_1520_path = 'img/partners/logos/srcset/' . 'medium-1520-' .  $name . '.' . $ext;
                    $srcset_medium_2560_path = 'img/partners/logos/srcset/' . 'medium-2560-' .  $name . '.' . $ext;

                    Image::make($medium)->resize($medium->width() / 1.02, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_640_path);
                    Image::make($medium)->resize($medium->width() / 1.8, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_768_path);
                    Image::make($medium)->resize($medium->width() / 2, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_1024_path);
                    Image::make($medium)->resize($medium->width() / 1.4, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_1520_path);
                    Image::make($medium)->resize($medium->width(), null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_2560_path);

                    $small_path = 'img/partners/logos/' . 'small-' .  $name . '.' . $ext;
                    $small = Image::make($request->logo)->resize(30, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_path);

                    $srcset_small_640_path = 'img/partners/logos/srcset/' . 'small-640-' .  $name . '.' . $ext;
                    $srcset_small_768_path = 'img/partners/logos/srcset/' . 'small-768-' .  $name . '.' . $ext;
                    $srcset_small_1024_path = 'img/partners/logos/srcset/' . 'small-1024-' .  $name . '.' . $ext;
                    $srcset_small_1520_path = 'img/partners/logos/srcset/' . 'small-1520-' .  $name . '.' . $ext;
                    $srcset_small_2560_path = 'img/partners/logos/srcset/' . 'small-2560-' .  $name . '.' . $ext;

                    Image::make($small)->resize($small->width() / 1.02, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_small_640_path);
                    Image::make($small)->resize($small->width() / 1.8, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_small_768_path);
                    Image::make($small)->resize($small->width() / 2, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_small_1024_path);
                    Image::make($small)->resize($small->width() / 1.4, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_small_1520_path);
                    Image::make($small)->resize($small->width(), null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_small_2560_path);

                    return [
                        'logo' => $full_path,
                        'logos' => [
                            'full' => $full_path,
                            'thumbnail' => $thumbnail_path,
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
                            'thumbnail' => [
                                '640' => $srcset_thumbnail_640_path,
                                '768' => $srcset_thumbnail_768_path,
                                '1024' => $srcset_thumbnail_1024_path,
                                '1520' => $srcset_thumbnail_1520_path,
                                '2560' => $srcset_thumbnail_2560_path,
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
                }),

            Text::make('Name')
                ->sortable()
                ->hideFromDetail(),

            Slug::make('Slug')->from('name')
                ->sortable()
                ->hideFromIndex(),

            Trix::make('Description'),

            URL::make('Lien du site web', 'website_link')
                ->displayUsing(fn() => $this->website_link)
                ->hideFromIndex()
                ->nullable(),

            Heading::make('Adresse'),
            Text::make('Rue et numéro', 'streetAddress')
                ->hideFromIndex(),
            Text::make('Code postal', 'postalCode')
                ->hideFromIndex(),
            Text::make('Localité', 'addressLocality')
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [
            new Filters\Locale(),
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
