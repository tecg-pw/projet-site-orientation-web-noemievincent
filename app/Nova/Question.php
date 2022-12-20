<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Question extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Question>
     */
    public static $model = \App\Models\Question::class;

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

            Text::make('Titre', 'title')
                ->hideFromDetail()
                ->sortable(),

            BelongsTo::make('Auteur', 'user', '\App\Nova\User')
                ->sortable(),

            BelongsTo::make('Catégorie', 'category', '\App\Nova\QuestionCategory')
                ->sortable(),

            Slug::make('Slug')
                ->hideFromIndex(),

            Trix::make('Body'),

            Boolean::make('Résolue', 'is_solved'),

            Date::make('Publiée le', 'published_at')
                ->sortable(),

            Number::make('Réponses', 'replies_count')
                ->onlyOnIndex()
                ->sortable(),

            HasMany::make('Réponses', 'replies', 'App\Nova\Reply'),
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
            new Filters\User(),
            new Filters\QuestionCategory(),
//            new Filters\IsSolved(),
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
