<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class ArticleTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ArticleTranslation>
     */
    public static $model = \App\Models\ArticleTranslation::class;

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
        'title',
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

            BelongsTo::make('Article')
                ->hideFromIndex(),

            Select::make('Locale')->options([
                'fr' => 'fr',
                'en' => 'en'
            ])->displayUsingLabels()->sortable(),

            Text::make('Titre', 'title')
                ->sortable()
                ->hideFromDetail()
                ->displayUsing(function ($value) {
                    return Str::limit($value, 60, '...');
                }),

            Slug::make('Slug')->from('title')
                ->sortable()
                ->hideFromIndex(),

            File::make('picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->picture->getClientOriginalExtension();
                    $name =  sha1_file($request->picture);
                    $thumbnail_path = 'img/news/' . 'thumbnail-' .  $name . '.' . $ext;

                    Image::make($request->picture)->resize(384, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_path);


                    $srcset_640_path = 'img/news/srcset/' . '640-' .  $name . '.' . $ext;
                    $srcset_768_path = 'img/news/srcset/' . '768-' .  $name . '.' . $ext;
                    $srcset_1024_path = 'img/news/srcset/' . '1024-' .  $name . '.' . $ext;
                    $srcset_1520_path = 'img/news/srcset/' . '1520-' .  $name . '.' . $ext;
                    $srcset_2560_path = 'img/news/srcset/' . '2560-' .  $name . '.' . $ext;

                    Image::make($request->picture)->resize(640, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_640_path);

                    Image::make($request->picture)->resize(768, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_768_path);

                    Image::make($request->picture)->resize(1024, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_1024_path);

                    Image::make($request->picture)->resize(1520, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_1520_path);

                    Image::make($request->picture)->resize(2560, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($srcset_2560_path);

                    return [
                        'picture' => $thumbnail_path,
                        'pictures' => [
                            'thumbnail' => $thumbnail_path,
                        ],
                        'srcset' => [
                            'thumbnail' => [
                                '640' => $srcset_640_path,
                                '768' => $srcset_768_path,
                                '1024' => $srcset_1024_path,
                                '1520' => $srcset_1520_path,
                                '2560' => $srcset_2560_path,
                            ],
                        ],
                    ];
                }),

            Trix::make('Excerpt', 'excerpt'),
            Trix::make('Body', 'body'),

            Date::make('Publiée le', 'published_at')
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
            new Filters\Date(\App\Models\Article::class, \App\Models\ArticleTranslation::class, 'article_id'),
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
