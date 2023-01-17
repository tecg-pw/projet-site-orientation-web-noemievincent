<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Offer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Offer>
     */
    public static $model = \App\Models\Offer::class;

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
            })->hideFromDetail(),

            BelongsTo::make('Entreprise', 'company', '\App\Nova\Company'),

            Stack::make('Personne de contact', [
                Text::make('Nom et prénom', function () {
                    return $this->contact_name();
                }),
                Email::make('Email', function () {
                    return $this->contact_email();
                }),

            ]),

            Date::make('Publiée le', function () {
                return $this->published_at();
            }),

            Number::make('Traductions', function () {
                return $this->translationsCount(\App\Models\OfferTranslation::class, 'offer_id');
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\OfferTranslation'),
        ];
    }

    public function title()
    {
        $ref = \App\Models\OfferTranslation::where('offer_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->title;
        }

        return '';
    }

    public function contact_name()
    {
        $ref = \App\Models\OfferTranslation::where('offer_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->contact_name;
        }

        return '';
    }

    public function contact_email()
    {
        $ref = \App\Models\OfferTranslation::where('offer_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->contact_email;
        }

        return '';
    }

    public function published_at()
    {
        $ref = \App\Models\OfferTranslation::where('offer_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->published_at;
        }

        return '';
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
