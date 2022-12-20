<?php

namespace App\Nova;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Course>
     */
    public static $model = \App\Models\Course::class;

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

            Number::make('Année', function () {
                return __('classes.years.' . \App\Models\CourseTranslation::where('course_id', $this->id)->first()->year);
            }),

            Text::make('Option', function () {
                return __('classes.orientation.' . \App\Models\CourseTranslation::where('course_id', $this->id)->first()->orientation);
            })->textAlign('right'),

            Number::make('Traductions', function () {
                return $this->translationsCount();
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\CourseTranslation'),
            HasMany::make('Projets', 'projects', '\App\Nova\Project'),
        ];
    }

    public function title()
    {
        return \App\Models\CourseTranslation::where('course_id', $this->id)->first()->name;
    }

    public function translationsCount()
    {
        $translations = \App\Models\CourseTranslation::select('locale')->where('course_id', $this->id)->get();
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
            new Filters\CourseYear('id'),
            new Filters\CourseOrientation('id'),
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
