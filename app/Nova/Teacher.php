<?php

namespace App\Nova;

use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Teacher extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Teacher>
     */
    public static $model = \App\Models\Teacher::class;

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

            Avatar::make('Photo', function () {
                return $this->picture();
            }),

            Text::make('Name', function () {
                return $this->title();
            })->hideFromDetail(),

            Email::make('Email', function () {
                return $this->email();
            }),

            Number::make('Traductions', function () {
                return $this->translationsCount();
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\TeacherTranslation'),

            BelongsToMany::make('Cours', 'courses', 'App\Nova\Course'),
        ];
    }

    public function picture()
    {
        return \App\Models\TeacherTranslation::where('teacher_id', $this->id)->first()->picture;
    }

    public function title()
    {
        return \App\Models\TeacherTranslation::where('teacher_id', $this->id)->first()->fullname;
    }

    public function email()
    {
        return \App\Models\TeacherTranslation::where('teacher_id', $this->id)->first()->email;
    }

    public function translationsCount()
    {
        $translations = \App\Models\TeacherTranslation::select('locale')->where('teacher_id', $this->id)->get();
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
