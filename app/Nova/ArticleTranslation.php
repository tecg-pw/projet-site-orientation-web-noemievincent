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

            File::make('thumbnail')
                ->store(function (Request $request, $model) {
                    $ext = $request->thumbnail->getClientOriginalExtension();
                    $thumbnail_name =  'thumbnail-' . sha1_file($request->thumbnail);
                    $thumbnail_path = 'img/news/' . $thumbnail_name . '.' . $ext;

                    Image::make($request->thumbnail)->resize(384, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($thumbnail_path);

                    return [
                        'thumbnail' => $thumbnail_path,
                        'pictures' => ['thumbnail' => $thumbnail_path],
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
