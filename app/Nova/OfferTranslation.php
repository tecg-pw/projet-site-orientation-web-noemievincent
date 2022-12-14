<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class OfferTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\OfferTranslation>
     */
    public static $model = \App\Models\OfferTranslation::class;

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

            BelongsTo::make('Offre', 'offer', 'App\Nova\Offer')
                ->hideFromIndex(),

            Text::make('Locale')->sortable(),

            Text::make('Titre', 'title')
                ->sortable()
                ->hideFromDetail(),

            Slug::make('Slug')->from('title')
                ->hideFromIndex(),

            Trix::make('Body', 'body'),

            Date::make('Publiée le', 'published_at')
                ->sortable(),

            Heading::make('Convention de stage'),
            Date::make('Date de début', 'start_date')
                ->onlyOnDetail(),

            Text::make('Durée', 'duration')
                ->onlyOnDetail(),

            Text::make('Lieu', 'location')
                ->onlyOnDetail(),

            Heading::make('Mode des réception des candidatures'),
            Text::make('Méthode', 'method')
                ->onlyOnDetail(),

            Text::make('Lien ou email', 'method_link')
                ->onlyOnDetail(),
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
