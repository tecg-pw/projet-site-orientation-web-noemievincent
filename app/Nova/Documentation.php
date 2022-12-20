<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Documentation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Documentation>
     */
    public static $model = \App\Models\Documentation::class;

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
            })->onlyOnIndex(),

            URL::make('Lien', function () {
                return $this->link();
            })->displayUsing(fn() => $this->link())->textAlign('left'),

            Text::make('Languages', function () {
                return $this->languages();
            })->onlyOnIndex(),

            Number::make('Traductions', function () {
                return $this->translationsCount(\App\Models\DocumentationTranslation::class, 'documentation_id');
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\DocumentationTranslation'),

            BelongsToMany::make('Languages'),
        ];
    }

    public function title()
    {
        $ref = \App\Models\DocumentationTranslation::where('documentation_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->title;
        }

        return '';
    }

    public function link()
    {
        $ref = \App\Models\DocumentationTranslation::where('documentation_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->link;
        }

        return '';
    }

    public function languages()
    {
        $allLanguages = $this->languages;

        return $allLanguages->map(function ($language) {
            return $language->name;
        })->join(', ');
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
            new Filters\Languages('documentations'),
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
