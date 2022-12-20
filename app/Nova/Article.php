<?php

namespace App\Nova;

use App\Models\ArticleTranslation;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use function str_limit;

class Article extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Article>
     */
    public static $model = \App\Models\Article::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = '';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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

            Text::make('Titre', function () {
                return $this->title();
            })->onlyOnIndex()->displayUsing(function ($value) {
                return Str::limit($value, 60, '...');
            }),

            BelongsTo::make('Auteur', 'author', '\App\Nova\Author')->sortable(),
            BelongsTo::make('Catégorie', 'category', 'App\Nova\ArticleCategory')->sortable(),

            Date::make('Publiée le', function () {
                return $this->published_at();
            }),

            Number::make('Traductions', function () {
                return $this->translationsCount();
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\ArticleTranslation'),
        ];
    }

    public function title()
    {
        return ArticleTranslation::where('article_id', $this->id)->first()->title;
    }

    public function published_at()
    {
        return ArticleTranslation::where('article_id', $this->id)->first()->published_at;
    }

    public function translationsCount()
    {
        $translations = ArticleTranslation::select('locale')->where('article_id', $this->id)->get();
        foreach ($translations as $translation) {
            $locales[] = $translation->locale;
        }

        return implode(', ', $locales);
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
            new Filters\Author(),
            new Filters\ArticleCategory(),
            new Filters\Date(\App\Models\Article::class, ArticleTranslation::class, 'id'),
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
