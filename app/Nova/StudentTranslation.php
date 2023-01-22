<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Murdercode\TinymceEditor\TinymceEditor;

class StudentTranslation extends Resource
{
//    public static $displayInNavigation = false;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\StudentTranslation>
     */
    public static $model = \App\Models\StudentTranslation::class;

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
        'fullname', 'firstname', 'lastname'
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

            BelongsTo::make('Étudiant', 'student', 'App\Nova\Student')
                ->hideFromIndex(),

            Select::make('Locale')->options([
                'fr' => 'fr',
                'en' => 'en'
            ])->displayUsingLabels()->sortable(),

            Avatar::make('Photo', 'picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->picture->getClientOriginalExtension();
                    $name = sha1_file($request->picture);

                    $thumbnail_path = 'img/people/students/' . 'thumbnail-' . $name . '.' . $ext;
                    $thumbnail = Image::make($request->picture)->fit(110, 110, function ($constraint) {
                        $constraint->upsize();
                    })->save($thumbnail_path);

                    $srcset_thumbnail_640_path = 'img/people/students/srcset/' . 'thumbnail-640-' . $name . '.' . $ext;
                    $srcset_thumbnail_768_path = 'img/people/students/srcset/' . 'thumbnail-768-' . $name . '.' . $ext;
                    $srcset_thumbnail_1024_path = 'img/people/students/srcset/' . 'thumbnail-1024-' . $name . '.' . $ext;
                    $srcset_thumbnail_1520_path = 'img/people/students/srcset/' . 'thumbnail-1520-' . $name . '.' . $ext;

                    Image::make($request->picture)->fit(140, 140, function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_thumbnail_640_path);
                    Image::make($request->picture)->fit(120, 120, function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_thumbnail_768_path);
                    Image::make($request->picture)->fit(140, 140, function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_thumbnail_1024_path);
                    Image::make($request->picture)->fit(160, 160, function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_thumbnail_1520_path);;


                    $full_path = 'img/people/students/' . 'full-' . $name . '.' . $ext;
                    $full = Image::make($request->picture)->fit(130, 130, function ($constraint) {
                        $constraint->upsize();
                    })->save($full_path);

                    $srcset_full_768_path = 'img/people/students/srcset/' . 'full-768-' . $name . '.' . $ext;
                    $srcset_full_1024_path = 'img/people/students/srcset/' . 'full-1024-' . $name . '.' . $ext;

                    Image::make($request->picture)->fit(150, 150, function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_768_path);
                    Image::make($request->picture)->fit(180, 180, function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_1024_path);

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
                            ],
                            'full' => [
                                '768' => $srcset_full_768_path,
                                '1024' => $srcset_full_1024_path,
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

            TinymceEditor::make('Description', 'bio'),

            Date::make('Date d‘entrée', 'start_year')
                ->hideFromIndex(),

            Date::make('Date de sortie', 'end_year')
                ->hideFromIndex()
                ->nullable(),

            Heading::make('Liens'),
            URL::make('Site web', 'website_link')
                ->displayUsing(fn() => $this->website_link)
                ->hideFromIndex()
                ->nullable(),

            URL::make('GitHub', 'github_link')
                ->displayUsing(fn() => $this->github_link)
                ->hideFromIndex()
                ->nullable(),

            URL::make('Linkedin', 'linkedin_link')
                ->displayUsing(fn() => $this->linkedin_link)
                ->hideFromIndex()
                ->nullable(),

            URL::make('Instagram', 'instagram_link')
                ->displayUsing(fn() => $this->instagram_link)
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
