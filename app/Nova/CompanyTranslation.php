<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Murdercode\TinymceEditor\TinymceEditor;

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

            \Laravel\Nova\Fields\Image::make('Logo', 'logo')
                ->store(function (Request $request, $model) {
                    $ext = $request->logo->getClientOriginalExtension();
                    $name =  sha1_file($request->logo);

                    $full_path = 'img/partners/logos/' . 'full-' .  $name . '.' . $ext;
                    $full = Image::make($request->logo)->resize(100, 100, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($full_path);

                    $srcset_full_640_path = 'img/partners/logos/srcset/' . 'full-640-' .  $name . '.' . $ext;
                    $srcset_full_1024_path = 'img/partners/logos/srcset/' . 'full-1024-' .  $name . '.' . $ext;
                    $srcset_full_1520_path = 'img/partners/logos/srcset/' . 'full-1520-' .  $name . '.' . $ext;

                    Image::make($request->logo)->resize(120, 120, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_640_path);
                    Image::make($request->logo)->resize(140, 140, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_1024_path);
                    Image::make($request->logo)->resize(160, 160, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_full_1520_path);

                    $thumbnail_path = 'img/partners/logos/' . 'thumbnail-' .  $name . '.' . $ext;
                    $thumbnail = Image::make($request->logo)->resize(60, 60, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_path);

                    $medium_path = 'img/partners/logos/' . 'medium-' .  $name . '.' . $ext;
                    $medium = Image::make($request->logo)->resize(60, 60, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($medium_path);

                    $srcset_medium_640_path = 'img/partners/logos/srcset/' . 'medium-640-' .  $name . '.' . $ext;
                    $srcset_medium_1520_path = 'img/partners/logos/srcset/' . 'medium-1520-' .  $name . '.' . $ext;

                    Image::make($request->logo)->resize(80, 80, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_640_path);
                    Image::make($request->logo)->resize(100, 100, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_medium_1520_path);

                    $small_path = 'img/partners/logos/' . 'small-' .  $name . '.' . $ext;
                    $small = Image::make($request->logo)->resize(30, 30, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($small_path);

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
                                '1024' => $srcset_full_1024_path,
                                '1520' => $srcset_full_1520_path,
                            ],
                            'medium' => [
                                '640' => $srcset_medium_640_path,
                                '1520' => $srcset_medium_1520_path,
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

            TinymceEditor::make('Description', 'description'),

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
