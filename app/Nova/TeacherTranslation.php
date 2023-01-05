<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class TeacherTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\TeacherTranslation>
     */
    public static $model = \App\Models\TeacherTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'fullname';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'fullname',
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

            BelongsTo::make('Professeur', 'teacher', 'App\Nova\Teacher')
                ->hideFromIndex(),

            Select::make('Locale')->options([
                'fr' => 'fr',
                'en' => 'en'
            ])->displayUsingLabels()->sortable(),

            Avatar::make('Photo', 'picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->picture->getClientOriginalExtension();
                    $name =  sha1_file($request->picture);

                    $thumbnail_path = 'img/people/teachers/' . 'thumbnail-' .  $name . '.' . $ext;
                    $thumbnail = Image::make($request->picture)->resize(160, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_path);

                    $srcset_thumbnail_640_path = 'img/people/teachers/srcset/' . 'thumbnail-640-' .  $name . '.' . $ext;
                    $srcset_thumbnail_768_path = 'img/people/teachers/srcset/' . 'thumbnail-768-' .  $name . '.' . $ext;
                    $srcset_thumbnail_1024_path = 'img/people/teachers/srcset/' . 'thumbnail-1024-' .  $name . '.' . $ext;
                    $srcset_thumbnail_1520_path = 'img/people/teachers/srcset/' . 'thumbnail-1520-' .  $name . '.' . $ext;
                    $srcset_thumbnail_2560_path = 'img/people/teachers/srcset/' . 'thumbnail-2560-' .  $name . '.' . $ext;

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


                    $full_path = 'img/people/teachers/' . 'full-' .  $name . '.' . $ext;
                    $full = Image::make($request->picture)->resize(180, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($full_path);

                    $srcset_full_640_path = 'img/people/teachers/srcset/' . 'full-640-' .  $name . '.' . $ext;
                    $srcset_full_768_path = 'img/people/teachers/srcset/' . 'full-768-' .  $name . '.' . $ext;
                    $srcset_full_1024_path = 'img/people/teachers/srcset/' . 'full-1024-' .  $name . '.' . $ext;
                    $srcset_full_1520_path = 'img/people/teachers/srcset/' . 'full-1520-' .  $name . '.' . $ext;
                    $srcset_full_2560_path = 'img/people/teachers/srcset/' . 'full-2560-' .  $name . '.' . $ext;

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

                    return [
                        'picture' => $thumbnail_path,
                        'pictures' => [
                            'thumbnail' => $thumbnail_path,
                            'full' => $full_path,
                        ],
                        'srcset' => [
                            'thumbnail' => [
                                '640' => $srcset_thumbnail_640_path,
                                '768' => $srcset_thumbnail_768_path,
                                '1024' => $srcset_thumbnail_1024_path,
                                '1520' => $srcset_thumbnail_1520_path,
                                '2560' => $srcset_thumbnail_2560_path,
                            ],
                            'full' => [
                                '640' => $srcset_full_640_path,
                                '768' => $srcset_full_768_path,
                                '1024' => $srcset_full_1024_path,
                                '1520' => $srcset_full_1520_path,
                                '2560' => $srcset_full_2560_path,
                            ],
                        ],
                    ];
                }),

            Text::make('Prénom', 'firstname')
                ->onlyOnForms(),

            Text::make('Nom de famille', 'lastname')
                ->onlyOnForms(),

            Text::make('Nom', 'fullname')
                ->hideFromDetail()->sortable(),

            Slug::make('Slug')
                ->from('fullname')
                ->hideFromIndex(),

            Email::make('Email')
                ->hideFromIndex(),

            Trix::make('Bio'),

            Heading::make('Liens'),
            URL::make('GitHub', 'github_link')
                ->displayUsing(fn() => $this->github_link)
                ->hideFromIndex()
                ->nullable(),

            URL::make('Linkedin', 'linkedin_link')
                ->displayUsing(fn() => $this->linkedin_link)
                ->hideFromIndex()
                ->nullable(),
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
        return [];
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
