<?php

namespace App\Nova;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Company extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Company>
     */
    public static $model = \App\Models\Company::class;

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

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->withCount('offers');
    }

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

            Text::make('Nom', function () {
                return $this->title();
            }),
            
            Number::make(__('Nombre d‘offres'), 'offers_count')
                ->sortable()->onlyOnIndex(),

            Number::make('Traductions', function () {
                return $this->translationsCount(\App\Models\CompanyTranslation::class, 'company_id');
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\CompanyTranslation'),

            HasMany::make('Offres', 'offers', 'App\Nova\Offer'),
            HasMany::make('Members', 'members', 'App\Nova\CompanyMember'),
            HasMany::make('Étudiants', 'students', 'App\Nova\Student'),
        ];
    }

    public function title()
    {
        $ref = \App\Models\CompanyTranslation::where('company_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->name;
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
