<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Tutorial extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Tutorial>
     */
    public static $model = \App\Models\Tutorial::class;

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

            Number::make('Traductions', function () {
                return $this->translationsCount();
            })->onlyOnIndex(),

            HasMany::make('Traductions', 'translations', '\App\Nova\TutorialTranslation'),

            BelongsToMany::make('Languages'),
        ];
    }

    public function title()
    {
        return \App\Models\TutorialTranslation::where('tutorial_id', $this->id)->first()->title;
    }

    public function link()
    {
        return \App\Models\TutorialTranslation::where('tutorial_id', $this->id)->first()->link;
    }

    public function translationsCount()
    {
        $translations = \App\Models\TutorialTranslation::select('locale')->where('tutorial_id', $this->id)->get();
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
