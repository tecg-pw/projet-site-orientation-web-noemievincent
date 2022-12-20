<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class Project extends Resource
{
    public static $with = ['translations'];

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

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
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->hide(),

            Text::make('Titre', function () {
                return $this->title();
            })->hideFromDetail(),

            BelongsTo::make('Étudiant', 'student', '\App\Nova\Student'),
            BelongsTo::make('Cours', 'course', '\App\Nova\Course'),

            HasMany::make('Traductions', 'translations', '\App\Nova\ProjectTranslation'),

            BelongsToMany::make('Catégories', 'categories', 'App\Nova\ProjectCategory'),

            Text::make('Catégories', function () {
                return $this->categories();
            })->onlyOnIndex(),

            Date::make('Date', function () {
                return $this->date();
            })->onlyOnIndex(),

            Number::make('Traductions', function () {
                return $this->translationsCount();
            })->onlyOnIndex(),

        ];
    }

    public function title()
    {
        $ref = \App\Models\ProjectTranslation::where('project_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->title;
        }

        return "";
    }

    public function categories()
    {
        $allCategories = $this->categories;

        return $allCategories->map(function ($category) {
            return $category->translations->where('locale', app()->getLocale())->first()->name;
        })->join(', ');
    }

    public function date()
    {
        $ref = \App\Models\ProjectTranslation::where('project_id', $this->id)->first();
        if (isset($ref)) {
            return $ref->published_at;
//            return ucfirst($ref->published_at->translatedFormat('F Y'));
        }

        return "";
    }

    public function translationsCount()
    {
        $translations = \App\Models\ProjectTranslation::select('locale')->where('project_id', $this->id)->get();
        $locales = [];
        foreach ($translations as $translation) {
            $locales[] = $translation->locale;
        }

        return implode(', ', $locales);
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\Student(),
            new Filters\Course(),
            new Filters\ProjectCategory(),
            new Filters\Date(\App\Models\Project::class, \App\Models\ProjectTranslation::class, 'id'),
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
