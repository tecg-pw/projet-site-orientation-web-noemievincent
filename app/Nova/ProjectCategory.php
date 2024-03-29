<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectCategory extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ProjectCategory>
     */
    public static $model = \App\Models\ProjectCategory::class;

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
        return $query->withCount('projects');
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

            Number::make(__('Nombre de projets'), 'projects_count')
                ->sortable()->onlyOnIndex(),

            Number::make('Traductions', function () {
                return $this->translationsCount(\App\Models\ProjectCategoryTranslation::class, 'category_id');
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\ProjectCategoryTranslation'),

            BelongsToMany::make('Projets', 'projects', '\App\Nova\Project'),
        ];
    }

    public function title()
    {
        $ref = \App\Models\ProjectCategoryTranslation::where('category_id', $this->id)->first();
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
