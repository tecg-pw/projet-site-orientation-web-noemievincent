<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class CourseTranslation extends Resource
{
//    public static $displayInNavigation = false;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\CourseTranslation>
     */
    public static $model = \App\Models\CourseTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
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

            BelongsTo::make('Cours', 'course', 'App\Nova\Course')
                ->hideFromIndex(),

            Select::make('Locale')->options([
                'fr' => 'fr',
                'en' => 'en'
            ])->displayUsingLabels(),

            Text::make('Nom', 'name')
                ->hideFromDetail()
                ->sortable(),

            Slug::make('Slug')
                ->from('name'),

            Trix::make('Description'),

            Select::make('Option', 'orientation')->options([
                'common' => 'Tronc commun',
                'web' => 'Web',
                'dg' => 'Design Graphique',
                '3d' => '3D et Vidéos',
            ])->displayUsingLabels(),

            Select::make('Année', 'year')->options([
                '1' => 'Bloc 1',
                '2' => 'Bloc 2',
                '3' => 'Bloc 3',
            ])->displayUsingLabels()->sortable(),


            Text::make('Période', 'period')
                ->hideFromIndex()
                ->nullable(),

            Number::make('Heures', 'hours')
                ->hideFromIndex(),

            Number::make('crédits', 'ects')
                ->hideFromIndex()
                ->nullable(),

            URL::make('Fiche ECT', 'ects_link')
                ->displayUsing(fn() => $this->ects_link)
                ->hideFromIndex()
                ->nullable(),

            URL::make('Github', 'github_link')
                ->displayUsing(fn() => $this->github_link)
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
            new Filters\CourseYear(),
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
