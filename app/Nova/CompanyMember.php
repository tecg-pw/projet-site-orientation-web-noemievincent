<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class CompanyMember extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\CompanyMember>
     */
    public static $model = \App\Models\CompanyMember::class;

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

            Avatar::make('Photo', 'picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->picture->getClientOriginalExtension();
                    $name =  sha1_file($request->picture);

                    $thumbnail_path = 'img/partners/members/' . 'thumbnail-' . $name . '.' . $ext;
                    $thumbnail = Image::make($request->picture)->fit(110, 110, function ($constraint) {
                        $constraint->upsize();
                    })->save($thumbnail_path);

                    $srcset_thumbnail_640_path = 'img/partners/members/srcset/' . 'thumbnail-640-' . $name . '.' . $ext;
                    $srcset_thumbnail_768_path = 'img/partners/members/srcset/' . 'thumbnail-768-' . $name . '.' . $ext;
                    $srcset_thumbnail_1024_path = 'img/partners/members/srcset/' . 'thumbnail-1024-' . $name . '.' . $ext;
                    $srcset_thumbnail_1520_path = 'img/partners/members/srcset/' . 'thumbnail-1520-' . $name . '.' . $ext;

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

                    return [
                        'picture' => $thumbnail_path,
                        'pictures' => [
                            'thumbnail' => $thumbnail_path,
                        ],
                        'srcset' => [
                            'thumbnail' => [
                                '640' => $srcset_thumbnail_640_path,
                                '768' => $srcset_thumbnail_768_path,
                                '1024' => $srcset_thumbnail_1024_path,
                                '1520' => $srcset_thumbnail_1520_path,
                            ],
                        ],
                    ];
                }),

            Text::make('Nom', 'fullname')
                ->hideFromDetail()
                ->sortable(),

            BelongsTo::make('Entreprise', 'company', 'App\Nova\Company')
                ->sortable(),

            Text::make('Firstname')
                ->onlyOnForms(),

            Text::make('Lastname')
                ->onlyOnForms(),

            Heading::make('Links'),
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
        return [
            new Filters\Company(),
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
