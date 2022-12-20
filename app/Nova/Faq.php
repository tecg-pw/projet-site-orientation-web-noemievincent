<?php

namespace App\Nova;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Faq extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Faq>
     */
    public static $model = \App\Models\Faq::class;

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
            })->hideFromDetail()->displayUsing(function ($value) {
                return Str::limit($value, 60, '...');
            }),

            BelongsTo::make('Catégorie', 'category', 'App\Nova\FaqCategory')
                ->sortable(),

            HasMany::make('Traductions', 'translations', '\App\Nova\FaqTranslation'),

            Number::make('Traductions', function () {
                return $this->translationsCount();
            })->onlyOnIndex(),
        ];
    }

    public function title()
    {
        return \App\Models\FaqTranslation::where('faq_id', $this->id)->first()->title;
    }

    public function translationsCount()
    {
        $translations = \App\Models\FaqTranslation::select('locale')->where('faq_id', $this->id)->get();
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
            new Filters\FaqCategory(),
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
