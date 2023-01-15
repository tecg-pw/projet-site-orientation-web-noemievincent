<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectTranslation extends Resource
{
//    public static $displayInNavigation = false;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ProjectTranslation>
     */
    public static $model = \App\Models\ProjectTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';
    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title', 'slug'
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

            BelongsTo::make('Projets', 'project', 'App\Nova\Project')
                ->hideFromIndex(),

            Select::make('Locale')->options([
                'fr' => 'fr',
                'en' => 'en'
            ])->displayUsingLabels()->sortable(),

            Text::make('Titre', 'title')
                ->sortable()
                ->hideFromDetail(),

            Slug::make('Slug')
                ->from('title')
                ->hideFromIndex(),

            Trix::make('Body'),

            File::make('Photo', 'picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->picture->getClientOriginalExtension();
                    $name =  sha1_file($request->picture);

                    $thumbnail_path = 'img/projects/' . 'thumbnail-' .  $name . '.' . $ext;
                    $thumbnail = Image::make($request->picture)->resize(448, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_path);

                    $thumbnail_srcset_640_path = 'img/projects/srcset/' . 'thumbnail-640-' .  $name . '.' . $ext;
                    $thumbnail_srcset_768_path = 'img/projects/srcset/' . 'thumbnail-768-' .  $name . '.' . $ext;
                    $thumbnail_srcset_1024_path = 'img/projects/srcset/' . 'thumbnail-1024-' .  $name . '.' . $ext;
                    $thumbnail_srcset_1520_path = 'img/projects/srcset/' . 'thumbnail-1520-' .  $name . '.' . $ext;
                    $thumbnail_srcset_2560_path = 'img/projects/srcset/' . 'thumbnail-2560-' .  $name . '.' . $ext;

                    Image::make($thumbnail)->resize($thumbnail->width() / 1.02, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_640_path);
                    Image::make($thumbnail)->resize($thumbnail->width() / 1.8, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_768_path);
                    Image::make($thumbnail)->resize($thumbnail->width() / 2, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_1024_path);
                    Image::make($thumbnail)->resize($thumbnail->width() / 1.4, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_1520_path);
                    Image::make($thumbnail)->resize($thumbnail->width(), null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_srcset_2560_path);

                    return [
                        'picture' => $thumbnail_path,
                        'pictures' => [
                            'thumbnail' => $thumbnail_path,
                        ],
                        'srcset' => [
                            'thumbnail' => [
                                '640' => $thumbnail_srcset_640_path,
                                '768' => $thumbnail_srcset_768_path,
                                '1024' => $thumbnail_srcset_1024_path,
                                '1520' => $thumbnail_srcset_1520_path,
                                '2560' => $thumbnail_srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            URL::make('Site web', 'website_link')
                ->displayUsing(fn() => $this->website_link)
                ->hideFromIndex()
                ->nullable(),

            URL::make('Github', 'github_link')
                ->displayUsing(fn() => $this->github_link)
                ->hideFromIndex()
                ->nullable(),

            Date::make('Publié le', 'published_at')
                ->sortable(),
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
            new Filters\Date(\App\Models\Project::class, \App\Models\ProjectTranslation::class, 'project_id'),
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
